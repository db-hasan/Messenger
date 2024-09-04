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
    public function indexchat() {
        $users=User::where('id', '!=', auth()->user()->id)->get();
        return view('frontend.chating', compact('users'));
    }

    public function indexmessage($id) {
        $userid = User::find($id);
        $authid = auth()->user()->id;
        $users = User::where('id', '!=', auth()->user()->id)->get();
    
        $messages = Message::where(function($query) use ($authid, $userid) {
            $query->where('sender_id', $authid)
                  ->where('receiver_id', $userid->id);
        })->orWhere(function($query) use ($authid, $userid) {
            $query->where('sender_id', $userid->id)
                  ->where('receiver_id', $authid);
        })->with('sender:id,name', 'receiver:id,name')->get();
        
        return view('frontend.message', compact('userid', 'users', 'messages'));
    }
    

    public function storemessage(Request $request):RedirectResponse
    {   
        $data = new Message();
        $data->sender_id = auth()->user()->id;
        $data->receiver_id = $request->receiver_id;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();
    }


}
