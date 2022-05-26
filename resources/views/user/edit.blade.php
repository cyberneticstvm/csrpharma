@extends("base")

@section("content")
<div class="body-header border-bottom d-flex py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <!--<small class="text-muted">Welcome</small>-->
                <h1 class="h4 mt-1">Edit User</h1>
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
                        <form method="post" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method("PUT")
                            <div class="row g-4">
                                <div class="col-sm-3">
                                    <label class="form-label">Name <span class="req">*</span></label>
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Name">
                                    @error('name')
                                    <small class="text-danger">{{ $errors->first('name') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">Email <span class="req">*</span></label>
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email">
                                    @error('email')
                                    <small class="text-danger">{{ $errors->first('email') }}</small>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label class="form-label">Username <span class="req">*</span></label>
                                    <input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Username">
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
                                    {!! Form::select('roles[]', $roles, $userRole , array('class' => 'form-control select2','')) !!}
                                    @error('roles')
                                    <small class="text-danger">{{ $errors->first('roles') }}</small>
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