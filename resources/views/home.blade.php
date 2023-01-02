@extends('layouts.app')

@section('content')

<div class="container">
<div class="input-group mb-3">
  <input type="text" class="form-control" label="search">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">Search</button>
  </div>
</div>
</div>

<div class="container">
            <div class="card">
                <div class="card-header">{{ __('Beauty') }} <a class="btn btn-link" href="{{ route('register') }}">{{ __('View All') }}</a></div>
                <div class="card-deck">
                  <div class="card">
                    <img class="card-img-top" src="https://lzd-img-global.slatic.net/g/p/b32c1a949d736d2574ddcb915e386038.jpg_720x720q80.jpg_.webp" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Azarine oil free Brigntening</p>
                      <h8 class="card-title font-weight-bold">IDR 35554</h8>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="https://lzd-img-global.slatic.net/g/p/abccb0301b9fc49a4f9b44905707c778.jpg_720x720q80.jpg_.webp" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Rose All day lip balm Cosmetics</p>
                      <h8 class="card-title font-weight-bold">IDR 42185</h8>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="https://lzd-img-global.slatic.net/g/p/00e511998c5541f81f1db5135ec53fb0.jpg_720x720q80.jpg_.webp" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Azarine Hydrasoothe Sunscreen Gel</p>
                      <h8 class="card-title font-weight-bold">IDR 25158</h8>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="https://www.beautyhaul.com/assets/uploads/products/thumbs/800x800/AZARINE_Hydrasoothe_Sunscreen_Mist_%28New_Formula%29_Lee_Min_Ho.jpeg" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Azarine Hydrasoothe Sunscreen Mist</p>
                      <h8 class="card-title font-weight-bold">IDR 19289</h8>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="https://id-test-11.slatic.net/p/c4b29a52bb2014a765b7e5701596bd5a.jpg" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">O.TWO.O Liquid Blush Swatches</p>
                      <h8 class="card-title font-weight-bold">IDR 42185</h8>
                    </div>
                  </div>
                </div>
            </div>
</div>

<br>

<div class="container">
            <div class="card">
                <div class="card-header">{{ __('Camera') }} <a class="btn btn-link" href="{{ route('register') }}">{{ __('View All') }}</a></div>
                <div class="card-deck">
                  <div class="card">
                    <img class="card-img-top" src="https://lzd-img-global.slatic.net/g/p/5de704d1503dc3a4c446bc0d5e048470.jpg_720x720q80.jpg_.webp" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Canon EOS 6D Mark 2 DSLR Cameras</p>
                      <h8 class="card-title font-weight-bold">IDR 24999000</h8>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="https://lzd-img-global.slatic.net/g/p/7c60405eb84d9f913026a9a15b056781.png_720x720q80.jpg_.webp" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">DRONE KAMERA TXD 8S 1080P</p>
                      <h8 class="card-title font-weight-bold">IDR 322979</h8>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="https://lzd-img-global.slatic.net/g/p/9ee11087dc971abe0e275f5e9e394b0f.png_720x720q80.jpg_.webp" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Mini Tripod Vlog Meeting</p>
                      <h8 class="card-title font-weight-bold">IDR 35000</h8>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="https://lzd-img-global.slatic.net/g/p/adba28e6f1f0aceedc9bf41da691c76f.jpg_720x720q80.jpg_.webp" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">Tomsis Bluetooth Remote</p>
                      <h8 class="card-title font-weight-bold">IDR 7768</h8>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="https://cf.shopee.co.id/file/c904747bb76bd8b771770b166d682f26" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">KNF Concept 4-in-1 Cleaning Kit</p>
                      <h8 class="card-title font-weight-bold">IDR 140000</h8>
                    </div>
                  </div>
                </div>
            </div>
</div>
@endsection
