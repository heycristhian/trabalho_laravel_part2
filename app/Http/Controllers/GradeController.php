<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;

class GradeController extends Controller
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
        $grade = Discipline::All();
        return view('grade.listGrade', compact(['grade']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grades.createGrades');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grade = new Grade;
        $grade->bimester = $request->bimester;
        $grade->year = $request->year;        
        $grade->teacher_id = $request->teacher_id;        
        $grade->student_id = $request->student_id;
        $grade->discipline_id = $request->discipline_id;
        $grade->save();
        return redirect()->route('grade.index');
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
        $grade = Grade::findOrFail($id);
        return view('grade.editGrade', compact('grade'));
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
        $grade = Grade::findOrFail($id);
        $grade->bimester = $request->bimester;
        $grade->year = $request->year;        
        $grade->teacher_id = $request->teacher_id;        
        $grade->student_id = $request->student_id;
        $grade->discipline_id = $request->discipline_id;
        $grade->save();
        return redirect()->route('grade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);
        $grade->delete();
        return redirect()->route('grade.index');
    }
}
