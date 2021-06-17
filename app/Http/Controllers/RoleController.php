<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all(); //Get all permissions
        $roles = Role::all();//Get all roles
        return  view('admin.role.index')->with([
            'roles' => $roles,
             'permissions'=> $permissions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();//Get all permissions
        return view('roles.create', ['permissions'=>$permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        //Validate name and permissions field
        $this->validate($request, [
                'name'=>'required|unique:roles|max:10',

            ]
        );

        $name = $request['name'];
        $role = new Role();
        $role->name = $name;



        $role->save();
        //Looping thru selected permissions
//        foreach ($permissions as $permission) {
//            $p = Permission::where('id', '=', $permission)->firstOrFail();
//            //Fetch the newly created role and assign permission
//            $role = Role::where('name', '=', $name)->first();
//            $role->givePermissionTo($p);
//        }

        return redirect()->route('role.index')
            ->with('flash_message',
                'Role'. $role->name.' added!');
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
