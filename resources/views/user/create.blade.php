@extends("base")

@section("content")
<div class="body-header border-bottom d-flex py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!--<small class="text-muted">Welcome</small>-->
                <h1 class="h4 mt-1">Add new User</h1>
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
                        <form method="post" action="{{ route('user.save') }}">
                            @csrf
                            <div class="row g-4">
                                <h6 class="text-primary">Basic Information</h6>
                                <div class="col-sm-3">
                                    <label class="form-label">Name <span class="req">*</span></label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name">
                                    @error('name')
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">Email <span class="req">*</span></label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                    @error('email')
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">Username <span class="req">*</span></label>
                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username">
                                    @error('username')
                                    <small class="text-danger">{{ $errors->first('username') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">Password <span class="req">*</span></label>
                                    <input type="password" class="form-control" name="password" placeholder="*****">
                                    @error('password')
                                    <small class="text-danger">{{ $errors->first('password') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">Role <span class="req">*</span></label>
                                    {!! Form::select('roles[]', $roles, [] , array('class' => 'form-control select2','')) !!}
                                    @error('roles')
                                    <small class="text-danger">{{ $errors->first('roles') }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mt-1 g-4">
                                <h6 class="text-primary">Store Details</h6>
                                <div class="col-sm-4">
                                    <label class="form-label">Store Name</label>
                                    <input type="text" class="form-control" name="store_name" value="{{ old('store_name') }}" placeholder="Store Name">
                                    @error('store_name')
                                    <small class="text-danger">{{ $errors->first('store_name') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Store Contact No.</label>
                                    <input type="text" class="form-control" name="store_contact" value="{{ old('store_contact') }}" placeholder="Store Contact No.">
                                    @error('store_contact')
                                    <small class="text-danger">{{ $errors->first('store_contact') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Store Address</label>
                                    <input type="text" class="form-control" name="store_address" value="{{ old('store_address') }}" placeholder="Store Address">
                                    @error('store_address')
                                    <small class="text-danger">{{ $errors->first('store_address') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Store GSTIN</label>
                                    <input type="text" class="form-control" name="store_gstin" value="{{ old('store_gstin') }}" placeholder="Store GSTIN">
                                    @error('store_gstin')
                                    <small class="text-danger">{{ $errors->first('store_gstin') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Drug Licence No.</label>
                                    <input type="text" class="form-control" name="drn" value="{{ old('drn') }}" placeholder="Drug Licence No.">
                                    @error('drn')
                                    <small class="text-danger">{{ $errors->first('drn') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-2">
                                    <label class="form-label">Credit Limit</label>
                                    <input type="number" class="form-control" name="credit_limit" value="{{ old('credit_limit') }}" placeholder="0.00">
                                    @error('credit_limit')
                                    <small class="text-danger">{{ $errors->first('credit_limit') }}</small>
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