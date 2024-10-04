@extends('layout.instructor_app')

@section('title', 'Instructor Assignments')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Assignments</h4>
                <a href="{{ route('assignments.create') }}" class="btn btn-primary">Add New Assignment</a>
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
                                <th scope="col">Associated Course</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assignments as $assignment)
                            <tr>
                                <td>{{ $assignment->name }}</td>
                                <td>
                                    <div class="progress" style="background: rgba(255, 193, 7, .1)">
                                        <div class="progress-bar bg-warning" style="width: {{ $assignment->progress }}%;" role="progressbar">
                                            <span class="sr-only">{{ $assignment->progress }}% Complete</span>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ \Carbon\Carbon::parse($assignment->deadline)->format('M d, Y') }}</td>
                                <td><span class="badge badge-warning">{{ $assignment->label }}</span></td>
                                <td>{{ $assignment->course->name ?? 'N/A' }}</td>
                                <td class="d-flex">
                                    <!-- Edit Assignment -->
                                    <a href="{{ route('assignments.edit', $assignment->id) }}" class="badge badge-success me-2">Edit</a>

                                    <!-- Delete Assignment -->
                                    <form action="{{ route('assignments.destroy', $assignment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this assignment?');" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge badge-danger">Delete</button>
                                    </form>

                                    <!-- Upload Assignment -->
                                    <a href="#" class="badge badge-warning ms-2" onclick="openUploadModal('{{ route('assignments.upload', $assignment->id) }}')">Upload</a>
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

<!-- Modal for file upload -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Assignment File</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="uploadForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="assignment_file" class="form-label">Select File</label>
                        <input type="file" name="assignment_file" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
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

<script>
    function openUploadModal(actionUrl) {
        document.getElementById('uploadForm').action = actionUrl;
        var uploadModal = new bootstrap.Modal(document.getElementById('uploadModal'));
        uploadModal.show();
    }
</script>
@endsection
