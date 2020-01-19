<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(Request $request)
    {
        if(!auth()->user()->hasPermissionTo('admin'))
        {
            if (!auth()->user()->hasPaymentMethod())
            {
                return view('subscribe', [
                    'intent' => auth()->user()->createSetupIntent()
                ]);
            }
        }

        return view('home', [
            'user' => auth()->user()
        ]);

    }

    public function users(Request $request)
    {
        return view('users');
    }
}
