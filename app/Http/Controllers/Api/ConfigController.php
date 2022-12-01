<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        $config = Config::all();
        return response()->json([
            'data' => $config,
            'status' => 'data berhasil di tampilkan'
        ]);
    }
}
