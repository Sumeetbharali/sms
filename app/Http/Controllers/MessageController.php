<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sender' => 'required|string',
            'content' => 'required|string',
        ]);

        $message = Message::create($validated);

        return response()->json($message, 201);
    }
}
