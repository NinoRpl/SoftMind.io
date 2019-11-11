<?php

namespace App\Http\Controllers;

use App\Http\Resources\lampuCollection;
use App\lampu;
use App\User;
use App\Admin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;

class UserController extends Controller
{
    public function index() {
        if(!Session::get('login')) {
            return redirect('signin')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('admin.home');
        }
    }

    public function login()
    {
        return view('auth.login');
    }

      public function loginPost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email', $email)->first();
        $admin = Admin::where('email', $email)->first();
        if($data) {
            if(Hash::check($password, $data->password)) {
                Session::put('nama', $data->nama);
                Session::put('email', $data->email);
                 Session::put('gambar', $data->gambar);
                Session::put('login', TRUE);
                 return redirect('/home_user');
            } else {
                return redirect('login')->with('alert', 'Password atau Email, Salah !');
            }
        } else if($admin) {
            if(Hash::check($password, $admin->password)) {
                Session::put('nama', $admin->nama);
                Session::put('email', $admin->email);
                Session::put('gambar', $admin->gambar);
                Session::put('login', TRUE);
                return redirect('/home_admin');
            } else {
                return redirect('login')->with('alert', 'Password atau Email, Salah !');
            }
        } else {
            return redirect('login')->with('alert', 'Password atau Email, Salah !');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('signin')->with('alert', 'Kamu sudah logout');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:4',
            'password' => 'required',
            'email' => 'required|min:4|email|unique:users',
            'alamat' => 'required',
            'profesi' => 'required',
            'gambar' => 'required'
        ]);
        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'img/users';
        $file->move($tujuan_upload, $nama_file);
        User::create([
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'alamat' => $request->alamat,
            'profesi' => $request->profesi,
            'gambar' => $nama_file
        ]);
        return redirect('signin')->with('alert-success', 'Kamu berhasil Daftar');
    }

    public function kontrolStore()
    {
        if(!Session::get('login')) {
            return redirect('signin')->with('alert', 'Kamu harus login dulu');
        } else {
            $data = lampu::get();
            return view('admin.user.dataLampu', ['data' => $data]);
        }
    }

    public function kontrolStroreApi()
    {
        $data = lampu::all();
        return (new lampuCollection($data))->response()->setStatusCode(201);
    }

    public function kontrolGet($id)
    {
        if(!Session::get('login')) {
            return redirect('signin')->with('alert', 'Kamu harus login dulu');
        } else {
            $data = DB::table('lampus') -> where('id', $id) -> get();
            return view('admin.user.controlling', ['data' => $data]);
        }
    }

    public function kontrolGetApi($id)
    {
        $data = DB::table('lampus') -> where('id', $id) -> get();
        return (new lampuCollection($data))->response()->setStatusCode(201);
    }

    public function kontrolPost(Request $request)
    {
        $data = lampu::find($request->id);

        $idLampu = $data->id;

        $data = DB::table('lampus') -> where('id', $request->id) -> update([
            'nama_lampu' => $request->nama_lampu,
            'status_lampu' => $request->status_lampu,
            'alamat_lampu' => $request->alamat_lampu
        ]);

        return redirect('/home_user/kontrol/'.$idLampu);
    }

    public function kontrolPostApi(Request $request)
    {
        $data = lampu::find($request->id);
        $data = DB::table('lampus') -> where('id', $request->id) -> update([
            'nama_lampu' => $request->nama_lampu,
            'status_lampu' => $request->status_lampu,
            'alamat_lampu' => $request->alamat_lampu
        ]);
        return (new lampuCollection($data))->response()->setStatusCode(201);
    }

    public function monitor()
    {
        if(!Session::get('login')) {
            return redirect('signin')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('admin.user.monitor');
        }
    }

    public function createDataGet()
    {
        if(!Session::get('login')) {
            return redirect('signin')->with('alert', 'Kamu harus login dulu');
        } else {
            return view('admin.user.addLampu');
        }
    }

    public function createDataPost(Request $request)
    {
        $data = new lampu;
        $data->nama_lampu = $request->nama;
        $data->status_lampu = $request->status;
        $data->alamat_lampu = $request->alamat;
        $data->save();

        return redirect('/home_user/kontrol');
    }

    public function deleteDataSiramin($id)
    {
        if(!Session::get('login')) {
            return redirect('signin')->with('alert', 'Kamu harus login dulu');
        } else {
            $data = lampu::find($id);
            $data -> delete();

            return redirect('/home_user/kontrol');
        }
    }

    public function editDataGet($id)
    {
        if(!Session::get('login')) {
            return redirect('signin')->with('alert', 'Kamu harus login dulu');
        } else {
            $data = DB::table('lampus') -> where('id', $id) -> get();
            return view('admin.user.editData', ['data' => $data]);
        }
    }

    public function editDataPost(Request $request, $id)
    {
        $data = lampu::find($id);
        $data->nama_lampu = $request->nama;
        $data->status_lampu = $request->status;
        $data->alamat_lampu = $request->alamat;
        $data->save();

        return redirect('/home_user/kontrol/'.$id);
    }

    public function reportGet()
    {
        return view('admin.user.report');
    }

    public function reportPost(Request $request)
    {
        $data = new Report;
        $data -> nama = $request -> nama;
        $data -> subjek = $request -> sebjek;
        $data -> isi = $request -> isi;
    }

}
