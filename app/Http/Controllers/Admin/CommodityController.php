<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commodity;
use App\Models\Farm;
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    public function index()
    {
        $dataCommodities = Commodity::all();
        $dataFarms = Farm::all();

        return view('admin.commodity.index', compact('dataCommodities', 'dataFarms'));
    }

    public function create()
    {
        $dataFarms = Farm::all();

        return view('admin.commodity.create', compact('dataFarms'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'farm_id' => 'required',
            'name' => 'required|string|max:255',
            'area' => 'required',
            'geojson_data' => 'required',
            'color' => 'required|string|max:10',
        ]);

        $data = $request->all();
        // dd($data);
        Commodity::create($data);

        toastr()->success('Data berhasil ditambahkan');

        return redirect()->route('commodity.index');
    }

    public function edit($id)
    {
        $dataCommodity = Commodity::findOrFail($id);
        $dataFarms = Farm::all();

        return view('admin.commodity.edit', compact('dataCommodity', 'dataFarms'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'farm_id' => 'required',
            'name' => 'required|string|max:255',
            'area' => 'required',
            'geojson_data' => 'required',
            'color' => 'required|string|max:10',
        ]);

        $data = $request->all();
        // dd($data);
        Commodity::findOrFail($id)->update($data);

        toastr()->success('Data berhasil diubah');

        return redirect()->route('commodity.index');
    }

    public function destroy($id)
    {
        Commodity::findOrFail($id)->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('commodity.index');
    }
}
