<?php

namespace App\Http\Controllers\Api;

use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Regency;

class LocationController extends Controller
{
    public function provinces()
    {
        $provinces = Province::all();

        return response()->json($provinces);
    }

    public function regencies($provinces_id)
    {
        $regencies = Regency::where('province_id', $provinces_id)->get();

        return response()->json($regencies);
    }
}
