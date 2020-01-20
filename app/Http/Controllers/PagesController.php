<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

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

        $data = [
            'user' => auth()->user()
        ];

        if (auth()->user()->hasPermissionTo('admin'))
        {

            $data['users'] = [
                'units' => User::whereDay('created_at', now()->day)->count(),
                'date' => now()
            ];

        }

        return view('home', $data);

    }

    public function users(Request $request)
    {
        return view('users');
    }

}
