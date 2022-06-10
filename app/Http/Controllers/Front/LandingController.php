<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Commodity;
use App\Models\Farm;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function index()
    {
        $dataFarms = Farm::all();
        $dataCommodities = Commodity::all();

        return view('front.index');
    }

    public function viewGoogle()
    {
        $dataFarms = Farm::all();
        return view('front.index-google', compact('dataFarms'));
    }
}
