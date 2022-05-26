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
                <div class="d-flex flex-wrap justify-content-between align-items-end">
                    <div class="mb-3">
                        <h5 class="mb-0">Basic Information</h5>
                        <!--<span class="text-muted">Description text here...</span>-->
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter here">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter here">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter here">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Select</label>
                                <select class="form-control form-control-lg" tabindex="-98">
                                    <option value="">- Gender -</option>
                                    <option value="10">Male</option>
                                    <option value="20">Female</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Speciality</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter here">
                            </div>
                            <div class="col-sm-3">
                                <label class="form-label">Mobile</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter here">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Your Email</label>
                                <input type="email" class="form-control form-control-lg" placeholder="Enter here">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Website URL</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter here">
                            </div>
                            <div class="col-lg-12">
                                <input type="file" class="form-control">
                            </div>
                            <div class="col-sm-12">
                                <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="d-flex flex-wrap justify-content-between align-items-end">
                    <div class="mb-3">
                        <h5 class="mb-0">Doctor's Account Information</h5>
                        <span class="text-muted">Description text here...</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <label class="form-label">User Name</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter here">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control form-control-lg" placeholder="Enter here">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control form-control-lg" placeholder="Enter here">
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .row end -->

    </div>
</div>
@endsection