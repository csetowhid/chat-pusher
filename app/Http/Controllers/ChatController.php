<?php

namespace App\Http\Controllers;

use App\Events\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat(Request $request)
    {
        $data['username'] = $request->username;
        return view('chat',$data);
    }
    // public function send_message(Request $request)
    // {
    //     event(new Message($request->input('username'), $request->input('message')));
    //     return ["success" => true];
    // }
}
