@extends('template.master')

@section('content')
<div class="content-wrapper text-dark">
  <div class="p-3">
    <h2 class="mb-3">Konsultasi</h2>
    <div class="card card-dark">
        <div class="card-header">
          <h3 class="card-title">Daftar gejala</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="/result/{{$device->id}}">
          @csrf
          <div class="card-body">
            <div class="col-sm-6">
              <!-- checkbox -->
              <div class="form-group">
                @foreach ($questions as $question)
                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="question[]" id="question{{$question->id}}" value="{{$question->id}}">
                    <label for="question{{$question->id}}" class="custom-control-label">{{$question->case}}</label>
                  </div>
                @endforeach
              </div>
            </div>
            <button type="submit" class="btn btn-secondary px-3">Submit</button>
          </div>
        </form>
      </div>
  </div>
</div>
@endsection