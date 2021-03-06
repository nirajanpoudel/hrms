<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Department;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    protected $department;

    public function __construct(Department $department){
        $this->department = $department;
    }
    /**
     * Display a listing of the resource.
     *p
     * @return Response
     */
    public function index()
    {
        $departments = $this->department->all();
        return view('department.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('department.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input =  $request->all();
       // return $input;
        $this->department->name = $request->name;
        $this->department->departments = $request->departments;

        $this->department->save();
        return redirect('departments');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $departments = $this->department->all();
       $department = $this->department->find($id);
       return view("department.edit",compact('department','departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        
        $this->department = $this->department->find($id);
        // $this->department->department->name = $request->name;
        // $this->department->department->departments = $request->departments;
        $this->department->update( $input);
        return redirect('departments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
