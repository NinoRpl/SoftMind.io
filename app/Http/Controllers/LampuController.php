<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\lampu;
use Illuminate\Http\Request;
use App\Http\Resources\lampuCollection;

class LampuController extends Controller
{

    public function store() {
        $lampu = lampu::get();
        return view('Lamp', ['lampu' => $lampu]);
    }

    public function controller($id) {
        $lampu = DB::table('lampus')->where('id', $id)->get();
        return view('Lampu', ['lampu' => $lampu]);
    }

    public function controllku(Request $request) {
        $lampu = lampu::find($request -> id);

        $data = DB::table('lampus') -> where('id', $request -> id) -> update([
            'nama_lampu' => $request -> nama_lampu,
            'status_lampu' => $request -> status_lampu,
            'alamat_lampu' => $request -> alamat_lampu,
        ]);

        return redirect('/Lampu');
        // return lampuCollection::collection(lampu::all());
    }

    public function controllkuApi() {

        return new lampuCollection(lampu::all()->keyBy->id);
    }
}
