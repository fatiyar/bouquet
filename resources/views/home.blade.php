@extends('layout.v_template')

@section('title',' Home')
@section('halaman','Home')
@section('content')
<form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="btn btn-primary" type="submit">Logout</button>
                                    </form>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
