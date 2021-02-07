<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksis = Transaksi::all();
    	return view('backend.transaksi.index', compact('transaksis'));
    }
    public function create()
    {
        return view('backend.transaksi.create');
    } 
    public function store(Request $request)
    {   
        $this->validate($request,[
            'nomor'     => 'required',
            'nama'      => 'required',
            'jenis'     => 'required',
            'total'     => 'required',
            'tgl'       => 'required',
        
        ]);
        
        $transaksis = Transaksi::create([
            'nomor'     =>  $request->nomor,
            'nama'      =>  $request->nama,
            'jenis'     =>  $request->jenis,
            'total'     =>  $request->total,
            'tgl'       =>  $request->tgl,

        ]);
        $transaksis->save();
        return redirect()->back();
    }
}