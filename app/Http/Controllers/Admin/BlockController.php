<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\Farm;
use App\Models\Section;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index()
    {
        $dataBlocks = Block::all();
        $dataSections = Section::all();
        $dataFarms = Farm::all();

        // dd($dataSections);
        return view('admin.block.index', compact('dataBlocks', 'dataSections', 'dataFarms'));
    }

    public function create()
    {
        $dataSections = Section::all();
        $dataFarms = Farm::all();

        return view('admin.block.create', compact('dataSections', 'dataFarms'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'section_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'area' => 'required|numeric',
            'elevation' => 'required|numeric',
        ]);

        $data = $request->all();
        Block::create($data);

        toastr()->success('Data berhasil ditambahkan');

        return redirect()->route('block.index');
    }

    public function edit($id)
    {
        $dataBlock = Block::findOrFail($id);
        $dataSections = Section::all();
        $dataFarms = Farm::all();

        return view('admin.block.edit', compact('dataBlock', 'dataSections', 'dataFarms'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'section_id' => 'required',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'area' => 'required|numeric',
            'elevation' => 'required|numeric',
        ]);

        $data = $request->all();
        Block::findOrFail($id)->update($data);

        toastr()->success('Data berhasil diubah');

        return redirect()->route('block.index');
    }

    public function destroy($id)
    {
        Block::findOrFail($id)->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('block.index');
    }
}
