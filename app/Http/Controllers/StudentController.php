<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\student;
use App\Http\Resources\student as StudentResource;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get students
        $students = student::all();

        return StudentResource::collection($students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function store(Request $request)
    {
        //
        $student = $request->isMethod('put') ? student::findOrFail($request->student_id) : new student;

        $student->student_id = $request->input('student_id');

        $student->Name = $request->input('Name');

        $student->Address= $request->input('Address');

        $student->gender = $request->input('gender');

         $student->year = $request->input('year');
       
        if($student->save()) {
            return new studentResource($student);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get a single student
        $student = student::findOrfail($id);

        return new studentResource($student);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
        $student = student::findOrfail($id);

        if($student->delete()) {

        return new studentResource($student);

        }
    }
}
