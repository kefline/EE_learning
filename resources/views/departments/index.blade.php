@extends('layout.app')
@section('title', 'list_departments')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Departments</h4>
                    <a href="/department" style="margin-left: auto; position: relative;">
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
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Location</th>
                                    <th>Contact</th>
                                    <th>Associated Levels</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg"
                                                alt=""></td>
                                        <td>{{ $department->name }}</td>
                                        <td>{{ $department->code }}</td>
                                        <td>{{ $department->location }}</td>
                                        <td>{{ $department->contact }}</td>

                                        <td>
                                            @if ($department->levels->isNotEmpty())
                                                <ul>
                                                    @foreach ($department->levels as $level)
                                                        <li>{{ $level->name }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                No levels associated
                                            @endif
                                        </td>

                                        <td>{{ $department->description }}</td>
                                        <td>
                                            <span
                                                class="badge light {{ $department->status ? 'badge-success' : 'badge-danger' }}">
                                                <i
                                                    class="fa fa-circle {{ $department->status ? 'text-success' : 'text-danger' }} me-1"></i>
                                                {{ $department->status ? 'Active' : 'Inactive' }}
                                            </span>
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
