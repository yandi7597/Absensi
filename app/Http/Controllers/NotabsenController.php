<?php

namespace App\Http\Controllers;

use App\Models\notabsen;
use Illuminate\Http\Request;

class NotabsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword=$request->get('keyword');
        $notabsen=notabsen::all();
        if($keyword){
            $notabsen=notabsen::where("nis","LIKE","%$keyword%")->get();
        }
        return view('notabsen/index', compact('notabsen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notabsen/create');
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
            'keterangan'=>'required',
            'foto'=>'image|file|max:2048'
        ]);

        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }


        //dokter::create($request->all());
        notabsen::create([
            'nis'=>$request['nis'],
            'keterangan'=>$request['keterangan'],
            'foto'=>$imgName
        ]);

        return view('notabsen.show')->with('status','Data Absen Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notabsen  $notabsen
     * @return \Illuminate\Http\Response
     */
    public function show(notabsen $notabsen)
    {
        return view('notabsen.show', compact('notabsen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notabsen  $notabsen
     * @return \Illuminate\Http\Response
     */
    public function edit(notabsen $notabsen)
    {
        return view('notabsen.edit', compact('notabsen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notabsen  $notabsen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notabsen $notabsen)
    {
        $imgName=null;
        if($request->foto){
            $imgName=$request->foto->getClientOriginalName() .'-' . time(). '-' . $request->foto->extension();    
            
            //$imgName=$request->foto->getClientOriginalName();
            $request->foto->move(public_path('post-images'),$imgName);
        }
        notabsen::where('id',$notabsen->id)
        ->update(['nis'=>$request->nis,
        'keterangan'=>$request->keterangan,
        'foto'=>$imgName
        ]);
        return redirect('/notabsen')->with('status', 'Data absen Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notabsen  $notabsen
     * @return \Illuminate\Http\Response
     */
    public function destroy(notabsen $notabsen)
    {
        notabsen::destroy($notabsen->id);
        return redirect('notabsen')->with('status','Data Absen Berhasil Dihapus');
    }
}
