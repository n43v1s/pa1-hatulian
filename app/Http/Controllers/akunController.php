<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class akunController extends Controller
{

    public function index()
    {
        return view('akun.index');
    }

    public function create()
    {
        return view('akun.register');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'jenisKelamin'=>'required',
            'username'=>'required|unique:users,username|max:100',
            'password'=>'required|min:8',
            'konfirmasiPassword'=>'required|same:password'
        ]);
        DB::table('users')->insert(
            [
                'name'=>$request->nama,
                'email'=>$request->email,
                'jenisKelamin'=>$request->jenisKelamin,
                'username'=>$request->username,
                'password'=>bcrypt($request->password),
                'role' =>'user',
                'remember_token' =>str_shuffle($request->password)
            ]
            );
        return redirect('/akun')->with('status','Anda berhasil mendaftar, silahkan login');

    }
    public function login(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'password' => 'required|min:8'
        ]);
        stripslashes(strtolower($request->username));
        stripslashes($request->password);
        if(Auth::attempt($request->only('username','password'))){
            $id = DB::table('users')->where('username',$request->username)->get('id')[0];
            $roles = DB::table('users')->where('username',$request->username)->get('role')[0];
            $id2 = end($id);
            $role = end($roles);
            if($role == 'user'){
                return redirect('/informasi/'.$id2);
            }elseif($role == 'admin'){
                return redirect('/admin/request');
            }
        }
        else{
            return redirect('/akun')->with('state','username dan password tidak match');
        }


    }

    public function loginpro($id){
        return view('informasi.index',['id'=>$id]);
    }
    public function logout()
    {
        auth::logout();
        return redirect('/akun');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
