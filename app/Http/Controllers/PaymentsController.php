<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create(){
        return view('payments.create');
    }

    public function store(){

        /*Notification::send(request()->user(), new PaymentReceived());*/

        # it's the same

        request()->user()->notify(new PaymentReceived(900));

        ProductPurchased::dispatch('toy');
    }
}
