<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View; // Tambahkan ini!

class UserController extends Controller
{
    public function index(): View
    {
        $user = UserModel::findOr(20, ['username', 'nama'], function () {
            abort(404);
        });
        
        return view('user', ['data' => $user]);
    }
}
