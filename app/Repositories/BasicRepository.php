<?php


namespace App\Repositories;


use App\Admin\Setting;

class BasicRepository
{
    public function updateName($request){
        try {
            $user = $request->user();
            $user->update(['name' => $request->name]);
        }catch(\Exception $e){
            return false;
        }
        return true;
    }

    public function updateProfile($request){
        try {
            $input = $request->all();
            $setting = Setting::firstOrFail();
            if (!blank($request->favicon_icon)) {
                deleteImage($setting->favicon_icon);
                $favicon_icon = storeImage($request->favicon_icon, 'setting');
                $input['favicon_icon'] = $favicon_icon;
            }
            if (!blank($request->logo)) {
                deleteImage($setting->logo);
                $logo = storeImage($request->logo, 'setting');
                $input['logo'] = $logo;
            }
            if (!blank($request->light_logo)) {
                deleteImage($setting->light_logo);
                $light_logo = storeImage($request->light_logo, 'setting');
                $input['light_logo'] = $light_logo;
            }
            $setting->update($input);
        }catch (\Exception $e){
            dd($e);
            return false;
        }
        return true;
    }

}
