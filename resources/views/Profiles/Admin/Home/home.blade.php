@extends('layouts.Admin.app')

@section('content')

<div class="container-fluid">
    @include('Profiles.Admin.Home.Components.smallBoxes')
    {{-- @include('Profiles.Admin.Home.Components.charts') --}}

</div>






























{{-- OLD content --}}
{{-- <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in ADMIN!') }}

                   
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection