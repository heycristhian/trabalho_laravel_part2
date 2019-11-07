<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::All();
        return view('student.listStudent', compact(['students']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.createStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'cpf' => 'required',
            'phone' => 'required',
            'city_id' => 'required',
            'year_id' => 'required'
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->cpf = $request->cpf;
        $student->phone = $request->phone;
        $student->city_id = $request->city_id;
        $student->year_id = $request->year_id;
        $student->save();
        return redirect()->route('student.index');
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
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.editStudent', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'cpf' => 'required',
            'phone' => 'required',
            'city_id' => 'required',
            'year_id' => 'required'
        ]);
        
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->address = $request->address;
        $student->cpf = $request->cpf;
        $student->phone = $request->phone;
        $student->city_id = $request->city_id[0];
        $student->year_id = $request->year_id[0];
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
