@extends('layouts.app')

@section('content')
<style type="text/css">
    body {
        background: #FFFFFF;
    }

    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap');
</style>

<h2 class="container font-weight-bold">My Profile</h2>
<div class="container">
@if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
</div>
<div class="container" style="margin-top: 30px">
    <div class="card shadow">
        <div class="card-body">
            <div class="row align-items-top mb-3">
                <div class="col-3">
                    <img src="/img/{{ Auth::user()->image }}" class="img-thumbnail">
                </div>

                <div class="col-9">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="{{route('profile')}}">My Profile</a>
                        </li>
                        <li class=" nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="{{route('rek')}}">Pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="{{route('keamanan')}}">Keamanan</a>
                        </li>
                    </ul>
                    <h4 class="fas fa-user mb-4">
                        <p class="d-inline " style="font-family: 'Quicksand', sans-serif;">{{ Auth::user()->name }}</p>
                    </h4>

                    <hr>
                    <h5>
                        <p class="font-weight-bold ml-2">Biodata Diri</p>
                    </h5>
                    <hr>

                    <table class="table-borderless table-sm mb-3">
                        <tbody>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td>:</td>
                                <td class="text-left">{{ Auth::user()->full_name }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td class="text-left">{{ Auth::user()->address }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td class="text-left">{{ Auth::user()->born_date }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td class="text-left">{{ Auth::user()->gender }}</td>
                            </tr>
                            <tr>
                                <td>Member Since</td>
                                <td>:</td>
                                <td class="text-left">{{ Auth::user()->created_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <h5>
                        <p class="font-weight-bold ml-2">Kontak</p>
                    </h5>
                    <hr>
                    <table class="table-borderless table-sm">
                        <tbody>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td class="text-left">{{ Auth::user()->email}}</td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td>:</td>
                                <td class="text-left">{{ Auth::user()->phone_number}}</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <a class="btn btn-primary mt-4 float-right" href="profile/{{Auth::user()->id}}/edit">Ubah Profile</a>
                    
            
                    
                
                    
                
                    
                    
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a7fbc8a9d9.js" crossorigin="anonymous"></script>
@endsection