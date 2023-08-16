<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;
use App\Models\transaksi;

class TransaksiController extends Controller
{
    public function index()
    {   
        $data = transaksi::all();
        return view('Transaksi.tampil_transaksi', compact('data'));
    }

    public function tambahTransaksi(){
        $data = obat::all();
        return view('Transaksi.add_transaksi', compact('data'));
    }

    public function insertTransaksi(Request $request){
            
    
        $data = transaksi::create([
            'jumlah' =>$request->jumlah,
            'total' =>$request->harga,
            'id_obat' => $request->nama_obat,
        ]);
        return redirect()->route('index_transaksi', compact('data'));
        // dd($data);
    }


    public function delete($id){
        $data = transaksi::find($id);
        $data->delete();
        return redirect()->route('index_transaksi');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $data = obat::where('nama_obat', 'LIKE', '%' . $keyword . '%');

        return view('Transaksi.tampil_transaksi',compact('data'));

        // dd($data);
    }

    // public function addBeli(){
        
    //     $data = transaksi::all();
    //     $datas = obat::all();
        
    //     $price = 0; 
        
    //     foreach ($data as $dt) {
    //         $subtotal = $dt['obat']['harga'] * $dt['jumlah'];
    //         $price += ($dt['obat']['harga'] * $dt['jumlah']);
    //     }
        
    //     return view('Transaksi.tampil_transaksi', compact('data', 'datas', 'price'));
    // }

}
