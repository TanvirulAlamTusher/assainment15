<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:20',
        ]);

        // Send an email
        // Mail::raw($data['message'], function ($message) use ($data) {
        //     $message->from($data['email'], $data['name']);
        //     $message->to('predefined@example.com'); // Replace with your email
        // });

        // Redirect back to the form page with a success message
        return back()->withSuccess('success', 'Thank you for your message. We will get back to you soon!');
    }
    
}
