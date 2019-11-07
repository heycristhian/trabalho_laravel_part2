<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
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
        $teachers = Teacher::All();
        return view('teacher.listTeacher', compact(['teachers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.createTeacher');
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
            'city_id' => 'required'
        ]);

        $teacher = new Teacher;
        $teacher->name = $request->name;
        $teacher->address = $request->address;
        $teacher->cpf = $request->cpf;
        $teacher->phone = $request->phone;
        $teacher->city_id = $request->city_id;
        $teacher->save();
        return redirect()->route('teacher.index');
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
        $teacher = Teacher::findOrFail($id);
        return view('teacher.editTeacher', compact('teacher'));
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
            'city_id' => 'required'
        ]);
        
        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->name;
        $teacher->address = $request->address;
        $teacher->cpf = $request->cpf;
        $teacher->phone = $request->phone;
        $teacher->city_id = $request->city_id[0];
        $teacher->save();
        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
}
