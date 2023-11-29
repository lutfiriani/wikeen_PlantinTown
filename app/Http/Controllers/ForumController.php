<?php

namespace App\Http\Controllers;

use App\Models\ForumModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getForum';
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $data = $response->json();;

        $title = 'Forum';
        return view('pages.user.forum.forum', compact('title', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Post Forum';
        return view('pages.user.forum.post-forum', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ForumModel();
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/createForum';

        // Data yang akan dikirimkan dalam permintaan POST
        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'penulis' => Auth::user()->name,
            'comment' => []
        ];

        // Lakukan permintaan HTTP POST ke MongoDB Realm dengan header JSON
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->post($endpointUrl, $data);

        if ($response) {
            return redirect()->route('forum-create')->with('success', 'Topik Berhasil Dibuat');
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
        $title = 'Post Forum';
        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/getForumById?id=' . $id;
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $response = Http::get($endpointUrl);
        $get_first = $response->json();
        $data = $get_first[0];

        return view('pages.user.forum.forum-chat', compact('title', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        $endpointUrl = 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-jktwo/endpoint/pushComment?id=' . $id;
        // Lakukan permintaan HTTP GET ke endpoint MongoDB Realm
        $data = [
            'pengirim' => Auth::user()->name,
            'pesan' => $request->pesan,
            'tanggal' => date('Y-m-d')
        ];

        // Lakukan permintaan HTTP POST ke MongoDB Realm dengan header JSON
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->put($endpointUrl, $data);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
