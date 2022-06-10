@extends("base")

@section("content")
<div class="body-header border-bottom d-flex py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!--<small class="text-muted">Welcome</small>-->
                <h1 class="h4 mt-1">Update Manufacturer</h1>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>
<div class="body d-flex py-lg-4 py-3">
    <div class="container">        
        <div class="row g-4">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">                        
                        <form method="post" action="{{ route('manufacturer.update', $manufacturer->id) }}">
                            @csrf
                            @method("PUT")
                            <div class="row g-4">
                                <h6 class="text-primary">Basic Information</h6>
                                <div class="col-sm-5">
                                    <label class="form-label">Manufacturer Name <span class="req">*</span></label>
                                    <input type="text" class="form-control" name="manufacturer_name" value="{{ $manufacturer->manufacturer_name }}" placeholder="Manufacturer Name">
                                    @error('manufacturer_name')
                                    <small class="text-danger">{{ $errors->first('manufacturer_name') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">Manufacturer Code <span class="req">*</span></label>
                                    <input type="text" class="form-control" name="manufacturer_code" value="{{ $manufacturer->manufacturer_code }}" placeholder="Manufacturer Code">
                                    @error('manufacturer_code')
                                    <small class="text-danger">{{ $errors->first('manufacturer_code') }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-1 g-4">
                                <div class="col-sm-12 text-end">
                                    <button type="submit" class="btn btn-submit btn-primary">UPDATE</button>
                                    <button type="button" onClick="history.back()" class="btn btn-warning">CANCEL</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- .row end -->
    </div>
</div>
@endsection