<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getArtikel';
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $data = $response->json();

        $title = 'Data Artikel';
        return view('pages.admin.artikel.index', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Data Artikel';
        return view('pages.admin.artikel.create', compact('title'));
    }

    public function artikel()
    {

        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getArtikel';
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $get_data = $response->json();

        $data = $get_data;
        $latest_news = $get_data;
        $article_like = $get_data;
        $main = $get_data;
        $title = 'Data Artikel';
        return view('pages.user.artikel.artikel', compact('title', 'data', 'latest_news', 'article_like', 'main'));
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
            $image->move(public_path('assets/artikel'), $new_image);

            $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/createArtikel';

            // Data yang akan dikirimkan dalam permintaan POST
            $data = [
                'penulis' => $request->penulis,
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'foto' => $new_image,
                'konten' => $request->konten,
            ];

            // Lakukan permintaan HTTP POST ke MongoDB Realm dengan header JSON
            $response = Http::withHeaders(['Content-Type' => 'application/json'])->post($endpointUrl, $data);
        }

        if ($response) {
            return redirect('artikel')->with('success', 'Data Artikel Berhasil Ditambahkan');
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
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getArtikelById?id=' . $id;
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $data = $response->json();

        $data = ArtikelModel::find($id);
        $title = 'Data Artikel';
        return view('pages.user.artikel.artikel-detail', compact('title', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Data Artikel';
        $data = ArtikelModel::find($id);
        return view('pages.admin.artikel.update', compact('title', 'data'));
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
        $data = ArtikelModel::find($id);
        $file_image = null;
        if ($request->hasfile('foto')) {
            $image = $request->file('foto');
            $destination = 'assets/artikel/' . $data->foto;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file_image = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/artikel/'), $file_image);
            $data->foto = $file_image;
        }

        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/updateArtikel?id=' . $id; // Data yang akan dikirimkan dalam permintaan POST

        $data = [
            'penulis' => $request->penulis,
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'foto' => ($file_image == null) ? $data->foto : $file_image,
            'konten' => $request->konten,
        ];

        // Lakukan permintaan HTTP POST ke MongoDB Realm dengan header JSON
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->put($endpointUrl, $data);

        if ($response) {
            return redirect('artikel')->with('success', 'Data Artikel Berhasil Diupdate');
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
        $data = ArtikelModel::find($id);
        $location = 'assets/artikel/' . $data->foto;
        if (File::exists($location)) {
            File::delete($location);
        }

        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/deleteArtikel?id=' . $id;
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->delete($endpointUrl);
        if ($response) {
            return redirect('artikel')->with('success', 'Data Artikel Berhasil Dihapus');
        }
    }
}
