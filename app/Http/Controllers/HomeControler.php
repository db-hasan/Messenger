<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Message;
use Exception;
use Session;

class HomeControler extends Controller
{
    // public $receiver_id;
    
    public function home() {
        $users=User::where('id', '!=', auth()->user()->id)->get();
        return view('frontend/home', compact('users'));
    }

    public function indexmessage($id) {
        $userId = User::find($id);
        // $this->receiver_id = $id;

        $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('frontend/home', compact('userId', 'users'));
    }

    public function storemessage(Request $request):RedirectResponse
    {   
    $receiver_id = session('receiver_id');

        $data = new Message();
        $data->sender_id = auth()->user()->id;
        $data->receiver_id = $receiver_id;
        $data->message = $request->message;
        dd($data);
        // $data->save();
        return redirect()->back();
    }


}
