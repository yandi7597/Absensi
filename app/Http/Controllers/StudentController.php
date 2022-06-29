<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\rombel;
use App\Models\rayon;  
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::latest()->paginate(5);
        return view('students.index',compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rombel = rombel::all();
        $rayon = rayon::all();
        return view('students.create',compact('rombel', $rombel,'rayon', $rayon));

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
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
    
        Student::create($request->all());
     
        return redirect()->route('students.index')
                        ->with('success','Data Student Berhasil disimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $rombel = rombel::all();
        $rayon = rayon::all();
        return view('students.edit',compact('student','rombel','rayon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'rombel' => 'required',
            'rayon' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
            
        $student->update($request->all());
    
        return redirect()->route('students.index')
                        ->with('success','Data Student Berhasil diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
     
        return redirect()->route('students.index')
                        ->with('success','Data Student Berhasil dihapus !');
    }
}