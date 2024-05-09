<div class="grid grid-cols-4 gap-4 mt-12">
  @foreach ($this->products as $product)
    <div>
      {{ $product->name }}
    </div>
  @endforeach
</div>
