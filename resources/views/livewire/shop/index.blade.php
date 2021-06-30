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
            <div class="card rounded">
                <img class="rounded-top" style="height:225px;"
                    src="{{ $product->image ? asset('/storage/' . $product->image) : 'http://placehold.it/150x150' }}"
                    alt="">
                {{-- <div class="card-img-overlay" style=""> --}}
                {{-- </div> --}}
                <div class="card-body">
                    <h5 class="text-black" style="margin-top: -10px">
                        <strong>{{ $product->title }}</strong>
                    </h5>
                    <h6 class="text-black ">Rp{{ number_format($product->price, 2, ',', '.') }}</h6>

                    <button wire:click="addToCart({{ $product->id }})" type="button"
                        class="btn btn-sm btn-block btn-primary text-white mb-2 ">+ Keranjang</button>
                    <button type="button" class="btn btn-sm btn-block btn-secondary text-white mb-2"
                        data-bs-toggle="modal" data-bs-target="#modal{{ $product->id }}">Detail Barang</button>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">{{ $product->title }}</h5>
                    </div>


                    <div class="modal-body">
                        <div class="row">
                            <div class="col-5">
                                <img class="rounded" style="height:300px; width:275px;"
                                    src="{{ $product->image ? asset('/storage/' . $product->image) : 'http://placehold.it/150x150' }}"
                                    alt="">
                            </div>
                            <div class="col-7">
                                <h5>Deskripsi Barang:</h5>
                                <p class="text-black">
                                    {{ $product->description }}
                                </p>
                                <h4 class="text-black mr-5">Rp{{ number_format($product->price, 2, ',', '.') }}</h4>
                            </div>
                        </div>
                    </div>


                    <div class="modal-footer float-left">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a wire:click="addToCart({{ $product->id }})" class="btn btn-primary" href="{{Route('shop.index')}}" target="_parent">+ Keranjang</a>

                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>
    {{ $products->links() }}
</div>
