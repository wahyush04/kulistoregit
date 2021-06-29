@extends('layouts.app')

@section('content')
<style type="text/css">
    body {
        background: #FFFFFF;
    }

    
</style>

<h2 class="container font-weight-bold">Pembayaran</h2>

<div class="container" style="margin-top: 30px">
    <div class="card shadow mb-5">
        <div class="card-body">

            <div class="row align-items-top mb-3">
                <div class="col-3">
                </div>
                <div class="col-9">
                    <ul class="nav nav-tabs mb-3">
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="/profile">My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="/rekening">Pembayaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark font-weight-bold" href="/keamanan">Keamanan</a>
                        </li>
                    </ul>
                <div class="inline">
                    <h3>Hai <strong>{{Auth::user()->name}}</strong>, Atur keamanan </h3>
                    <h3> anda disini!</h3>
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
</body>
@endsection