@extends('layouts.app1')
@section('content')

<div class="container">
    <div class="row">
       <div class="col-lg-12">
        <h1 class="page-title">Add new pizzaaaaaaaaaa</h1>
       </div>
    </div>
</div>
<div class="card-body">


    <form action="{{ url('/pizza') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Pizza Name:</label>
                <input type="text" name="name"  class="form-control" id="name" placeholder="enter">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Pizza Price:</label>
                <input type="text" name="price"  class="form-control" id="price" placeholder="enter">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Description:</label>
                <input type="text" name="details"  class="form-control" id="details" placeholder="enter"><br>

              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">photo</label>
                <input name="photo"  class="form-control" id="photo" type="file"><br>
                <input type="submit" value="save" class="btn btn-success">
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
