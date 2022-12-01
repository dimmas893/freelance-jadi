<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $contact_msgs = language::all();

        return response()->json([
            'data' => $contact_msgs,
            'status' => 'data berhasil di ambil'
        ]);
    }
}
