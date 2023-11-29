<?php

namespace App\Http\Controllers;

use App\Models\TanamanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class TanamanUtaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { // Ganti URL endpoint sesuai dengan URL yang sesuai di MongoDB Realm
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getTanamanUtara';
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $data = $response->json();

        $title = 'Data Tanaman Utara';
        return view('pages.admin.tanaman-utara.index', compact('title', 'data'));
    }

    public function tanaman_utara_user()
    {
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getTanamanUtara';
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $data = $response->json();

        $title = 'Data Tanaman Utara';
        return view('pages.user.utara', compact('title', 'data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Data Tanaman Utara';
        return view('pages.admin.tanaman-utara.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $new_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/tanaman-utara'), $new_image);

            $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/createTanamanUtara';

            // Data yang akan dikirimkan dalam permintaan POST
            $data = [
                'nama_tanaman' => $request->nama_tanaman,
                'perawatan' => $request->perawatan,
                'umur_tanaman' => $request->umur_tanaman,
                'panen' => $request->panen,
                'air_pupuk' => $request->air_pupuk,
                'foto' => $new_image,
            ];

            // Lakukan permintaan HTTP POST ke MongoDB Realm dengan header JSON
            $response = Http::withHeaders(['Content-Type' => 'application/json'])->post($endpointUrl, $data);
        }

        if ($response) {
            return redirect('tanaman-utara')->with('success', 'Data Tanaman Utara Berhasil Ditambahkan');
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
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getTanamanById?id=' . $id;
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $get_first = $response->json();
        $data = $get_first[0];

        $title = 'Data Tanaman Utara';
        return view('pages.user.tanaman-detail', compact('title', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data Tanaman Utara';
        $data = TanamanModel::find($id);
        return view('pages.admin.tanaman-utara.update', compact('title', 'data'));
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
        $data = TanamanModel::find($id);
        $file_image = null;
        if ($request->hasfile('foto')) {
            $image = $request->file('foto');
            $destination = 'assets/tanaman-utara/' . $data->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/tanaman-utara/'), $file_image);
            $data->foto = $file_image;
        }

        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/updateTanamanUtara?id=' . $id; // Data yang akan dikirimkan dalam permintaan POST

        if ($file_image == null) {
            $data = [
                'nama_tanaman' => $request->nama_tanaman,
                'perawatan' => $request->perawatan,
                'umur_tanaman' => $request->umur_tanaman,
                'panen' => $request->panen,
                'air_pupuk' => $request->air_pupuk,
                'foto' => $data->foto,
            ];
        } else {
            $data = [
                'nama_tanaman' => $request->nama_tanaman,
                'perawatan' => $request->perawatan,
                'umur_tanaman' => $request->umur_tanaman,
                'panen' => $request->panen,
                'air_pupuk' => $request->air_pupuk,
                'foto' => $file_image,
            ];
        }

        // Lakukan permintaan HTTP POST ke MongoDB Realm dengan header JSON
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->put($endpointUrl, $data);

        if ($data) {
            return redirect('tanaman-utara')->with('success', 'Data Tanaman Utara Berhasil Diupdate');
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
        $data = TanamanModel::find($id);
        $location = 'assets/tanaman-utara/' . $data->foto;
        if (File::exists($location)) {
            File::delete($location);
        }
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/deleteTanaman?id=' . $id;
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->delete($endpointUrl);

        if ($response) {
            return redirect('tanaman-utara')->with('success', 'Data Tanaman Utara Berhasil Dihapus');
        }
    }
}
