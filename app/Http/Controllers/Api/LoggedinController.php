<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\loggedin;
use Illuminate\Http\Request;

class LoggedinController extends Controller
{
    public function index()
    {
        $contact_msgs = loggedin::all();

        return response()->json([
            'data' => $contact_msgs,
            'status' => 'data berhasil di ambil'
        ]);
    }
}
