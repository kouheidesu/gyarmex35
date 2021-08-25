<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Twitter;

class TwitterController extends Controller
{
    public function showTwitterPage()
    {
        $tweets = Twitter::latest()->get();

        return view('twitter', [
            'twitter' => $tweets,
        ]);
    }

    public function postTwitter(Request $request)
    {
        $request->validate([
            'twitter' => 'required|max:140',
        ]);

        Twitter::create([
            'user_id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'tweet' => $request->tweet,
        ]);

        return back();
    }
}
