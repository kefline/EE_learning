@extends('layout.student_app')

@section('title', 'Student Assignments')

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
                                    <th scope="col">Status</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Label</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($assignments as $assignment)
                                <tr>
                                    <td>
                                        {{$assignment->name}}
                                        <br>
                                        <small>{{ $assignment->description }}</small>
                                    </td>
                                    <td>
                                        @php
                                            $now = \Carbon\Carbon::now();
                                            $deadline = \Carbon\Carbon::parse($assignment->deadline);
                                        @endphp
                                        @if ($assignment->progress == 100)
                                            <span class="badge badge-success">Completed</span>
                                        @elseif ($deadline < $now)
                                            <span class="badge badge-danger">Overdue</span>
                                        @elseif ($assignment->progress > 0 && $deadline > $now)
                                            <span class="badge badge-warning">In Progress</span>
                                        @elseif ($assignment->progress == 0 && $deadline->diffInDays() <= 3)
                                            <span class="badge badge-info">Attempt Now</span>
                                        @else
                                            <span class="badge badge-danger">Not Started</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="progress" style="background: rgba(255, 193, 7, .1)">
                                            <div class="progress-bar 
                                                @if ($assignment->progress < 50) bg-danger 
                                                @elseif ($assignment->progress >= 50 && $assignment->progress <= 80) bg-warning 
                                                else bg-success 
                                                @endif" 
                                                style="width: {{$assignment->progress}}%;" 
                                                role="progressbar">
                                                <span class="sr-only">{{$assignment->progress}}%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="{{ $deadline->diffInDays() <= 3 ? 'color: red;' : '' }}">
                                        {{ $deadline->format('M d, Y') }}
                                    </td>
                                    <td><span class="badge badge-warning">{{$assignment->label}}</span></td>
                                    <td>
                                        @if ($assignment->file_path)
                                            <!-- Download Link for the Assignment File -->
                                            @if ($deadline < $now)
                                                <span class="badge badge-secondary" style="cursor: not-allowed;">Download (Overdue)</span>
                                            @else
                                                <a href="{{ asset('storage/' . $assignment->file_path) }}" class="badge badge-info" download>Download</a>
                                            @endif
                                        @endif
                                        @if ($deadline < $now)
                                            <span class="badge badge-secondary">No Attempt</span>
                                        @elseif ($assignment->progress > 0 && $deadline > $now)
                                            <a href="">
                                                <span class="badge badge-warning">Start Attempt</span>
                                            </a>
                                        @elseif ($assignment->progress == 0 && $deadline->diffInDays() <= 3)
                                            <a href="">
                                                <span class="badge badge-warning">Start Attempt</span>
                                            </a>
                                        @else
                                            <span class="badge badge-secondary">No Attempt</span>
                                        @endif
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
    <script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/Assets/js/custom.js"></script>
    <script src="/Assets/js/dlabnav-init.js"></script>
    <script src="/Assets/js/demo.js"></script>
    <script src="/Assets/js/styleSwitcher.js"></script>
@endsection
