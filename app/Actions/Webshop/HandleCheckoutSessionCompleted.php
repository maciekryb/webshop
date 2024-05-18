<?php

namespace App\Actions\Webshop;

use App\Models\User;
use Laravel\Cashier\Cashier;

class HandleCheckoutSessionCompleted
{
    public function handle($sessionId)
    {
        $session = Cashier::stripe()->checkout->sessions->retrieve($sessionId);
        $user = User::find($session->metadata->user_id);
    }
}
