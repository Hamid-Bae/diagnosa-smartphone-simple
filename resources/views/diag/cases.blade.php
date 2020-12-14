@extends('template.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper text-dark">
    <div class=" p-3">
        <div class="col-md-12 mx-auto">

            <div class="card text-dark">
            <div class="card-header">
                <h3 class="card-title">Diagnosa Manual</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-sm">
                <thead>
                    <tr>
                    <th style="width: 10px">No</th>
                    <th>Keluhan</th>
                    <th>Masalah</th>
                    <th>Solusi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cases as $key => $case)
                    <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$case->case}}</td>
                    <td>{{$case->solution->problem}}</td>
                    <td>{{$case->solution->solution}}</span></td>
                    </tr>
                    @endforeach 
                    
                </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection