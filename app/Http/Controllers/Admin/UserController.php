<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct()
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
        $users = User::paginate();

        if(session('success')){
            Alert::alert('Success', 'Message', 'Type');
        }
        // return view('admin.users.index');
        return view('admin.users.index', compact('users'));
        // ->with('users', $users);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // if(Gate::denies('edit-users')){
        //     return redirect()->route('admin.users.index');
        // }
        if(Gate::denies('manage-users')){
            return redirect()->route('admin.users.index');
        }
        $roles = Role::all();
        return view('admin.users.edit')->with([
            'user'  => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       $user->roles()->sync($request->roles);
       $user->verified = $request->verified;
       $user->package = $request->package;
       if($user->save()){
        $request->session()->flash('success', 'Successful Updated');
       }else{
        $request->session()->flash('error', 'Invalied');
       }

       return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Gate::denies('edit-delete')){
            return redirect()->route('admin.users.index');
        }
        $user->roles()->detach();
        $user->Delete();

        return redirect()->route('admin.users.index');
    }

}
