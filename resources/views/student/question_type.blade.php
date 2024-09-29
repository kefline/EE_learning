@extends('layout.student_app')
@section('title', 'question_type')
@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Select Question Type</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="questionTypes" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Question Type</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="badge light badge-success" style="margin-right: 10px;">Multiple
                                            Choice</span></td>
                                    <td>Choose the correct answer from the options provided.</td>
                                    <td>
                                        <button class="btn btn-primary mb-5 mt-4"
                                            onclick="startExam('multipleChoice')">Start Exam</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="badge light badge-info" style="margin-right: 10px;">True/False</span>
                                    </td>
                                    <td>Select true or false for each statement.</td>
                                    <td>
                                        <button class="btn btn-primary mb-5" onclick="startExam('trueFalse')">Start
                                            Exam</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="badge light badge-warning" style="margin-right: 10px;">Short
                                            Answer</span></td>
                                    <td>Provide a brief answer to the question.</td>
                                    <td>
                                        <button class="btn btn-primary" onclick="startExam('shortAnswer')">Start
                                            Exam</button>
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
    <script>
        function startExam(type) {
            if (type === 'multipleChoice') {
                window.location.href = '/multiple_choice';
            } else if (type === 'trueFalse') {
                window.location.href = '/true_false';
            } else if (type === 'shortAnswer') {
                window.location.href = '/short_answer';
            }
        }
    </script>


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
