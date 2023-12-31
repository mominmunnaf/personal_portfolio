@extends('admin.layout')

@section('content')
    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex"
                    id="dashboardDate">
                    <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
                    <input type="text" class="form-control">
                </div>
                <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
                    <i class="btn-icon-prepend" data-feather="download"></i>
                    Import
                </button>
                <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="printer"></i>
                    Print
                </button>
                <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                    <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                    Download Report
                </button>
            </div>
        </div>

        <br><br><br>

        <!-- Revenue Graph -->
        <div class="row">
            <div class="col-12 col-xl-12 grid-margin stretch-card">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                            <h6 class="card-title mb-0">Live Sentiment Analysis</h6>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                                            class="icon-sm mr-2"></i> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="edit-2" class="icon-sm mr-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="trash" class="icon-sm mr-2"></i> <span
                                            class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="printer" class="icon-sm mr-2"></i> <span
                                            class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="download" class="icon-sm mr-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-start mb-2">
                            <div class="col-md-7">
                                <p class="text-muted tx-13 mb-3 mb-md-0">StockApe uses deep learning analysis
                                    on multiple live data points to generate a trending aggregate sentiment
                                    score. Graph will auto update every interval.</p>
                            </div>
                            <div class="col-md-5 d-flex justify-content-md-end">
                                <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-primary">Today</button>
                                    <button type="button"
                                        class="btn btn-outline-primary d-none d-md-block active">Week</button>
                                    <button type="button" class="btn btn-outline-primary">Month</button>
                                    <button type="button" class="btn btn-outline-primary">Year</button>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex justify-content-md-end">
                                <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                    <img src="{{ asset('backend/images') }}/1.png" width="30px" height="40px">
                                    <img src="{{ asset('backend/images') }}/2.png" width="30px" height="40px">
                                    <img src="{{ asset('backend/images') }}/3.png" width="30px" height="40px">
                                    <img src="{{ asset('backend/images') }}/4.png" width="30px" height="40px">
                                    <img src="{{ asset('backend/images') }}/5.png" width="30px" height="40px">
                                    <img src="{{ asset('backend/images') }}/6.png" width="30px" height="40px">
                                    <img src="{{ asset('backend/images') }}/7.png" width="30px" height="40px">
                                    <img src="{{ asset('backend/images') }}/8.png" width="30px" height="40px">
                                    <img src="{{ asset('backend/images') }}/9.png" width="30px" height="40px">
                                    <img src="{{ asset('backend/images') }}/10.png" width="30px" height="40px">
                                </div>
                            </div>
                        </div>
                        <div class="flot-wrapper" style="height: 600px;">
                            <div id="flotChart1" class="flot-chart"
                                style="height: 600px;background: rgb(9,121,69);
      background: linear-gradient(180deg, rgba(9,121,69,0.6699054621848739) 20%, rgba(255,0,69,0.7091211484593838) 100%);">
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-0">Inbox</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton6" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="eye" class="icon-sm mr-2"></i> <span
                                            class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="edit-2" class="icon-sm mr-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="trash" class="icon-sm mr-2"></i> <span
                                            class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="printer" class="icon-sm mr-2"></i> <span
                                            class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="download" class="icon-sm mr-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="#" class="d-flex align-items-center border-bottom pb-3">
                                <div class="mr-3">
                                    <img src="{{ asset('backend/images') }}/2.png" class="rounded-circle wd-35"
                                        alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Leonardo Payne</h6>
                                        <p class="text-muted tx-12">12.30 PM</p>
                                    </div>
                                    <p class="text-muted tx-13">Hey! there I'm available...</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center border-bottom py-3">
                                <div class="mr-3">
                                    <img src="{{ asset('backend/images') }}/1.png" class="rounded-circle wd-35"
                                        alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Carl Henson</h6>
                                        <p class="text-muted tx-12">02.14 AM</p>
                                    </div>
                                    <p class="text-muted tx-13">I've finished it! See you so..</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center border-bottom py-3">
                                <div class="mr-3">
                                    <img src="{{ asset('backend/images') }}/3.png" class="rounded-circle wd-35"
                                        alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Jensen Combs</h6>
                                        <p class="text-muted tx-12">08.22 PM</p>
                                    </div>
                                    <p class="text-muted tx-13">This template is awesome!</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center border-bottom py-3">
                                <div class="mr-3">
                                    <img src="{{ asset('backend/images') }}/4.png" class="rounded-circle wd-35"
                                        alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Amiah Burton</h6>
                                        <p class="text-muted tx-12">05.49 AM</p>
                                    </div>
                                    <p class="text-muted tx-13">Nice to meet you</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center border-bottom py-3">
                                <div class="mr-3">
                                    <img src="{{ asset('backend/images') }}/5.png" class="rounded-circle wd-35"
                                        alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                                        <p class="text-muted tx-12">01.19 AM</p>
                                    </div>
                                    <p class="text-muted tx-13">Hey! there I'm available...</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-0">Projects</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="eye" class="icon-sm mr-2"></i> <span
                                            class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="edit-2" class="icon-sm mr-2"></i> <span
                                            class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="trash" class="icon-sm mr-2"></i> <span
                                            class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="printer" class="icon-sm mr-2"></i> <span
                                            class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="download" class="icon-sm mr-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-0"></h6>
                            <h6 class="card-title mb-0"><input type="text" class="form-control" id="navbarForm"
                                    placeholder="Quick Search"></h6>

                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="pt-0">#</th>
                                        <th class="pt-0">Project Name</th>
                                        <th class="pt-0">Start Date</th>
                                        <th class="pt-0">Due Date</th>
                                        <th class="pt-0">Status</th>
                                        <th class="pt-0">1 Hour Change</th>
                                        <th class="pt-0">Daily Change</th>
                                        <th class="pt-0">Assign</th>
                                        <th class="pt-0">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>NobleUI jQuery</td>
                                        <td>01/01/2020</td>
                                        <td>26/04/2020</td>
                                        <td><span class="badge badge-danger">Released</span></td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>Leonardo Payne</td>
                                        <td style="padding-left: 28px;"><i data-feather="x-circle"></i></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>NobleUI Angular</td>
                                        <td>01/01/2020</td>
                                        <td>26/04/2020</td>
                                        <td><span class="badge badge-success">Review</span></td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>Carl Henson</td>
                                        <td style="padding-left: 28px;"><i data-feather="x-circle"></i></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>NobleUI ReactJs</td>
                                        <td>01/05/2020</td>
                                        <td>10/09/2020</td>
                                        <td><span class="badge badge-info-muted">Pending</span></td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>Jensen Combs</td>
                                        <td style="padding-left: 28px;"><i data-feather="x-circle"></i></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>NobleUI VueJs</td>
                                        <td>01/01/2020</td>
                                        <td>31/11/2020</td>
                                        <td><span class="badge badge-warning">Work in Progress</span>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        </td>
                                        <td>Amiah Burton</td>
                                        <td style="padding-left: 28px;"><i data-feather="x-circle"></i></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>NobleUI Laravel</td>
                                        <td>01/01/2020</td>
                                        <td>31/12/2020</td>
                                        <td><span class="badge badge-danger-muted text-white">Coming
                                                soon</span></td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>Yaretzi Mayo</td>
                                        <td style="padding-left: 28px;"><i data-feather="x-circle"></i></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>NobleUI NodeJs</td>
                                        <td>01/01/2020</td>
                                        <td>31/12/2020</td>
                                        <td><span class="badge badge-primary">Coming soon</span></td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>Carl Henson</td>
                                        <td style="padding-left: 28px;"><i data-feather="x-circle"></i></td>
                                    </tr>
                                    <tr>
                                        <td class="border-bottom">3</td>
                                        <td class="border-bottom">NobleUI EmberJs</td>
                                        <td class="border-bottom">01/05/2020</td>
                                        <td class="border-bottom">10/11/2020</td>
                                        <td class="border-bottom"><span class="badge badge-info-muted">Pending</span></td>

                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-baseline">
                                                <p class="text-success">
                                                    <span>-2.8%</span>
                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="border-bottom">Jensen Combs</td>
                                        <td style="padding-left: 28px;"><i data-feather="x-circle"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xl-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">MOST ACTIVE</h6>
                        <div id="apexDonut"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 grid-margin stretch-card">

            </div>
        </div>
    @endsection
