<div class="row justify-content-center mb-2">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form wire:submit.prevent="update" method="POST" enctype="multipart/form-data">

                    <div class="form-group">

                        <div class="form-row">
                            <div class="col">
                                <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title">
                                @error('title')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col">
                                <input wire:model="price" type="text" class="form-control @error('price') is-invalid @enderror" placeholder="Price">
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
                                <input wire:model="description" type="text" class="form-control @error('description') is-invalid @enderror" placeholder="Description">
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
                                            <label for="image">Upload Image</label>
                                            <input wire:model="image" type="file" id="image" onmouseover="showPreview(event);">
                                            
                                        </div>
                                    </div>
                                    <div class="preview">
                                        <img id="image-preview img-thumbnail" height="200">
                                        {{-- <img src="{{ $product->image }}" alt="">                                        --}}
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
