<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>    
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart['products'] as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td><img class="rounded" style="height:30px; width:25px;"
                                    src="{{ $product->image ? asset('/storage/' . $product->image) : 'http://placehold.it/150x150' }}"
                                    alt=""></td>
                                    <td>{{ $product->title }}</td>
                                    <td>Rp{{ number_format($product->price, 2, ',', '.') }}</td>
                                    <td>
                                        <button wire:click="removeFromCart({{ $product->id }})"
                                            class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>

                            @endforeach
                        </tbody>         
                    </table>
                    <div class="text-center mt-5">

                        @if ($cart['products'])
                        <a href="{{ route('shop.checkout') }}" class="btn-lg btn-primary">
                            Checkout
                        </a>
                        @else
                        <h3>Wah, keranjang belanjamu kosong!</h3>
                        <p>Yus, isi dengan barang-barang impianmu</p>
                        <a href="{{ route('shop.index') }}" class="btn-lg btn-success font-weight-bold m-3">
                            Mulai belanja
                        </a>
                        @endif
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
