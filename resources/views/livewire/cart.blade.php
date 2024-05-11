<div class="bg-white rounded-lg shadow p5 mt-12">
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->items as $item)
                <tr>
                    <td> {{ $item->product->name }} - {{ $item->variant->size }} - {{ $item->variant->color }} </td>
                    <td> {{ $item->quantity }} </td>
            @endforeach
        </tbody>
    </table>
</div>
