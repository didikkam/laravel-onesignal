<?php

namespace App\Http\Controllers;

use Berkayk\OneSignal\OneSignalFacade as OneSignal;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return view('message');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        OneSignal::sendNotificationToAll(
            $request->message,
            $url = null,
            $data = null,
            $buttons = null,
            $schedule = null
        );
        
        return redirect()->route('message.index');
    }
}
