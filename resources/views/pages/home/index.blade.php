@extends('layouts.app1')
@section('content')

<div class="container">
    <div class="row">
       <div class="col-lg-12">
        <h1 class="page-title">Admin Home page</h1>
       </div>
    </div>
</div>
<div class="card-body">
    <a href="{{ url('/pizza/create') }}" class="btn btn-success btn-sm">Add new pizza</a><br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Pizza name</th>
            <th scope="col">price</th>
            <th scope="col">details</th>
            <th scope="col">Image</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($pizzas as $item )

            <tr>
              <th>{{ $loop->iteration }}</th>
              <td>{{ $item->name }}</td>
              <td>{{ $item->price }}</td>
              <td>{{ $item->details }}</td>
              <td><img src="{{ asset($item->photo) }}" width="50" height="50" alt="img img-responsive"></td>
              <td>
                <form action="{{ url('/pizza' .'/'. $item->id) }}" method="post">
                    {{ method_field('DELETE') }}
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('confirm delete?')">delete</button>

                  <a href="{{ url('pizza/' . $item->id . '/edit') }}" class="btn btn-success btn-sm">edit</a>
                  <a href="{{ url('pizza/' . $item->id) }}" class="btn btn-primary btn-sm">show</a>
                </form>
              </td>
            </tr>
        @endforeach
        </tbody>
      </table>
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
