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
    
    public function indexchat() {
        $users=User::where('id', '!=', auth()->user()->id)->get();
        return view('frontend.chating', compact('users'));
    }

    public function indexmessage($id) {
        $userid = User::find($id);
        $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('frontend.message', compact('userid', 'users'));
    }

    // $this->receiver_id = $id;

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
