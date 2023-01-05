<div class="card mb-2 d-flex flex-row">
    <img class="card-img-left" src="{{ url('storage/' . $product->image) }}" alt="{{$product->name}}"
         style="width: 150px; height: 150px">
    <div class="card-body">
        <div class="d-flex flex-row">
            <div class="flex-grow-1">
                <a href="/product/{{ $product->id }}">
                    <h5 class="card-title">{{ $product->name }}</h5>
                </a>
                <b>{{ __('Rp :subtotal (:quantity * :each)', [
                                    'subtotal' => number_format($entry->quantity * $product->price),
                                    'quantity' => number_format($entry->quantity),
                                    'each' => number_format($product->price)
                                ]) }}</b>
                @if($product->stock < 10)
                    <p class="text-danger">{{ number_format($product->stock) }} left in stock</p>
                @endif
            </div>
            <div>
                <a class="btn btn-outline-danger" href="/cart/delete/{{$product->id}}">
                    <span class="fa fa-trash"></span>
                </a>
            </div>
        </div>
    </div>
</div>