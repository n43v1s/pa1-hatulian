<?php

namespace App\Http\Controllers;

use Hamcrest\Type\IsString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class informasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('informasi.index',['id'=>$id]);
    }
    public function gambar($id)
    {
        return view('informasi.gambar', ['id'=>$id]);
    }
    public function file($id){
        return view('informasi.file',['id'=>$id]);
    }
    public function gambarProses(Request $request,$id){
        $this->validate($request,[
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' =>'required|max:1000'
        ]);

        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'assets/upload';

        $file->move($tujuanFile,$namaFile);
        $nama = DB::table('users')->where('id',$id)->get('name')[0];
        $user = end($nama);
        DB::table('_image_informasi')->insert([
            'name' => $namaFile,
            'nama' => $user,
            'deskripsi'=>$request->deskripsi,
            'created_at'=>now()
        ]);

        return redirect("/informasi/$id");
    }
    public function fileProses(Request $request,$id){
        $this->validate($request,[
            'file' => 'required|file|mimes:pdf,docx|max:2048'
        ]);

        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'assets/upload';

        $file->move($tujuanFile,$namaFile);
        $nama = DB::table('users')->where('id',$id)->get('name')[0];
        $user = end($nama);
        DB::table('_file_informasi')->insert([
            'name' => $namaFile,
            'nama' => $user,
            'deskripsi'=>$request->deskripsi,
            'created_at'=>now()
        ]);

        return redirect("/informasi/$id");
    }
    public function informasi(){
        $image = DB::table('_image_informasi')->get();
        $row = [];
        foreach ( $image as $img){
            if(is_Null($img->updated_at)){
                $set = 'kosong';
            }else{
                $row[] = $img;
            }
        }

        $files = DB::table('_file_informasi')->get();
        $rows = [];
        foreach ( $files as $file){
            if(is_Null($file->updated_at)){
                $set = 'kosong';
            }else{
                $rows[] = $file;
            }
        }
        return view('informasiTerbaru',['informasiImage'=>$row],['informasifile'=>$rows]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
