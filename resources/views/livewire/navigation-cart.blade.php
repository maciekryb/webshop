<x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
    {{ __('Your cart ') }} ({{ $this->count }})
</x-nav-link>
