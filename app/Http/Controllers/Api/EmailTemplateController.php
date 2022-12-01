<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\emailtemplate;
use Illuminate\Http\Request;

class EmailTemplateController extends Controller
{
    public function index()
    {
        $contact_msgs = emailtemplate::all();

        return response()->json([
            'data' => $contact_msgs,
            'status' => 'data berhasil di ambil'
        ]);
    }
}
