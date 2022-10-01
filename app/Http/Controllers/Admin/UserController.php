<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $requestData = $request->all();
        $errors = Validator::make($requestData, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id . ',id',
        ]);
        if ($errors->fails()) {
            return redirect()->back()->withErrors($errors->errors())->withInput($request->all());
        } else {
            $user = User::find(Auth::user()->id);

            if ($user) {

                $user->name = isset($requestData['name']) ? $requestData['name'] : '';
                $user->email = isset($requestData['email']) ? $requestData['email'] : '';
                $user->save();
                Session::flash('success', 'Profile updated successfully.');
                return redirect()->route('admin.profile.index');
            } else {
                Session::flash('error', 'User not found!');
                return redirect()->route('admin.profile.index');
            }
        }
    }

    public function changePassword() {
        return view('admin.profile.changepassword');
    }

    public function changePasswordSave(Request $request) {
        $requestData = $request->all();
        $errors = Validator::make($requestData, [
            'password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);
        if ($errors->fails()) {
            return redirect()->back()->withErrors($errors->errors())->withInput($request->all());
        } else {
            if (!Hash::check($requestData['password'], Auth::user()->password)) {
                Session::flash('error', 'Your current password does not matches with the password you provided. Please try again.');
            }elseif(Hash::check($requestData['new_password'], Auth::user()->password)){
                Session::flash('error', 'Current password and new password must be different.');
            }
            else {
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($requestData['new_password']);
                $user->save();
                Session::flash('success', 'Password changed successfully.');
            }
            return redirect()->route('admin.profile.changepassword');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
