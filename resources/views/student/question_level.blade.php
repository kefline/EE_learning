@extends('layout.student_app')
@section('title','question_level')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Questions</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example4" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>Roll No</th>
                                <th>Question</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>What is an algorithm?</td>
                                <td><span class="badge light badge-success" style="margin-right: 10px;">Hard</span></td>
                                <td><button class="btn btn-primary" onclick="startQuestion('01')">Start</button></td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Explain the concept of recursion.</td>
                                <td><span class="badge light badge-warning" style="margin-right: 10px;">Medium</span>
                                </td>
                                <td><button class="btn btn-primary" onclick="startQuestion('02')">Start</button></td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>What is the time complexity of binary search?</td>
                                <td><span class="badge light badge-danger" style="margin-right: 10px;">Easy</span></td>
                                <td><button class="btn btn-primary" onclick="startQuestion('03')">Start</button></td>
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


