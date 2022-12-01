<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\rel_place_cat;
use Illuminate\Http\Request;

class rel_place_catController extends Controller
{
    public function index()
    {
        $places = rel_place_cat::with('place', 'cat', 'city')->get();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }
}
