<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\coupons;
use App\Models\Pages\Franchise;
use App\Models\Region\State;
use App\Models\Reviews;
use App\Models\signup_confirm;
use App\Models\statistics;
use App\Models\tips;
use App\Models\tmp_photos;
use App\Models\transactions;
use App\Models\translation_cf;
use App\Models\videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    public function index()
    {
        $places = Reviews::with('place', 'user')->get();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function signup_confirm(Request $request)
    {
        $places = signup_confirm::all();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function state()
    {
        $places = State::with('country')->get();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }
    public function statistics()
    {
        $places = statistics::with('place')->get();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function tmp_photos()
    {
        $places = tmp_photos::all();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function transactions()
    {
        $places = transactions::all();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function translation_cf()
    {
        $places = translation_cf::all();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function videos()
    {
        $places = videos::all();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function tips()
    {
        $places = tips::all();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function coupons()
    {
        $places = coupons::all();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function coupons_store(Request $request)
    {
        $create = [
            'title' => $request->title,
            'description' => $request->description,
            'userid' => $request->userid,
            'place_id' => $request->place_id,
            'expire' => $request->expire,
            'created' => $request->created,
            'img' => $request->img,
            'coupon_status' => $request->coupon_status,
            'approval' => $request->approval,
            'pin' => $request->pin
        ];
        $places = coupons::create($create);


        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function tips_store(Request $request)
    {

        $create = [
            'page_title' => $request->page_title,
            'page_slug' => $request->page_slug,
            'meta_desc' => $request->meta_desc,
            'short_desc' => $request->short_desc,
            'page_contents' => $request->page_contents,
            'enable_comments' => $request->enable_comments,
            'page_date' => $request->page_date,
            'category' => $request->category,
            'show_in_blog' => $request->show_in_blog,
            'thumb' => $request->thumb,
            'autor' => $request->autor
        ];
        $places = tips::create($create);


        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function franchise(Request $request)
    {

        $create = [
            'page_title' => $request->page_title,
            'page_slug' => $request->page_slug,
            'meta_desc' => $request->meta_desc,
            // 'short_desc' => $request->short_desc,
            'page_contents' => $request->page_contents,
            'page_group' => $request->page_group,
            'enable_comments' => $request->enable_comments,
            'page_order' => $request->page_order,
            'page_date' => $request->page_date,
            'page_status' => $request->page_status
        ];
        $places = Franchise::create($create);


        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }
}
