@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('This is the Client page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Pizza Id</th>
                                    <th scope="col">Pizza Name</th>
                                    <th scope="col">Discription</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pizzas as $pizza)
                                <tr>
                                    <td>{{ $pizza->id }}</td>
                                    <td>{{ $pizza->name }}</td>
                                    <td>{{ $pizza->details }}</td>
                                    <td><img src="{{ asset($pizza->photo) }}" width="50" height="50" alt="img img-responsive"></td>
                                </tr
                                @endforeach>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
