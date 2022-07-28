<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Farm;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $dataSections = Section::all();
        $dataFarms = Farm::all();

        return view('admin.section.index', compact('dataSections', 'dataFarms'));
    }

    public function create()
    {
        $dataFarms = Farm::all();

        return view('admin.section.create', compact('dataFarms'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'farm_id' => 'required',
            'name' => 'required|string|max:255',
            'area' => 'required',
            'color' => 'required|string|max:10',
        ]);

        $data = $request->all();
        // dd($data);
        Section::create($data);

        toastr()->success('Data berhasil ditambahkan');

        return redirect()->route('section.index');
    }

    public function edit($id)
    {
        $dataSection = Section::findOrFail($id);
        $dataFarms = Farm::all();

        return view('admin.section.edit', compact('dataSection', 'dataFarms'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'farm_id' => 'required',
            'name' => 'required|string|max:255',
            'area' => 'required',
            'color' => 'required|string|max:10',
        ]);

        $data = $request->all();
        // dd($data);
        Section::findOrFail($id)->update($data);

        toastr()->success('Data berhasil diubah');

        return redirect()->route('section.index');
    }

    public function destroy($id)
    {
        Section::findOrFail($id)->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('section.index');
    }

    public function getSection(Request $request)
    {
        $data = Section::where('farm_id', $request->query('id'))->get(['id', 'name']);
        return response()->json($data);
    }
}
