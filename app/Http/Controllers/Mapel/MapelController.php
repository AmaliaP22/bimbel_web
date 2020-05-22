<?php

namespace App\Http\Controllers\Mapel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mapel;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
        $arr['mapel'] = Mapel::all();
    	return view('mapel.index')->with($arr);
    }
    public function index1()
    {
        $arr['mapel'] = Mapel::all();
    	return view('mapel.index1')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    	return view('mapel.create'); 
    }
    public function edit()
    {
        
    	return view('mapel.edit'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $mapel->mapel = request('mapel');
            $mapel->jenjang = request('jenjang');
            $mapel->harga = request('harga');
            $mapel->save();
            session()->flash("message", "Data berhasil disimpan");
            return redirect()->route('mapel.index');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Mapel $mapel)
    {
       
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
