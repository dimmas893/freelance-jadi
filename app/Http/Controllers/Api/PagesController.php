<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pages\Franchise;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $franchise = Franchise::all();
        return response()->json([
            'data' =>$franchise
        ]);
    }
}
