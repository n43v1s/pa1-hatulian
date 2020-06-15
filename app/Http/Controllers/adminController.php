<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    public function request(){
        $informasi = DB::table('_image_informasi')->get();
        $row = [];
        foreach ( $informasi as $img){
            if(is_Null($img->updated_at)){
                $row[] = $img;
            }else{
                $ok = 'kosong';
            }
        }

        $informasiFile = DB::table('_file_informasi')->get();
        $rows = [];
        foreach ( $informasiFile as $file){
            if(is_Null($file->updated_at)){
                $rows[] = $file;
            }else{
                $ok = 'kosong';
            }
        }
        return view('admin.request',['informasiGambar'=>$row],['informasiFile'=>$rows]);
    }

    public function detail($id){
        $detailGambar = DB::table('_image_informasi')->where('imageId',$id)->get();

        return view('admin.detail', ['detailGambar'=>$detailGambar]);
    }
    public function detail2($id){
        $detailfile = DB::table('_file_informasi')->where('fileId',$id)->get();

        return view('admin.detail2', ['detailfile'=>$detailfile]);
    }

    public function setuju($id){
        DB::table('_image_informasi')->where('imageId',$id)->update([
            'updated_at' => now()
        ]);

        return redirect('/informasiTerbaru');
    }
    public function setuju2($id){
        DB::table('_file_informasi')->where('fileId',$id)->update([
            'updated_at' => now()
        ]);

        return redirect('/informasiTerbaru');
    }

    public function tolak($id){
        DB::table('_image_informasi')->where('imageId',$id)->delete();

        return redirect('informasiTerbaru');
    }
    public function tolak2($id){
        DB::table('_file_informasi')->where('fileId',$id)->delete();

        return redirect('informasiTerbaru');
    }
}
