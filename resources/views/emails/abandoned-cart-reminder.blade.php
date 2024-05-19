@component('mail::message')

Hey {{ $cart->user->name }},

You still have items in your cart. Click the button below to conitnue checkout

@component('mail::button', ['url'=>route('cart'), 'color'=>'success'])
Continue Checkout
@endcomponent

@endcomponent
