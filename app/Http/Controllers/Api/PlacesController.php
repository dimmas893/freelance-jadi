<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\places;
use App\Models\Spa\Spa;
use Illuminate\Http\Request;

class PlacesController extends Controller
{
    public function index()
    {
        $places = Spa::with('user', 'city', 'state')->get();
        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }

    public function store(Request $request)
    {

        $create = [
            'userid' => $request->userid,
            'lat' => $request->lat,
            'lng' => $request->lng,
            // 'short_desc' => $request->short_desc,
            'place_name' => $request->place_name,
            'slug' => $request->slug,
            'addres' => $request->addres,
            'postal_code' => $request->postal_code,
            'cross_street' => $request->cross_street,
            'neighborhood' => $request->neighborhood,
            'city_id' => $request->city_id,
            'state_id' => $request->state_id,
            'country_code' => $request->country_code,
            'inside' => $request->inside,
            'area_code' => $request->area_code,
            'phone' => $request->phone,
            'wa_country_code' => $request->wa_country_code,
            'wa_area_code' => $request->wa_area_code,
            'wa_phone' => $request->wa_phone,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'website' => $request->website,
            'logo' => $request->logo,
            'contact_email' => $request->contact_email,
            'description' => $request->description,
            'short_desc' => $request->short_desc,
            'business_hours' => $request->business_hours,
            'submission_date' => $request->submission_date,
            'origin' => $request->origin,
            'feat' => $request->feat,
            'feat_home' => $request->feat_home,
            'plan' => $request->plan,
            'valid_until' => $request->valid_until,
            'status' => $request->status,
            'paid' => $request->paid,
            'price' => $request->price,
            'kaskus' => $request->kaskus,
            'instagram' => $request->instagram,
            'woxo' => $request->woxo,
            'woxo_data' => $request->woxo_data,
            'pin' => $request->pin
        ];
        $places = Spa::create($create);


        return response()->json([
            'data' => $places,
            'status' => 'data berhasil di ambil'
        ]);
    }
}
