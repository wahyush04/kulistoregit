@extends('layouts.app')

@section('content')
<style type="text/css">
    body {
        background: #FFFFFF;
    }

    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap');
</style>

<div class="container" style="margin-top: 30px">
    <div class="card shadow">
        <div class="card-body">
                    <h5>
                        <p class="font-weight-bold ml-2">Edit Data diri</p>
                    </h5>
                    <hr>
            <div class="row align-items-top mb-3">
                <div class="col-3">
                    <img src="/img/{{ Auth::user()->image }}" class="img-thumbnail">

                    <form method="POST" action="/profile/{{$user->id}}">
                        @method('patch')
                        @csrf
                    <input type="file" name="image">
                    </form>

                </div>
                <div class="col-9">
                <form method="POST" action="/profile/{{$user->id}}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" name="nama_lengkap" value="{{Auth::user()->full_name}}">
                    @error('nama_lengkap') <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{Auth::user()->address}}">
                    @error('alamat') <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="text" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" value="{{Auth::user()->born_date}}">
                    @error('tgl_lahir') <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div> @enderror
                </div>

                <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin</label> <br>
	            <select name='jenis_kelamin'>
		        <option value='Pria'>Pria</option>
		        <option value='Wanita'>Wanita</option>
                </select>
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{Auth::user()->email}}">
                    @error('email') <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="nomor_hp">Nomor Hp</label>
                    <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" id="nomor_hp" placeholder="Masukkan Nomor Hp" name="nomor_hp" value="{{Auth::user()->phone_number}}">
                    @error('nomor_hp') <div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div> @enderror
                </div>


                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </div>

            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a7fbc8a9d9.js" crossorigin="anonymous"></script>

@endsection
