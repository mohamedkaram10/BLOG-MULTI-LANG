<?php

namespace App\Http\Controllers\Api;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index(Request $request) {
        $settings = Setting::checkSettings();
        return response()->json(['data' => $settings, 'error' => ''], 200);
    }
}
