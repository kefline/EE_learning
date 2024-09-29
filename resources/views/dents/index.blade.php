@extends('layout.app')
@section('title', 'List Students')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Students</h4>
                    <a href="{{route('dents.create')}}" style="margin-left: auto; position: relative;">
                        <i class="fas fa-plus-circle" id="addProgramIcon"
                            style="font-size: 1.75rem; cursor: pointer; color:red;"></i>
                        <span class="tooltip-text"
                            style="display:none; position:absolute; font-size:0.9rem; background-color:#007bff; color:#fff; padding:5px; border-radius:5px; top:50px; z-index:1;">Add Program</span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Registration Number</th>
                                    <th>Level</th>
                                    <th>Department</th>
                                    <th>Program</th>
                                    <th>Courses</th>
                                    <th>Academic Year</th>
                                    <th>Phone Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->reg_no }}</td>
                                    <td>{{ optional($user->level)->name ?? 'N/A' }}</td>
                                    <td>{{ optional($user->department)->name ?? 'N/A' }}</td>
                                    <td>{{ optional($user->program)->name ?? 'N/A' }}</td>
                                    <td>
                                        @if ($user->courses->isNotEmpty())
                                            @foreach ($user->courses as $course)
                                                <div>{{ $course->name }}</div>
                                            @endforeach
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>{{ optional($user->academicYear)->name ?? 'N/A' }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                                        @if ($user->status == 1)
                                            <span class="badge light badge-success">
                                                <i class="fa fa-circle text-success me-1"></i> Active
                                            </span>
                                        @elseif ($user->status == 2)
                                            <span class="badge light badge-danger">
                                                <i class="fa fa-circle text-danger me-1"></i> Inactive
                                            </span>
                                        @elseif ($user->status == 3)
                                            <span class="badge light badge-warning">
                                                <i class="fa fa-circle text-warning me-1"></i> Pending
                                            </span>
                                        @else
                                            <span class="badge light badge-secondary">Unknown</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp me-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger shadow btn-xs sharp">
                                                <i class="fa fa-trash"></i>
                                            </a>
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
