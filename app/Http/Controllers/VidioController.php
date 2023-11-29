<?php

namespace App\Http\Controllers;

use App\Models\VideoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class VidioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getVidio';
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $data = $response->json();

        $title = 'Data Video';
        return view('pages.admin.vidio.index', compact('title', 'data'));
    }

    public function vidio()
    {
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getVidio';
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $data = $response->json();
        $vidio = $data[0];

        $title = 'Data Video';
        return view('pages.user.vidio', compact('title', 'vidio', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Data Vidio';
        $data = VideoModel::orderBy('created_at', 'desc')->get();
        return view('pages.admin.vidio.create', compact('title', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('foto') && $request->hasFile('vidio')) {
            $image = $request->file('foto');
            $new_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/thumbnail'), $new_image);

            $vidio = $request->file('vidio');
            $new_vidio = rand() . '.' . $vidio->getClientOriginalExtension();
            $vidio->move(public_path('assets/vidio'), $new_vidio);

            $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/createVidio';

            // Data yang akan dikirimkan dalam permintaan POST
            $data = [
                'judul' => $request->judul,
                'foto' => $new_image,
                'deskripsi' => $request->deskripsi,
                'vidio' => $new_vidio
            ];

            // Lakukan permintaan HTTP POST ke MongoDB Realm dengan header JSON
            $response = Http::withHeaders(['Content-Type' => 'application/json'])->post($endpointUrl, $data);
        }

        if ($response) {
            return redirect('vidio')->with('success', 'Data Video Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getVidioById?id=' . $id;
        $endpointAllUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getVidio';
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $data_first = $response->json();
        $vidio = $data_first[0];

        $response_all = Http::get($endpointAllUrl);
        $data = $response_all->json();

        $title = 'Data Video';
        return view('pages.user.vidio', compact('title', 'vidio', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data Video';
        $data = VideoModel::find($id);
        return view('pages.admin.vidio.update', compact('title', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = VideoModel::find($id);
        $file_image = null;
        $file_vidio = null;
        if ($request->hasfile('foto')) {
            $image = $request->file('foto');
            $destination = 'assets/thumbnail/' . $data->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/thumbnail/'), $file_image);
            $data->foto = $file_image;
        }
        if ($request->hasfile('vidio')) {
            $vidio = $request->file('vidio');
            $destination = 'assets/vidio/' . $data->vidio;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file_vidio = rand() . '.' . $vidio->getClientOriginalExtension();
            $vidio->move(public_path('assets/vidio/'), $file_vidio);
            $data->vidio = $file_vidio;
        }


        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/updateVidio?id=' . $id; // Data yang akan dikirimkan dalam permintaan POST

        $data = [
            'judul' => $request->judul,
            'foto' => ($file_image == null) ? $data->foto : $file_image,
            'deskripsi' => $request->deskripsi,
            'vidio' => ($file_vidio == null) ? $data->vidio : $file_vidio,
        ];

        // Lakukan permintaan HTTP POST ke MongoDB Realm dengan header JSON
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->put($endpointUrl, $data);

        if ($response) {
            return redirect('vidio')->with('success', 'Data Video Berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = VideoModel::find($id);
        $location = 'assets/thumbnail/' . $data->foto;
        if (File::exists($location)) {
            File::delete($location);
        }
        $location_vidio = 'assets/vidio/' . $data->vidio;
        if (File::exists($location_vidio)) {
            File::delete($location_vidio);
        }


        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/deleteVidio?id=' . $id;
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->delete($endpointUrl);

        if ($response) {
            return redirect('vidio')->with('success', 'Data Video Berhasil Dihapus');
        }
    }
}
