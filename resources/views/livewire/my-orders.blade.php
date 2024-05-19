    <x-panel class="mx-auto max-w-lg mt-12" title="My orders">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-left">Order</th>
                    <th class="text-left">Ordered at</th>
                    <th class="text-right">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->orders as $order)
                    <tr>
                        <td> <a href="{{ route('view-order', $order->id) }}" class="underline font-medium">
                                #{{ $order->id }}
                            </a>
                        </td>
                        <td> {{ $order->created_at->diffForHumans() }}</td>
                        <td class="text-right"> {{ $order->amount_total }}</td>
                @endforeach
            </tbody>
        </table>
    </x-panel>
