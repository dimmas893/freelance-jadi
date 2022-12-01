<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan_types;
use Illuminate\Http\Request;

class Plan_typesController extends Controller
{
    public function index()
    {
        $places = Plan_types::all();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }
}
