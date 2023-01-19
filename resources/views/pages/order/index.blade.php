@extends('layouts.app1')
@section('content')

<div class="container">
    <div class="row">
       <div class="col-lg-12 mt-5">
        <h1 class="page-title">Pizza Oders List page</h1>
       </div>
       <div class="col-lg-12 mt-5">
      
       </div>
       <div class="col-lg-12 mt-5">
        <div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Pizza Name</th>
                    <th scope="col">Recived Orders</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $key=>$task)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $task->title }}</td>
                        <td>
                            @if ($task->done==0)
                             <span>Not Dilivered</span>
                            @else
                            <span>Dilivered</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('order.delete',$task->id) }}" class="btn btn-danger">delete</a>
                            <a href="{{ route('order.done',$task->id) }}" class="btn btn-success">done</a>
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
       </div>
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
