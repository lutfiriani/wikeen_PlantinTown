<?php

namespace App\Http\Controllers;

use App\Models\TanamanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class TanamanSelatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = TanamanModel::where('lokasi', 'selatan')->orderBy('created_at', 'desc')->get();

        // Ganti URL endpoint sesuai dengan URL yang sesuai di MongoDB Realm
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/GetTanamanSelatan';
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $data = $response->json();

        $title = 'Data Tanaman Selatan';
        return view('pages.admin.tanaman-selatan.index', compact('title', 'data'));
    }


    public function tanaman_selatan_user()
    {
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/GetTanamanSelatan';
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $data = $response->json();

        $title = 'Data Tanaman Selatan';
        return view('pages.user.selatan', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Data Tanaman Selatan';
        return view('pages.admin.tanaman-selatan.create', compact('title'));
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
            $image->move(public_path('assets/tanaman-selatan'), $new_image);

            $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/createTanamanSelatan';

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
            return redirect('tanaman-selatan')->with('success', 'Data Tanaman Selatan Berhasil Ditambahkan');
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

        $title = 'Data Tanaman Selatan';
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
        $title = 'Edit Data Tanaman Selatan';
        $data = TanamanModel::find($id);
        return view('pages.admin.tanaman-selatan.update', compact('title', 'data'));
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
        // $data->nama_tanaman = $request->nama_tanaman;
        // $data->lokasi = 'selatan';
        // $data->perawatan = $request->perawatan;
        // $data->umur_tanaman = $request->umur_tanaman;
        // $data->panen = $request->panen;
        // $data->air_pupuk = $request->air_pupuk;
        $file_image = null;
        if ($request->hasfile('foto')) {
            $image = $request->file('foto');
            $destination = 'assets/tanaman-selatan/' . $data->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/tanaman-selatan/'), $file_image);
            $data->foto = $file_image;
        }
        // $data->update();v

        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/updateTanamanSelatan?id=' . $id; // Data yang akan dikirimkan dalam permintaan POST

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

        if ($response) {
            return redirect('tanaman-selatan')->with('success', 'Data Tanaman Selatan Berhasil Diupdate');
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
        $location = 'assets/tanaman-selatan/' . $data->foto;
        if (File::exists($location)) {
            File::delete($location);
        }
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/deleteTanaman?id=' . $id;
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->delete($endpointUrl);

        if ($response) {
            return redirect('tanaman-selatan')->with('success', 'Data Tanaman Selatan Berhasil Dihapus');
        }
    }
}
