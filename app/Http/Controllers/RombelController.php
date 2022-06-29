<?php

namespace App\Http\Controllers;

use App\Models\rombel;
use Illuminate\Http\Request;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $rombel=rombel::all();
        if($keyword){
            $rombel=rombel::where("rombel","LIKE","%$keyword%")->get();
        }
        return view('rombel/index', compact('rombel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rombel/create');
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
            'nama_rombel'=>'required'
        ]);
        rombel::create($request->all());

        return redirect('/rombel')->with('success', 'Data Rombel Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function show(rombel $rombel)
    {
        return view('rombel.show', compact('rombel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function edit(rombel $rombel)
    {
        return view('rombel.edit', compact('rombel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rombel $rombel)
    {
        rombel::where('id',$rombel->id)
        ->update(['nama_rombel'=>$request->nama_rombel]);
        return redirect('/rombel')->with('success', 'Data Rombel Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function destroy(rombel $rombel)
    {
        rombel::destroy($rombel->id);
        return redirect('rombel')->with('success','Data Rombel Berhasil Dihapus');
    }
}
