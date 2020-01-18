<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(Request $request)
    {
        if (auth()->user()->hasPaymentMethod())
        {
            return view('home', [
                'user' => auth()->user()
            ]);
        }

        return view('subscribe', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }
}
