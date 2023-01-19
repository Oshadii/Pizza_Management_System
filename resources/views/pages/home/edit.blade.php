@extends('layouts.app1')
@section('content')

<div class="container">
    <div class="row">
       <div class="col-lg-12">
        <h1 class="page-title">Updatesdetails of  pizzaaaaaaaaaa</h1>
       </div>
    </div>
</div>
<form action="{{ url('/pizza/' .$pizzas->id) }}" method="post">
    @csrf
    @method("PATCH")
    <div>
        <div class="mb-3">
            <input type="hidden" name="id"  class="form-control" id="id" value="{{ $pizzas->id }}">
            <label for="formGroupExampleInput" class="form-label">Pizza Name:</label>
            <input type="text" name="name"  class="form-control" id="name" value="{{ $pizzas->name }}">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Pizza Price:</label>
            <input type="text" name="price"  class="form-control" id="price" value="{{ $pizzas->price }}">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Details :</label>
            <input type="text" name="details"  class="form-control" id="details" value="{{ $pizzas->details }}"><br>
            <input type="submit" value="update" class="btn btn-success">
          </div>
    </div>
    </div>
</form>

@endsection

@push('css')
<style>
    .page-title{
        font-size: 6vh;
    color: #429942;
    padding-top: 4vh;
    padding-left: 60vh;

    }
</style>
@endpush
