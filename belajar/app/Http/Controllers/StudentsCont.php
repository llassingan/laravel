<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsCont extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::all();
        return view('student.index',['students'=> $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // native
        //$student=new Student;
        //student-> isi objek , sedangkan request->sesuai name di form
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        //bawaan laravel, harus edit properti model
        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'jurusan' => $request->nama
        // ]);
    
        //validasi
        $request->validate([
            'nama'=>'required',
            'nim'=>'required',
            'jurusan'=>'required'

        ]);

        //cara ketiga, asumsi sudah ada filllable pada model
        //akan mengambil semua isi request (yg fillable) dan di store 
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data Added Succesfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // bakal show detail dari mahasiswa
        //  compact akan mengambil variable di controller dan dikirim ke view dgn nama yang sama
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //handle view form 
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //validasi data
        $request->validate([
            'nama'=>'required',
            'nim'=>'required',
            'jurusan'=>'required'

        ]);
        //akses model
        Student::where('id', $student->id)
                ->update([
                   'nama'=>$request->nama,
                   'nim'=>$request->nim ,
                   'jurusan'=>$request->jurusan
                ]);
                return redirect('/students/')->with('status', 'Data Changed Succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // karena sudah nge load use di bagian atas halaman, maka langsung panggil model
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Deleted Succesfully!');

    }
}
