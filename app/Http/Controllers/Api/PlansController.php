<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index()
    {
        $places = Plans::all();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }
}
