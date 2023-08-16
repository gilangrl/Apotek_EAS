<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;

class ObatController extends Controller
{
    public function index()
    {
        $data = obat::latest()->paginate(4);
        return view('Obat.tampil_obat', compact('data'));
    }

    public function tambahObat(){
        return view('Obat.add_obat');
    }

    public function insert_obat(Request $request){

        $data = obat::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('foto_obat/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        dd($data);
        // return redirect()->route('index_obat');
    }

    public function editObat($id){

        $data = obat::find($id);
        return view('Obat.edit_obat', compact('data'));
        // dd($data);
    }

    public function updateObat(Request $request,$id){

        $data = obat::find($id);
        $data->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('foto_obat/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
       return redirect()->route('index_obat');
        // dd($data);
    }

    public function delete($id)
    {
        $data = obat::find($id);
        $data->delete();
        return redirect()->route('index_obat');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $data = obat::where('nama_obat', 'LIKE', '%' . $keyword . '%')
                ->orWhere('jenis_obat', 'LIKE', '%' . $keyword . '%')
                ->paginate(4);

        // dd($data);
        return view('Obat.tampil_obat',compact('data'));
    }
}
