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
            <div class="col-sm-3 mb-3 no-gutters">
                <div class="card rounded" >
                    <img class="rounded" style="height:200px;"
                        src="{{ $product->image ? asset('/storage/' . $product->image) : 'http://placehold.it/150x150' }}"
                        alt="">
                    {{-- <div class="card-img-overlay" style=""> --}}
                    {{-- </div> --}}
                    <div class="card-body">
                    <h5 class="text-black" style="margin-top: -10px">
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
                </div>

            

            </div>
        @endforeach

    </div>
    {{ $products->links() }}
</div>
