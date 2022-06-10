@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')

@extends('base')
@section("content")
<div class="body-header border-bottom d-flex py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!--<small class="text-muted">Welcome</small>-->
                <h1 class="h4 mt-1">Error 403!</h1>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>
<div class="body d-flex py-lg-4 py-3">
    <div class="container">        
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-danger">{{ $exception->getMessage() }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
