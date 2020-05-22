<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sd()
    {
    	return view('daftar.sd');
    }
    public function smp()
    {
    	return view('daftar.smp');
    }
    public function sma()
    {
    	return view('daftar.sma');
    }
    public function smk()
    {
    	return view('daftar.smk');
    }
    public function bayar()
    {
    	// return view('daftar.invoice');
    }
}
