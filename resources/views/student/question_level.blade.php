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
                            @foreach ($questions as $question)
                            <tr>
                                <td>01</td>
                                <td>{{$question->name}}</td>
                                <td><span class="badge light badge-success" style="margin-right: 10px;">{{$question->level}}</span></td>
                                <td><button class="btn btn-primary" onclick="startQuestion('01')">Start</button></td>
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


