<?php

namespace App\Http\Controllers;

use App\Models\absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $absen=absen::all();
        if($keyword){
            $absen=absen::where("nis","LIKE","%$keyword%")->get();
        }
        return view('absen/index', compact('absen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absen/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis'=>'required',
            'jam_kedatangan'=>'required',
            'jam_kepulangan'=>'required',
            'foto'=>'image|file|max:2048'
        ]);

        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }


        //dokter::create($request->all());
        absen::create([
            'nis'=>$request['nis'],
            'jam_kedatangan'=>$request['jam_kedatangan'],
            'jam_kepulangan'=>$request['jam_kepulangan'],
            'foto'=>$imgName
        ]);

        return view('absen.show')->with('success','Data Absen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(absen $absen)
    {
        return view('absen.show', compact('absen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(absen $absen)
    {
        return view('absen.edit', compact('absen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, absen $absen)
    {
        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }
        absen::where('id',$absen->id)
        ->update(['nis'=>$request->nis,
        'jam_kedatangan'=>$request->jam_kedatangan,
        'jam_kepulangan'=>$request->jam_kepulangan,
        'foto'=>$imgName
        ]);
        return redirect('/absen')->with('success', 'Data absen Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(absen $absen)
    {
        absen::destroy($absen->id);
        return redirect('absen')->with('success','Data Absen Berhasil Dihapus');
    }
}
