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
                    <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row g-3">
                                    <div class="col">
                                        <label for="formGroupExampleInput" class="form-label">Enter pizza name and description:</label>
                                      <input type="text" name ="title" class="form-control"  aria-label="First name" placeholder="pizza name and descripion">
                                    </div>

                                  </div>
                            </div>
                            <div class="col-lg-4"><br />
                                    <button class="btn btn-primary">Place pizza order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
