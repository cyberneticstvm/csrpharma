@extends("base")

@section("content")
<div class="body-header border-bottom d-flex py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!--<small class="text-muted">Welcome</small>-->
                <h1 class="h4 mt-1">Edit Role</h1>
            </div>
        </div> <!-- Row end  -->
    </div>
</div>
<div class="body d-flex py-lg-4 py-3">
    <div class="container">        
        <div class="row g-4">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="d-flex flex-wrap justify-content-between align-items-end">
                    <div class="mb-3">
                        <h5 class="mb-0">Basic Information</h5>
                        <!--<span class="text-muted">Description text here...</span>-->
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('role.update', $role->id) }}">
                            @csrf
                            @method("PUT")
                            <div class="row g-4">
                                <div class="col-sm-3">
                                    <label class="form-label">Role Name <span class="req">*</span></label>
                                    {!! Form::text('name', $role->name, array('placeholder' => 'Role Name','class' => 'form-control')) !!}
                                    @error('name')
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                    @enderror
                                </div>
                                <label class="form-label">Permissions <span class="req">*</span></label>
                                <div class="row mx-1">                                                            
                                    @foreach($permission as $value)
                                    <div class="col-sm-2 form-check form-check-inline">
                                        <label class="form-check-label" for="flexCheckDefault">{{ $value->name }}</label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name, form-check-input')) }}
                                    </div>
                                    @endforeach
                                    @error('permission')
                                    <small class="text-danger">{{ $errors->first('permission') }}</small>
                                    @enderror
                                </div>
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