<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // http://127.0.0.1:8001/api/displayall  
    public function index()
    {
        //
        return Employee::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     // http://127.0.0.1:8001/api/insert
    public function store(Request $request)
    {
        $emp = new Employee();

        $emp->name = $request->name;
        $emp->address = $request->address;
        $emp->gender = $request->gender;

        $emp->save();

        return redirect('/');
        // response()->json([
        //     "status" => 1,
        //     "messege" => "employee sucessfully registered"
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // http://127.0.0.1:8001/api/displayone/2
    public function show($id)
    {
        //
        return Employee::find($id);
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
    // http://127.0.0.1:8000/api/update/2
    public function update(Request $request, $id)
    {
        //
        $employee = Employee::find($id);
        $employee->update($request->all());
        return $employee;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // http://127.0.0.1:8000/api/delete/2
    public function destroy($id)
    {
        //
        $employee = Employee::find($id);

        $employee->delete();
    
        return response()->json([
            "status" => 1,
            "messege" => "Employee sucessfully deleted",
        ]);
    }
}
