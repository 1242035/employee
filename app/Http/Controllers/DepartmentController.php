<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    protected $fields = [
        'name' => '',
        'office_number' => '',
        'manager' => '',
    ];

    /**
     * Instantiate a new DepartmentController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();

        return view('departments.index', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = array();

        foreach(Employee::all() as $employee) {
            $employees[$employee->id] = $employees->name;
        }
//        $data = [];
//        foreach ($this->fields as $field => $default) {
//            $data[$field] = old($field, $default);
//        }

        return view('departments.create')
            ->with('department', Department::all())
            ->with('$employees', $employees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department;
        $department->name = $request->department_name;
        $department->office_number = $request->office_number;
        $department->manager = $request->manager;
        $department->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::find($id);

        return view('departments.show')->with('department', $department);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);

        $employees = array();

        foreach(Employee::all() as $employee) {
            $employees[$employee->id] = $employee->name;
        }

        $e = Employee::find($id);

        return view('departments.edit', compact('department', 'employees', 'e'));
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
        $department = Department::find($id);
        $department->name = $request->name;
        $department->office_number = $request->office_number;
        $department->manager = $request->input('employee');
        $department->employee_id = Employee::find($request->input('employee'));
        $department->save();

        dd($department->employee_id);

        return redirect('department/'.$department->id);
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
