<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function store(StoreSetting $request)
    {
        $setting = Setting::create($request->all());
        return [
            "status" => 1,
            "data" => $setting
        ];
    }

    public function update(StoreSetting $request, Http $setting)
    {

        $setting->update($request->all());
        return [
            "status" => 1,
            "data" => $setting,
            "msg" => "Setting updated successfully"
        ];
    }
}
