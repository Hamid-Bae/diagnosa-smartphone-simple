@extends('template.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper text-dark">
    <div class=" p-3">
        <div class="d-flex">
            <div class="profile w-50">
                <img src="{{asset('/img/dokter.jpg')}}" width="500" alt="dokter">
                <h3>D-Diag</h3>
                <h5>Ini adalah platform yang menyediakan fitur diagnosa permasalahan hp dengan otomatis</h5>
            </div>
            <div class="description">
                <h4 class="text-center">Langkah Pemakaian</h4>
                <ol>
                    <li>Register</li>
                    <li>Login</li>
                    <li>Pergi ke diagnosa untuk melihat daftar problem dan solution</li>
                    <li>Pergi ke konsultasi untuk melakukan pengecekan device anda</li>
                    <li>Anda akan diminta memasukan jenis device anda</li>
                    <li>Centang problem yang anda miliki</li>
                    <li>Hasil diagnosa akan tampil setelah selesai</li>
                </ol>
            </div>
        </div>
    </div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection