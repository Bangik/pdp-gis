<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Section;
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
        $dataSections = Section::all();
        $dataBlocks = Block::all();
        
        return view('admin.dashboard', compact('dataFarms', 'dataSections', 'dataBlocks'));
    }
}
