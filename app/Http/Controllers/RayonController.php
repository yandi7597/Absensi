<?php

namespace App\Http\Controllers;

use App\Models\rayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $rayon=rayon::all();
        if($keyword){
            $rayon=rayon::where("rayon","LIKE","%$keyword%")->get();
        }
        return view('rayon/index', compact('rayon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rayon/create');
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
            'nama_rayon'=>'required',
            'pembimbing'=>'required'
            
        ]);
        rayon::create($request->all());

        return redirect('/rayon')->with('success', 'Data Rayon Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function show(rayon $rayon)
    {
         return view('rayon.show', compact('rayon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function edit(rayon $rayon)
    {
         return view('rayon.edit', compact('rayon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rayon $rayon)
    {
        rayon::where('id',$rayon->id)
        ->update([
        'nama_rayon'=>$request->rayon,
        'pembimbing'=>$request->pembimbing
        ]);
        return redirect('/rayon')->with('success', 'Data Rayon Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rayon  $rayon
     * @return \Illuminate\Http\Response
     */
    public function destroy(rayon $rayon)
    {
        rayon::destroy($rayon->id);
        return redirect('rayon')->with('success','Data Rayon Berhasil Dihapus');
    }
}
