<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group">
                <input wire:model="search" type="text" class="form-control" placeholder="Search Product">
            </div>
        </div>
    </div>

    <div class="row">

        @foreach ($products as $product)
            <div class="col-sm-12 col-xs-12 col-md-4 col-lg-3 mb-4 ml-4 border">
                <div class="card h-80 mt-2">
                    <img class="card-img-top img-fluid "
                        src="{{ $product->image ? asset('/storage/' . $product->image) : 'http://placehold.it/150x150' }}"
                        alt="">
                    <div class="card-img-overlay" style="background-color: rgba(0,0,0,0.5);">
                    </div>
                </div>
                <h5 class="text-black mt-2">
                    <strong>{{ $product->title }}</strong>
                </h5>
                <h6 class="text-black ">Rp{{ number_format($product->price, 2, ',', '.') }}</h6>
                <p class="text-black">
                    {{ $product->description }}
                </p>

                <button wire:click="addToCart({{ $product->id }})" type="button"
                    class="btn btn-sm btn-block btn-primary text-white mb-2 ">+ Keranjang</button>
                <button wire:click="detail({{ $product->id }})" type="button"
                    class="btn btn-sm btn-block btn-secondary text-white mb-2 ">Detail Barang</button>

            </div>
        @endforeach

    </div>
    {{ $products->links() }}
</div>
