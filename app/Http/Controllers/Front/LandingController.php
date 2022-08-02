<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Section;
use App\Models\Farm;
use Illuminate\Http\Request;

class LandingController extends Controller
{

    public function index()
    {
        $dataFarms = Farm::all();
        $dataSections = Section::all();
        $dataBlocks = Block::all();

        return view('front.index', compact('dataFarms', 'dataSections', 'dataBlocks'));
    }

    public function viewGoogle()
    {
        $dataFarms = Farm::all();
        return view('front.index-google', compact('dataFarms'));
    }

    public function viewLeaflet()
    {
        $dataFarms = Farm::all();
        $dataSections = Section::all();
        $dataBlocks = Block::all();
        
        return view('front.index-leaflet', compact('dataFarms', 'dataSections', 'dataBlocks'));
    }

    public function about()
    {
        return view('front.about.about');
    }

    public function history()
    {
        return view('front.about.history');
    }

    public function profile()
    {
        return view('front.about.profile');
    }

    public function visionMission()
    {
        return view('front.about.visionMission');
    }

    public function organizationStructure()
    {
        return view('front.about.organizationStructure');
    }
}
