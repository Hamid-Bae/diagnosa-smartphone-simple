@extends('template.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper text-dark">
    <div class=" p-3">
        <h2>Hasil</h2>
            <hr>
        <div class="data-user mb-3">
            <h4>Data User</h4>
            <h6>Username : {{$device->user->name}}</h6>
            <h6>Email : {{$device->user->email}}</h6>
        </div>
        <hr>
        <div class="jenis-smartphone mb-3">
            <h4>Jenis Smartphone</h4>
            <h6>{{$device->device}}</h6>
        </div>
        <hr>
        <div class="daftar-gejala mb-3">
            <h4>Daftar Gejala</h4>
            @foreach ($device->problems as $problem)
                <h6>{{$problem->case}}</h6>
            @endforeach
        </div>
        <hr>
        <div class="daftar-kerusakan mb-3">
            <h4>Daftar Kerusakan</h4>
            @foreach ($device->problems as $problem)
                <h6>{{$problem->solution->problem}}</h6>
            @endforeach
        </div>
        <hr>
        <div class="solusi mb-3">
            <h4>Solusi Penanganan</h4>
            @foreach ($device->problems as $problem)
                <h6>{{$problem->solution->solution}}</h6>
            @endforeach
        </div>
    </div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection