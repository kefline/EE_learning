@extends('layout.instructor_app')
@section('title', 'instructor_assignments')
@section('content')
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Assignments</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered verticle-middle table-responsive-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Assignment</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Air Conditioner</td>
                                    <td>
                                        <div class="progress" style="background: rgba(127, 99, 244, .1)">
                                            <div class="progress-bar bg-primary" style="width: 70%;" role="progressbar">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Apr 20,2018</td>
                                    <td><span class="badge badge-primary light">70%</span>
                                    </td>
                                    <td>
                                        <span>
                                            <a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
                                                data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i>
                                            </a>
                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-placement="top"
                                                title="btn-close"><i class="fa-solid fa-xmark text-danger"></i></a>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Textiles</td>
                                    <td>
                                        <div class="progress" style="background: rgba(76, 175, 80, .1)">
                                            <div class="progress-bar bg-success" style="width: 70%;" role="progressbar">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>May 27,2018</td>
                                    <td><span class="badge badge-success">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
                                                data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i>
                                            </a><a href="javascript:void(0);" data-bs-toggle="tooltip" data-placement="top"
                                                title="btn-close"><i class="fa-solid fa-xmark text-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Milk Powder</td>
                                    <td>
                                        <div class="progress" style="background: rgba(70, 74, 83, .1)">
                                            <div class="progress-bar bg-dark" style="width: 70%;" role="progressbar"><span
                                                    class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>May 18,2018</td>
                                    <td><span class="badge badge-dark light">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
                                                data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i>
                                            </a><a href="javascript:void(0);" data-bs-toggle="tooltip" data-placement="top"
                                                title="btn-close"><i class="fa-solid fa-xmark text-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vehicles</td>
                                    <td>
                                        <div class="progress" style="background: rgba(255, 87, 34, .1)">
                                            <div class="progress-bar bg-danger" style="width: 70%;" role="progressbar"><span
                                                    class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Mar 27,2018</td>
                                    <td><span class="badge badge-danger">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
                                                data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i>
                                            </a><a href="javascript:void(0);" data-bs-toggle="tooltip" data-placement="top"
                                                title="btn-close"><i class="fa-solid fa-xmark text-danger"></i></a></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Boats</td>
                                    <td>
                                        <div class="progress" style="background: rgba(255, 193, 7, .1)">
                                            <div class="progress-bar bg-warning" style="width: 70%;" role="progressbar">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Jun 28,2018</td>
                                    <td><span class="badge badge-warning">70%</span>
                                    </td>
                                    <td><span><a href="javascript:void(0);" class="me-4" data-bs-toggle="tooltip"
                                                data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i>
                                            </a><a href="javascript:void(0);" data-bs-toggle="tooltip" data-placement="top"
                                                title="btn-close"><i class="fa-solid fa-xmark text-danger"></i></a></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('scripts')
<script src="/Assets/vendor/global/global.min.js"></script>
<script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="/Assets/js/custom.js"></script>
<script src="/Assets/js/dlabnav-init.js"></script>
<script src="/Assets/js/demo.js"></script>
<script src="/Assets/js/styleSwitcher.js"></script>

@endsection






