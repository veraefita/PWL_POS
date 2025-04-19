<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
{
    $user = UserModel::with('level')->get();
    return view('user', ['data' => $user]);
}

    public function tambah(): View
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request) : RedirectResponse
{
    UserModel::create([
        'username' => $request->username,
        'nama' => $request->nama,
        'password' => Hash::make($request->password),
        'level_id' => $request->level_id
    ]);

    return redirect('/user');
}
public function ubah($id): View
{
    $user = UserModel::find($id);
    return view('user_ubah', ['data' => $user]);
}


public function ubah_simpan($id, Request $request) : RedirectResponse
{
    $user = UserModel::find($id);
    $user->username = $request->username;
    $user->nama = $request->nama;
    $user->password = Hash::make($request->password);
    $user->level_id = $request->level_id;
    $user->save();

    return redirect('/user');
}
public function hapus($id)
{
    $user = UserModel::find($id);
    $user->delete();

    return redirect('/user');
}

}