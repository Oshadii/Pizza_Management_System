@extends('layouts.app1')
@section('content')

<div class="container">
    <div class="row">
       <div class="col-lg-12">
        <h1 class="page-title">View details of pizzaaaaaaaaaa</h1>
       </div>
    </div>
</div>

<div class="card-body">


    <div class="card-boday">
        <h5>Name: {{ $pizzas->name }}</h5>
        <p>Price: {{ $pizzas->price }}</p>
        <p>Details: {{ $pizzas->details }}</p>
    </div>

</div>
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
