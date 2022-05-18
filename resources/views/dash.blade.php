@extends("base")

@section("content")
    <!-- main body area -->
    <div class="main px-xl-5 px-lg-4 px-md-3">

        <!-- Body: Header -->
        <div class="body-header border-bottom d-flex py-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <small class="text-muted">Welcome to Analytics Dashboard.</small>
                        <h1 class="h4 mt-1">Hospital Analytics</h1>
                    </div>
                    <div class="col-auto">
                        <a href="https://themeforest.net/user/wrraptheme" title="Download" target="_blank" class="btn btn-white border lift">Download</a>
                        <button type="button" class="btn btn-dark lift">Generate Report</button>
                    </div>
                </div> <!-- Row end  -->
            </div>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-4 py-3">
            <div class="container">
                
                <div class="row g-1 mb-4">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card p-3 mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-light"><i class="fa fa-dollar fa-lg"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="small">Revenue</div>
                                    <span class="h6 mb-0">$18,925</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card p-3 mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-light"><i class="fa fa-credit-card fa-lg"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="small">Expense</div>
                                    <span class="h6 mb-0">$11,024</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card p-3 mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-light"><i class="fa fa-smile-o fa-lg"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="small">Happy Clients</div>
                                    <span class="h6 mb-0">8,925</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card p-3 mb-0">
                            <div class="d-flex align-items-center">
                                <div class="avatar rounded no-thumbnail bg-light"><i class="fa fa-eye fa-lg"></i></div>
                                <div class="flex-fill ms-3 text-truncate">
                                    <div class="small">Total Visitors</div>
                                    <span class="h6 mb-0">18,925</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span>Operation Income</span>
                                <h4>7,12,326$</h4>
                            </div>
                            <div id="apexspark1"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span>Pharmacy Income</span>
                                <h4>25,965$</h4>
                            </div>
                            <div id="apexspark2"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span>Hospital Expenses</span>
                                <h4>14,965$</h4>
                            </div>
                            <div id="apexspark3"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <span>Hospital Expenses</span>
                                <h4>14,965$</h4>
                            </div>
                            <div id="apexspark4"></div>
                        </div>
                    </div>
                </div> <!-- .row end -->
                
                <div class="row g-1 mb-4 row-deck">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0">Avg Treatment Costs</h6>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-link text-muted" type="button"><i class="fa fa-external-link"></i></button>
                                    <button class="btn btn-sm btn-link text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                    <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="h4 fw-bold mb-0">$105.5</div>
                                <span class="text-muted small">Avg Treatment Costs All Ages</span>
                                <div id="apex-ATCosts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0">Hospital Survey</h6>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-link text-muted" type="button"><i class="fa fa-external-link"></i></button>
                                    <button class="btn btn-sm btn-link text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                    <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apex-HospitalSurvey"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="btn-group position-absolute top-0 end-0">
                                <a href="#" class="nav-link py-3 px-4 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end border-0 shadow">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                </ul>
                            </div>                                            
                            <div class="card-body d-flex align-items-start justify-content-between flex-column">
                                <div>
                                    <h6 class="mb-0">Top Rated Doctors</h6>
                                    <small class="text-muted">9 Contacts</small>
                                </div>
                                <div class="pt-2">
                                    <img class="avatar rounded m-1 lift" src="../../assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar rounded m-1 lift" src="../../assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar rounded m-1 lift" src="../../assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar rounded m-1 lift" src="../../assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar rounded m-1 lift" src="../../assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar rounded m-1 lift" src="../../assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar rounded m-1 lift" src="../../assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar rounded m-1 lift" src="../../assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar rounded m-1 lift" src="../../assets/images/xs/avatar5.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-start justify-content-between flex-column">
                                <div>
                                    <h6 class="mb-0">Top Rated Nurse</h6>
                                    <small class="text-muted">14 Contacts</small>
                                </div>
                                <div class="pt-2">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar6.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-start justify-content-between flex-column">
                                <div>
                                    <h6 class="mb-0">Contract base</h6>
                                    <small class="text-muted">7 Contacts</small>
                                </div>
                                <div class="pt-2">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar7.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar8.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                    <img class="avatar sm rounded m-1 lift" src="../../assets/images/xs/avatar4.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Doctors Name" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->

                <div class="row g-1 row-deck">
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0">Patients Status</h6>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-link text-muted" type="button"><i class="fa fa-external-link"></i></button>
                                    <button class="btn btn-sm btn-link text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                    <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Patients</th>
                                            <th>Adress</th>
                                            <th>Admited</th>
                                            <th>Discharge</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="../../assets/images/xs/avatar3.jpg" class="avatar sm rounded me-2" alt="profile-image"><span>John</span></td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>Sept 13, 2020</td>
                                            <td>Sept 16, 2020</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-info">Admit</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../../assets/images/xs/avatar1.jpg" class="avatar sm rounded me-2" alt="profile-image"><span>Jack Bird</span></td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>Sept 13, 2020</td>
                                            <td>Sept 22, 2020</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Discharge</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../../assets/images/xs/avatar2.jpg" class="avatar sm rounded me-2" alt="profile-image"><span>Jack Bird</span></td>
                                            <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>Sept 17, 2020</td>
                                            <td>Sept 16, 2020</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Discharge</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../../assets/images/xs/avatar4.jpg" class="avatar sm rounded me-2" alt="profile-image"><span>Dean Otto</span></td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>Sept 13, 2020</td>
                                            <td>Sept 23, 2020</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-info">Admit</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="../../assets/images/xs/avatar5.jpg" class="avatar sm rounded me-2" alt="profile-image"><span>Hughe L.</span></td>
                                            <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>Sept 18, 2020</td>
                                            <td>Sept 18, 2020</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-info">Admit</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                                <h6 class="m-0">Gender Overview</h6>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-link text-muted" type="button"><i class="fa fa-external-link"></i></button>
                                    <button class="btn btn-sm btn-link text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow border-0">
                                                    <li><a class="dropdown-item" href="#">Action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Another action<i class="fa fa-arrow-right"></i></a></li>
                                        <li><a class="dropdown-item" href="#">Something else here<i class="fa fa-arrow-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apex-GenderOverview"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->

            </div>
        </div>

        <!-- Body: Footer -->
        <div class="body-footer d-flex">
            <div class="container">
                <div class="col-12">
                    <div class="card mb-1">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-5 order-lg-2">
                                    <div class="text-center p-5">
                                        <img src="../../assets/images/web-services.svg" alt="..." class="img-fluid" style="max-width: 220px;">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7 px-5 order-lg-1">
                                    <h3 class="fw-light">ENLIGHT <br>- your business with Our Solution</h3>
                                    <p class="text-muted">Get access to the highly experienced dedicated development team for custom web and app development technology solutions as per your business needs</p>
                                    <a class="btn btn-dark btn-lg lift" href="https://www.thememakker.com/hire-us/" target="_blank">Get Free Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border-0">
                        <div class="card-body">
                            <div class="row justify-content-between align-items-center">
                                <div class="col">
                                    <p class="mb-0">© AL-UI. <span class="d-none d-sm-inline-block">2021 ThemeMakker.</span></p>
                                </div>
                                <div class="col-auto">
                                    <div class="d-flex justify-content-end">
                                        <!-- List Dot -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item"><a href="https://www.thememakker.com/about/">About</a></li>
                                            <li class="list-inline-item"><a href="https://www.thememakker.com/hire-us/">Hire us</a></li>
                                            <li class="list-inline-item"><a href="https://www.thememakker.com/all-templates/">Template</a></li>
                                            <li class="list-inline-item"><a href="#">License</a></li>
                                        </ul>
                                        <!-- End List Dot -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection