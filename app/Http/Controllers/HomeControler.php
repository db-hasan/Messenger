<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;
use Session;

class HomeControler extends Controller
{
    public function home() {
        $users=User::where('id', '!=', auth()->user()->id)->get();
        return view('frontend/home', compact('users'));
    }

    public function message($id) {
    $userId = User::find($id);     
    $users = User::where('id', '!=', auth()->user()->id)->get();
    return view('frontend/home', compact('userId', 'users'));
}

}
