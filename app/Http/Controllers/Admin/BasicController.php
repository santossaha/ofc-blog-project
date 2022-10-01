<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Setting;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PasswordUpdaterequest;
use App\Http\Requests\Admin\ProfileRequest;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Blog;
use App\Models\Portfolio;
use App\Models\Service;
use App\Repositories\BasicRepository;
use App\User;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Support\Facades\Hash;

class BasicController extends Controller
{

    protected BasicRepository $basicRepo;
    public function __construct(BasicRepository $basicRepository){
        $this->basicRepo = $basicRepository;
    }
    public function index(){
        return route('admin.login');
    }

    public function updateProfile(ProfileRequest $request)
    {
       $data = $this->basicRepo->updateName($request);
       if($data) {
           return back()->with('message', 'Profile Updated Successfully');
       }else{
           errorBack();
       }

    }

    public function updatePassword(PasswordUpdaterequest $request, $id)
    {
        $user = User::findOrFail($id);
        if (Hash::check($request->current_password, $user->password)) {
            if (Hash::check($request->password, $user->password)) {
                return back()->with('error', 'Current Password and new password has same, please change a new password');
            } else {
                $user->password = Hash::make($request->password);
                $user->save();
                return back()->with('success', 'Password Updated Successfully');
            }
        }
        return back()->with('error', 'Current Password does not match');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function editSetting()
    {
        $data['setting'] = Setting::firstOrFail();
        return view('admin.setting', $data);
    }

    function updateSetting(SettingRequest $request, Setting $setting)
    {
        $data = $this->basicRepo->updateProfile($request);
        if($data){
            return redirect()->route('admin.setting')->with('message', 'Site Setting Updated Successfully');
        }else{
            errorBack();
        }

    }
}
