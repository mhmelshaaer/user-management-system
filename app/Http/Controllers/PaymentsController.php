<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\SubscribeRequest;

class PaymentsController extends Controller
{
    public function subscribe(SubscribeRequest $request)
    {

        auth()->user()
                ->newSubscription('main', $request->subscription_plan)
                ->create($request->payment_method);

        return $request;
    }
}
