<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang; // use model

class BarangController extends Controller
{
	public function index(){
		$barangs = Barang::all();
		return view('barang.show', ['barang' => $barangs]);
	}

	public function create(){
		return view('barang.create');
	}

	public function insert(Request $request){
		$barang = new Barang;
		$barang->kode_barang = $request->kode_barang;
		$barang->nama_barang = $request->nama_barang;
		$barang->stok = $request->stok;
		$barang->save();

		return redirect(route('index'))->with('alert-success','Berhasil Menambahkan Data!');;
		// return redirect()->route('index');
		// return redirect()->action('BarangController@index');
		// return Redirect::action('BarangController@index');
	}   

	public function delete($id){
        $barang = Barang::findOrFail($id);
        // dd($barang);
        $barang->delete();
        return redirect(route('index'))->with('success','Data berhasil dihapus');
    }

}



