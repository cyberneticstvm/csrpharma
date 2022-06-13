@extends("base")

@section("content")
<div class="body-header border-bottom d-flex py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!--<small class="text-muted">Welcome</small>-->
                <h1 class="h4 mt-1">Add new Product</h1>
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
                        <form method="post" action="{{ route('product.save') }}">
                            @csrf
                            <div class="row g-4">
                                <h6 class="text-primary">Basic Information</h6>
                                <div class="col-sm-4">
                                    <label class="form-label">Category <span class="req">*</span></label>
                                    {!! Form::select('category_id', $categories, '', array('class' => 'form-control select2', '')) !!}
                                    @error('category_id')
                                    <small class="text-danger">{{ $errors->first('category_id') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">Subcategory <span class="req">*</span></label>
                                    {!! Form::select('subcategory_id', $subcategories, '', array('class' => 'form-control select2', '')) !!}
                                    @error('subcategory_id')
                                    <small class="text-danger">{{ $errors->first('subcategory_id') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">Product Name <span class="req">*</span></label>
                                    <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}" placeholder="Product Name">
                                    @error('product_name')
                                    <small class="text-danger">{{ $errors->first('product_name') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">Molecule <span class="req">*</span></label>
                                    {!! Form::select('molecule_id', $molecules, '', array('class' => 'form-control select2', '')) !!}
                                    @error('molecule_id')
                                    <small class="text-danger">{{ $errors->first('molecule_id') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">Manufacturer <span class="req">*</span></label>
                                    {!! Form::select('manufacturer_id', $manufacturers, '', array('class' => 'form-control select2', '')) !!}
                                    @error('manufacturer_id')
                                    <small class="text-danger">{{ $errors->first('manufacturer_id') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label class="form-label">HSN </label>
                                    <input type="text" class="form-control" name="hsn" value="{{ old('hsn') }}" placeholder="HSN">
                                    @error('hsn')
                                    <small class="text-danger">{{ $errors->first('hsn') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">CGST % <span class="req">*</span></label>
                                    <input type="number" class="form-control" name="cgst" step="1" min="0" max="100" value="{{ old('cgst') }}" placeholder="0%">
                                    @error('cgst')
                                    <small class="text-danger">{{ $errors->first('cgst') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">SGST % <span class="req">*</span></label>
                                    <input type="number" class="form-control" name="sgst" step="1" min="0" max="100" value="{{ old('sgst') }}" placeholder="0%">
                                    @error('sgst')
                                    <small class="text-danger">{{ $errors->first('sgst') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-8">
                                    <label class="form-label">Product Description / Remarks / notes </label>
                                    <input type="text" class="form-control" name="product_description" value="{{ old('product_description') }}" placeholder="Product Description / Remarks / notes">
                                    @error('product_description')
                                    <small class="text-danger">{{ $errors->first('product_description') }}</small>
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