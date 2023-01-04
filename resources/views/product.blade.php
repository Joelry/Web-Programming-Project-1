<div class="card">
    <img class="card-img-top" src="{{ $product->image }}" alt="{{ $product->name }}">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <b>Rp {{ number_format($product->price) }}</b>
    </div>
</div>