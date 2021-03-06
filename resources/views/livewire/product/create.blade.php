<div class="row justify-content-center mb-2 mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="store" method="POST" enctype="multipart/form-data">

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                                <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Nama barang">
                                @error('title')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col">
                                <input wire:model="price" type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Harga">
                                @error('price')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                                <textarea wire:model="description" id="" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror" placeholder="Masukkan Deskripsi"></textarea>
                                @error('description')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="center">
                                        <div class="form-input">
                                            <label for="image">Upload Gambar</label>
                                            <br>
                                            <input wire:model="image" type="file" id="image" onmouseover="showPreview(event);">
                                            
                                        </div>
                                    </div>
                                    <div class="preview">
                                        <img id="image-preview" height="200">
                                        
                                    </div>

                                    @error('image')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror


                                    
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-group" role="group" aria-label="Button Form">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <button wire:click="$emit('formClose')" type="button" class="btn btn-sm btn-secondary">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
