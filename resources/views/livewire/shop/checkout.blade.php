
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Checkout</div>

                <div class="card-body">
                    @if ($formCheckout)
                        <form wire:submit.prevent="checkout">
                            <div class="form-group">
                                <div class="form-row mb-2">
                                    <div class="col">
                                        <input wire:model="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name">
                                        @error('first_name')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <input wire:model="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name">
                                        @error('last_name')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row mb-2">
                                    <div class="col">
                                        <input wire:model="email" type="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <input wire:model="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone">
                                            @error('phone')
                                                <span class="invalid-feedback">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>

                                <div class="form-row mb-2">
                                    <div class="col">
                                        <label for="">Address</label>
                                        <textarea wire:model="address" id="" cols="30" rows="5" class="form-control @error('address') is-invalid @enderror"></textarea>
                                        @error('address')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row mb-2">
                                    <div class="col">
                                        <input wire:model="city" type="text" class="form-control @error('city') is-invalid @enderror" placeholder="City">
                                        @error('city')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col">
                                        <input wire:model="postal_code" type="text" class="form-control @error('postal_code') is-invalid @enderror" placeholder="Postal Code">
                                        @error('postal_code')
                                            <span class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Provinsi</label>
                                            <select wire:model="ongkir" name="origin_province" id="" class="form-control">
                                                <option value="#">-</option>
                                                @foreach ($province as $prov)
                                                <option value="{{ $prov['ongkir'] }}">{{ $prov['title'] }}</option>
                                            @endforeach
                                            </select>
                                        </div>                                          
                                    </div>
    
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            </div>
                            
                        </form>
                    @else



                    <div class="card">
                        <div class="card-body">
                            <h3>Daftar Pesanan</h3>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart['products'] as $product)

                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $product['title'] }}</td>
                                        <td>Rp{{ number_format($product['price'],2,",",".") }}</td>                                      
                                    </tr>
        
                                    @endforeach
                                    <tr>
                                        <td class="font-weight-bold text-info"  colspan="2">Ongkir</td>
                                        <td class="text-left display-5 text-info">
                                            Rp {{ number_format($ongkir,2,",",".") }}
                                            </td>                                      
                                    </tr>
                                    <tr class="bg-success">
                                        <td class="font-weight-bold"  colspan="2">TOTAL</td>
                                        <td class="text-left display-5 font-weight-bold">
                                            Rp {{ number_format($total,2,",",".") }}
                                            </td>                                      
                                    </tr>
                                </tbody>                              
                            </table>
                        </div>
                    </div>

                    <hr>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h3>Detail Pengiriman</h3>
                            <hr>
                        <table class="table-borderless table-sm mb-3">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td class="text-left">{{ $first_name }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td class="text-left">{{ $address }}</td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td>:</td>
                                    <td class="text-left">{{ $city }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td class="text-left">{{ $email }}</td>
                                </tr>
                                <tr>
                                    <td>Kode Post</td>
                                    <td>:</td>
                                    <td class="text-left">{{ $postal_code }}</td>
                                </tr>
                                <tr>
                                    <td>Ongkir</td>
                                    <td>:</td>
                                    <td class="text-left">{{ $ongkir }}</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>:</td>
                                    <td class="text-left display-5 font-weight-bold">
                                        Rp {{ number_format($total,2,",",".") }}
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>



                    </div>

                    


                    

                        <button wire:click="$emit('payment', '{{ $snapToken }}')" class="btn btn-success float-right">Pembayaran</button>
                        <script>
                            window.livewire.on('payment', function (snapToken) {
                                snap.pay(snapToken, {
                                    // Optional
                                    onSuccess: function (result) {
                                        window.livewire.emit('emptyCart');
                                        window.location.href = "/shop";
                                    },
                                    // Optional
                                    onPending: function (result) {
                                        location.reload();
                                    },
                                    // Optional
                                    onError: function (result) {
                                        location.reload();
                                    }
                                });

                            });
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

