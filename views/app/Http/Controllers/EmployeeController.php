<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        // tạo đối tượng của model
        $obj = new Employee();
        //gọi đến func index trong model để lấy giữu liệu
        $Employee = $obj->index();
        //trả về view và gửi theo dữ liệu
        return view('Employee.index',[
            'Employee'=>$Employee
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'Employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request)
    {


        $obj = new Employee();
        $obj->name =$request->name;
        $obj->password =$request->password;
        $obj->email =$request->email;
        $obj->address =$request->address;
        $obj->role =$request->role;

        // goij fun
       $obj->store();
        //quay ve rout hieen thij danhsach
        return Redirect::route('Employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee, Request $request)
    {
        // tao doi tuonwg
        $obj = new Employee();
       // lay du lieu dua tren id
      $obj ->id= $request->id;
      // goij den funlay ban ghi theo id trong model
      $employee =$obj->edit();

        return view( 'Employee.edit',[
            'Employees'=>$employee
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $obj=  new Employee();
        $obj->id = $request->id;
        $obj->name = $request->name;
        $obj->password = $request->password;
        $obj->email = $request->email;
        $obj->address = $request->address;
        $obj->role = $request->role;
        //goi fun update mode
        $obj->updateEmployee();
        //quay veef
        return Redirect::route('Employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee, Request $request)
    {
        // lay doi tuowng
        $obj = new Employee();
        $obj->id = $request->id;
        // goi fun xoas
        $obj->destroyEmployee();
        //quy vef routue
        return Redirect::route('Employees.index');
    }
}
