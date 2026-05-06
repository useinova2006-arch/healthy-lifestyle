<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048'
        ]);

        $path = $request->file('file')->store('uploads', 'public');

        DB::table('files')->insert([
            'path' => $path,
            'created_at' => now(),
        ]);

        return back()->with('success', 'File uploaded successfully!');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Mail::to($request->email)->send(new TestMail($request->message));

        return back()->with('success', 'Email sent successfully!');
    }
}