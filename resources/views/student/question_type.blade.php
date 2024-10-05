@extends('layout.student_app')
@section('title', 'Question Type')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Select Question Type</h4>
                    <div style="width: 300px;">
                        <input type="text" id="searchQuestion" class="form-control" placeholder="Search Question">
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="questionTypes" class="table table-striped" style="min-width: 845px;">
                            <thead>
                                <tr>
                                    <th>Question</th>
                                    <th>Question Type</th>
                                    <th>Description</th>
                                    <th>Number of Questions</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($questions as $question)
                                    <tr>
                                        <td>{{ $question->name }}</td>
                                        <td>
                                            <span class="badge light badge-success" style="margin-right: 10px;">
                                                {{ $question->type }}
                                            </span>
                                        </td>
                                        <td>{{ $question->description }}</td>
                                        <td>{{ $question->question_no }}</td>
                                        <td>
                                            <button class="btn btn-primary"
                                                onclick="startExam('{{ $question->type }}')">Start Exam</button>
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

        $(document).ready(function() {
            var table = $('#questionTypes').DataTable({
                "paging": true,
                "info": true,
                "ordering": true,
                "searching": true, 
                "columnDefs": [
                    { "searchable": true, "targets": [0] } 
                ]
            });

            $('#searchQuestion').on('keyup', function() {
                table.column(0).search(this.value).draw(); 
            });
        });
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
