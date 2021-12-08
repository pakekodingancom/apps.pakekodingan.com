@extends('layouts/app')

@section('PluginCssFile')
    <link rel="stylesheet" href="{{ asset('assets/plugin/nestable/jquery-nestable.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/plugin/datatables/responsive.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugin/datatables/dataTables.bootstrap5.min.css') }}">    
@endsection

@section('Body')
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card border-0 mb-4 no-bg">
                        <div class="card-header py-3 px-0 d-flex align-items-center  justify-content-between border-bottom">
                            <h3 class=" fw-bold flex-fill mb-0">Profile</h3>
                        </div>
                    </div>
                </div>
            </div><!-- Row End -->
            <div class="row g-3">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card teacher-card  mb-3">
                        <div class="card-body d-flex teacher-fulldeatil">
                            <div class="profile-teacher pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                                <a href="#">
                                    <img src="{{ asset('assets/images/lg/avatar3.jpg') }}" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                </a>
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                    <h6 class="mb-0 fw-bold d-block fs-6">CEO</h6>
                                    <span class="text-muted small">CLIENT ID : PXL-0001</span>
                                </div>
                            </div>
                            <div class="teacher-info border-start ps-xl-4 ps-md-4 ps-sm-4 ps-4 w-100">
                                <h6  class="mb-0 mt-2  fw-bold d-block fs-6">AgilSoft Tech</h6>
                                <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Ryan Ogden</span>
                                <p class="mt-2 small">The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy</p>
                                <div class="row g-2 pt-2">
                                    <div class="col-xl-5">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-ui-touch-phone"></i>
                                            <span class="ms-2 small">202-555-0174 </span>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-email"></i>
                                            <span class="ms-2 small">ryanogden@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-birthday-cake"></i>
                                            <span class="ms-2 small">19/03/1980</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-address-book"></i>
                                            <span class="ms-2 small">2734  West Fork Street,EASTON 02334.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="fw-bold  py-3 mb-3">Project</h6>
                    <div class="teachercourse-list mb-3">
                        <div class="row g-3 gy-5 pt-3 row-deck">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mt-5">
                                            <div class="lesson_name">
                                                <div class="project-block light-info-bg">
                                                    <i class="icofont-paint"></i>
                                                </div>
                                                <span class="small text-muted project_name fw-bold"> Social Geek Made </span>
                                                <h6 class="mb-0 fw-bold  fs-6  mb-2">UI/UX Design</h6>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-list avatar-list-stacked pt-2">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar2.jpg') }}" alt="">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar1.jpg') }}" alt="">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar3.jpg') }}" alt="">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar4.jpg') }}" alt="">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar8.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="row g-2 pt-4">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-paper-clip"></i>
                                                    <span class="ms-2">5 Attach</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-sand-clock"></i>
                                                    <span class="ms-2">4 Month</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-group-students "></i>
                                                    <span class="ms-2">5 Members</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-ui-text-chat"></i>
                                                    <span class="ms-2">10</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dividers-block"></div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h4 class="small fw-bold mb-0">Progress</h4>
                                            <span class="small light-danger-bg  p-1 rounded"><i class="icofont-ui-clock"></i> 35 Days Left</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mt-5">
                                            <div class="lesson_name">
                                                <div class="project-block bg-lightgreen">
                                                    <i class="icofont-vector-path"></i>
                                                </div>
                                                <span class="small text-muted project_name fw-bold"> Practice to Perfect </span>
                                                <h6 class="mb-0 fw-bold  fs-6  mb-2">Website Design</h6>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-list avatar-list-stacked pt-2">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar2.jpg') }}" alt="">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar1.jpg') }}" alt="">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar3.jpg') }}" alt="">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="row g-2 pt-4">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-paper-clip"></i>
                                                    <span class="ms-2">4 Attach</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-sand-clock"></i>
                                                    <span class="ms-2">1 Month</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-group-students "></i>
                                                    <span class="ms-2">4 Members</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-ui-text-chat"></i>
                                                    <span class="ms-2">3</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dividers-block"></div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h4 class="small fw-bold mb-0">Progress</h4>
                                            <span class="small light-danger-bg  p-1 rounded"><i class="icofont-ui-clock"></i> 15 Days Left</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 39%" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between mt-5">
                                            <div class="lesson_name">
                                                <div class="project-block bg-lightgreen">
                                                    <i class="icofont-vector-path"></i>
                                                </div>
                                                <span class="small text-muted project_name fw-bold"> Practice to Perfect </span>
                                                <h6 class="mb-0 fw-bold  fs-6  mb-2">Website Design</h6>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-list avatar-list-stacked pt-2">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar2.jpg') }}" alt="">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar1.jpg') }}" alt="">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar3.jpg') }}" alt="">
                                                <img class="avatar rounded-circle sm" src="{{ asset('assets/images/xs/avatar4.jpg') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="row g-2 pt-4">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-paper-clip"></i>
                                                    <span class="ms-2">4 Attach</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-sand-clock"></i>
                                                    <span class="ms-2">1 Month</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-group-students "></i>
                                                    <span class="ms-2">4 Members</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="icofont-ui-text-chat"></i>
                                                    <span class="ms-2">3</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dividers-block"></div>
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <h4 class="small fw-bold mb-0">Progress</h4>
                                            <span class="small light-danger-bg  p-1 rounded"><i class="icofont-ui-clock"></i> 15 Days Left</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 39%" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                                    <div class="info-header">
                                        <h6 class="mb-0 fw-bold ">Invoice</h6>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Project</th>
                                                <th>Date Start</th>
                                                <th>Date End</th>
                                                <th>Amount</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="invoices.html" class="fw-bold text-secondary">#00001</a></td>
                                                <td><a href="projects.html">Social Geek Made</a></td>
                                                <td>10-01-2021</td>
                                                <td>10-02-2021</td>
                                                <td>$3250</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="invoices.html" class="fw-bold text-secondary">#00002</a></td>
                                                <td><a href="projects.html">Practice to Perfect</a></td>
                                                <td>12-02-2021</td>
                                                <td>10-04-2021</td>
                                                <td>$1578</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="invoices.html" class="fw-bold text-secondary">#00003</a></td>
                                                <td><a href="projects.html">Rhinestone</a></td>
                                                <td>18-02-2021</td>
                                                <td>20-04-2021</td>
                                                <td>$1978</td>
                                                <td><span class="badge bg-lavender-purple">Draf</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="invoices.html" class="fw-bold text-secondary">#00004</a></td>
                                                <td><a href="projects.html">Box of Crayons</a></td>
                                                <td>28-02-2021</td>
                                                <td>30-04-2021</td>
                                                <td>$1978</td>
                                                <td><span class="badge bg-lavender-purple">Draf</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>
            </div><!-- Row End -->
        </div>
    </div>
@endsection

@section('JqueryCoreJs')
    <script src="{{ asset('assets/bundles/profile/libscripts.bundle.js') }}"></script>
@endsection

@section('PluginJs')
    <script src="{{ asset('assets/bundles/profile/dataTables.bundle.js') }}"></script>
@endsection

@section('JqueryPageJs')
    <script src="{{ asset('assets/js/template.js') }}"></script>
@endsection

@section('JsCustom')
    @include('profile/js_profile')
@endsection