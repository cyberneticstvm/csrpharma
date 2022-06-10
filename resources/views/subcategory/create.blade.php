@extends("base")

@section("content")
<div class="body-header border-bottom d-flex py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!--<small class="text-muted">Welcome</small>-->
                <h1 class="h4 mt-1">Add new Subcategory</h1>
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
                        <form method="post" action="{{ route('subcategory.save') }}">
                            @csrf
                            <div class="row g-4">
                                <h6 class="text-primary">Basic Information</h6>
                                <div class="col-sm-5">
                                    <label class="form-label">Category Name <span class="req">*</span></label>
                                    {!! Form::select('category_id', $categories, '', array('class' => 'form-control select2', '')) !!}
                                    @error('category_id')
                                    <small class="text-danger">{{ $errors->first('category_id') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-5">
                                    <label class="form-label">Subcategory Name <span class="req">*</span></label>
                                    <input type="text" class="form-control" name="subcategory_name" value="{{ old('subcategory_name') }}" placeholder="Subcategory Name">
                                    @error('subcategory_name')
                                    <small class="text-danger">{{ $errors->first('subcategory_name') }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-1 g-4">
                                <div class="col-sm-12 text-end">
                                    <button type="submit" class="btn btn-submit btn-primary">SAVE</button>
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