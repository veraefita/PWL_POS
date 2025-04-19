<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View; // Tambahkan ini!

class UserController extends Controller
{
    public function index(): View
    {
        $user = UserModel::where('level_id',2) ->count();
        //dd($user);
        return view('user', ['data' => $user]);
    }
}
