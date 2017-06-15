<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


use App\Http\Requests;
use App\User;
use App\User_Role;
use App\Role;
use App\Permission;
use App\Employee;
use App\Company;
use App\Job;
use DB;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.companies.new');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company;
        $company->name = Input::get('name');
        $company->email = Input::get('email');
        $company->phone = Input::get('phone');
        $company->user_id = Auth::user()->id;
        $company->save();

        // Create Job Info for this user
        $job = new Job;
        $job->company_id = $company->id;
        $job->title = "Admin of ".$company->name;
        $job->description = "Created default administrator job for company owner";
        $job->save();

        // Create Employee account for this company
        $employee = new Employee;
        $employee->user_id = session('user_id');
        $employee->company_id = $company->id;
        $employee->job_id = $job->id;
        $employee->status = "Owner/CEO";
        $employee->save();

        // Add User role for this employee
        $role = Role::where('name','Admin')->get();
        $role_id = $role[0]->id;
        $permissions = Permission::all();
        foreach ($permissions as $permission) {
            $user_role = new User_Role;
            $user_role->employee_id = $employee->id;
            $user_role->role_id = $role_id;
            $user_role->permission_id = $permission->id;
            $user_role->save();
        }

        // Retrieve all permissions assigned
        $user_roles = User_Role::where([
            ['employee_id', '=', $employee->id],
            ['role_id', '=', $role_id]
        ])->get();

        $user = User::find($employee->user_id);
        $role_name = Role::find($role_id);

        $user_permissions = array();
        foreach ($user_roles as $user_role) {
            $name = Permission::find($user_role->permission_id);
            array_push($user_permissions, $name);
        }
        
        return view('dashboard.user_roles.view', compact('user_permissions','user', 'role_name'));
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
    }
}
