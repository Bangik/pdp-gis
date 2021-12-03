<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dataFarms = Farm::all();
        // dd($dataFarms);
        return view('admin.farm.index', compact('dataFarms'));
    }

    public function create()
    {
        return view('admin.farm.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:100',
            'districts' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'area' => 'required',
            'geojson_data' => 'required',
            'color' => 'required|string|max:10',
        ]);

        $data = $request->all();
        // dd($data);
        Farm::create($data);

        toastr()->success('Data berhasil ditambahkan');

        return redirect()->route('farm.index');
    }

    public function edit($id)
    {
        $dataFarm = Farm::findOrFail($id);
        return view('admin.farm.edit', compact('dataFarm'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:100',
            'districts' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'area' => 'required|integer',
            'geojson_data' => 'required',
            'color' => 'required|string|max:10',
        ]);

        $data = $request->all();
        Farm::findOrFail($id)->update($data);

        toastr()->success('Data berhasil diubah');

        return redirect()->route('farm.index');
    }

    public function destroy($id)
    {
        Farm::findOrFail($id)->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('farm.index');
    }
}
