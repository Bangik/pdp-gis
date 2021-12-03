<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $dataUsers = User::all();
        return view('admin.user.index', compact('dataUsers'));
    }

    public function create(){
        return view('admin.user.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $data = $request->all();
        
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        
        toastr()->success('Data berhasil ditambahkan');

        return redirect()->route('user.index');
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $data = $request->all();
        User::findOrFail($id)->update($data);

        toastr()->success('Data berhasil diubah');

        return redirect()->route('user.index');
    }

    public function destroy($id){
        User::findOrFail($id)->delete();

        toastr()->success('Data berhasil dihapus');

        return redirect()->route('user.index');
    }
}
