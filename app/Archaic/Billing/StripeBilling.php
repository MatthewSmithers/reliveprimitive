<?php 

namespace Archaic\Billing;

use Stripe\Stripe;
use Stripe\Charge;
use Stripe_CardError;
use Config;

class StripeBilling implements BillingInterface {

	public function __construct() 
	{
		Stripe::setApiKey(Config::get('development.stripe.secret_key'));
	}

	public function charge(array $data)
	{
		try
		{
			return Charge::create([
				'amount' => 15000, //$150.00 
				'currency' => 'usd',
				'description' => $data['email'],
				'card' => $data['token']
			]);

		} 

		catch(Stripe_CardError $e)
		{
			//card was declined
			dd('card was declined');
		}
			
	}
}