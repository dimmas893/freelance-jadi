<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\contact_msgs;
use Illuminate\Http\Request;

class Contact_msgsController extends Controller
{
    public function index()
    {
        $contact_msgs = contact_msgs::with('places')->get();

        return response()->json([
            'data' => $contact_msgs,
            'status' => 'data berhasil di ambil'
        ]);
    }
}
