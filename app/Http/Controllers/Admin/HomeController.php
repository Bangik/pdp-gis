<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commodity;
use App\Models\Farm;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $dataFarms = Farm::all();
        $dataCommodities = Commodity::all();
        // dd($dataMap);
        return view('admin.dashboard', compact('dataFarms', 'dataCommodities'));
    }
}
