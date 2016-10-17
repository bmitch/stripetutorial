<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Stripe\Charge;
use Stripe\Customer;

class PurchasesController extends Controller
{
    public function store()
    {

    	$customer = Customer::create([
			'email'  => request('stripeEmail'),
			'source' => request('stripeToken'),
    	]);

    	Charge::create([
			'customer' => $customer->id,
			'amount'   => 5000,
			'currency' => 'cad',
    	]);

    	return 'All done';
    }
}
