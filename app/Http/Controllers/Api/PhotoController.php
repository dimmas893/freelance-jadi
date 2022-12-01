<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Spa\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $config = Photo::with('places', 'city')->get();
        return response()->json([
            'data' => $config,
            'status' => 'data berhasil di tampilkan'
        ]);
    }
}
