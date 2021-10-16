<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //table siswa
        $students = Student::all();

        return view ('students.student',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            'nama'=>'required',
            'nis'=>'required',
            'kelas'=>'required',
            'alamat'=>'required',
        ]);


            Student::create($request->all());

        return redirect('/student')->with('status','Data Siswa Berhasil Ditambahkan !');
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
    public function edit( Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // return request();
       $request->validate([

        'nama'=>'required',
        'nis'=>'required',
        'kelas'=>'required',
        'alamat'=>'required',
    ]);
    Student::where('id',$student->id)
        ->update([

            'nama' => $request->nama,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
        ]);
        return redirect('/student')->with('status','Data Siswa Berhasil DiEdit !');
    }

    public function delete(Student $student)
   {
       $student = Student::find($student->id);       //cari id yang dipencet
       $student->delete();                  //delete id tersebut

       return redirect('/student')->with('status', 'Data Berhasil Dihapus');                //redirect lagi ke home
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
