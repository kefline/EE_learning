@extends('layout.instructor_app')
@section('title', 'List Exams')
@section('content')



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Exams</h4>
                    <a href="" style="margin-left: auto; position: relative;">
                        <i class="fas fa-plus-circle" id="addProgramIcon"
                            style="font-size: 1.75rem; cursor: pointer; color:red;"></i>
                        <span class="tooltip-text"
                            style="display:none; position:absolute; font-size:0.9rem; background-color:#007bff; color:#fff; padding:5px; border-radius:5px; top:50px; z-index:1;">Add
                            Exam</span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th> Associated Programs</th>
                                    <th>Academic year</th>
                                    <th>Date</th>
                                    <th>Duration</th>

                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($exams as $exam)
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg"
                                                alt=""></td>
                                        <td>{{ $exam->name }}</td>
                                        <td>{{ $exam->code }}</td>
                                        <td>{{ $exam->program->name }}</td>
                                        <td>{{ $exam->academicYear->name }}</td>
                                        <td>{{ $exam->date }}</td>
                                        <td>{{ $exam->duration }}</td>


                                        <td>
                                            @if ($exam->status == 1)
                                                <span class="badge light badge-danger">
                                                    <i class="fa fa-circle text-danger me-1"></i>
                                                    completed
                                                </span>
                                            @elseif ($exam->status == 2)
                                                <span class="badge light badge-success">
                                                    <i class="fa fa-circle text-success me-1"></i>
                                                    upcoming
                                                </span>
                                            @elseif ($exam->status == 3)
                                                <span class="badge light badge-warning">
                                                    <i class="fa fa-circle text-warning me-1"></i>
                                                    Pending
                                                </span>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach





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
    <script src="/Assets/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/Assets/vendor/apexchart/apexchart.js"></script>

    <script src="/Assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/Assets/js/plugins-init/datatables.init.js"></script>

    <script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="/Assets/js/custom.js"></script>
    <script src="/Assets/js/dlabnav-init.js"></script>
    <script src="/Assets/js/demo.js"></script>
    <script src="/Assets/js/styleSwitcher.js"></script>
@endsection
