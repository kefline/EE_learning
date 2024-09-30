@extends('layout.app')
@section('title','list questions')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Questions</h4>
                <a href="{{ route('programs.create') }}" style="margin-left: auto; position: relative;">
                    <i class="fas fa-plus-circle" id="addProgramIcon"
                        style="font-size: 1.75rem; cursor: pointer; color:red;"></i>
                    <span class="tooltip-text"
                        style="display:none; position:absolute; font-size:0.9rem; background-color:#007bff; color:#fff; padding:5px; border-radius:5px; top:50px; z-index:1;">Add
                        Program</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Question Name</th>
                                <th>Question No</th>
                                <th>Type</th>
                                <th>Level</th>
                                <th>Course</th>
                                <th>Exam</th>
                                <th>Academic Year</th>
                                <th>Deadline</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                    <td>{{$question->name}}</td>
                                    <td>{{$question->question_no}}</td> 
                                    <td>{{$question->type}}</td>
                                    <td>{{$question->level}}</td>
                                    <td>{{ $question->course ? $question->course->name : 'N/A' }}</td>
                                    <td>{{ $question->exam ? $question->exam->name : 'N/A' }}</td>
                                    <td>{{ $question->academicYear ? $question->academicYear->name : 'N/A' }}</td>
                                    <td>{{$question->deadline}}</td>

                                    <td>
                                        @if ($question->status == 'active')
                                            <span class="badge light badge-success">
                                                <i class="fa fa-circle text-success me-1"></i>
                                                Active
                                            </span>
                                        @elseif ($question->status == 'inactive')
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i>
                                                Inactive
                                            </span>
                                        @elseif ($question->status == 'pending')
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i>
                                                Pending
                                            </span>
                                        @else
                                            <span class="badge light badge-secondary">
                                                <i class="fa fa-circle text-secondary me-1"></i>
                                                Unknown
                                            </span>
                                        @endif
                                    </td>
                                    
                                    <td>
                                        <div class="d-flex">
                                            <a href="" class="btn btn-primary shadow btn-xs sharp me-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this question?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
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
