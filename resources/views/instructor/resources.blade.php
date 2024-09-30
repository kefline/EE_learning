@extends('layout.instructor_app')
@section('title', 'resources')
@section('content')

    <div class="row">
        <!-- Left column for material management -->
        <div class="col-xl-8 col-xxl-7">
            <!-- Card for Materials Section -->
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Course Materials</h3>
                    <!-- Search bar -->
                    <div class="input-group search-bar">
                        <input type="text" class="form-control" placeholder="Search materials...">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <!-- Filters and Sorting -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="filter-options">
                            <label class="me-2">Filter by:</label>
                            <select class="form-select" style="width: 150px;">
                                <option value="all">All</option>
                                <option value="documents">Documents</option>
                                <option value="videos">Videos</option>
                                <option value="quizzes">Quizzes</option>
                            </select>
                        </div>
                        <div class="sort-options">
                            <label class="me-2">Sort by:</label>
                            <select class="form-select" style="width: 150px;">
                                <option value="recent">Most Recent</option>
                                <option value="oldest">Oldest</option>
                                <option value="name">Name (A-Z)</option>
                            </select>
                        </div>
                    </div>

                    <!-- Material Card 1 -->
                    <div class="material-card row mb-4">
                        <div class="col-xl-6 col-xxl-5">
                            <img src="images/materials/doc-1.jpg" alt="Material Image" class="img-fluid rounded">
                        </div>
                        <div class="col-xl-6 col-xxl-7">
                            <div class="material-content">
                                <h4><a href="javascript:void(0);">Understanding Advanced JavaScript
                                        Techniques</a></h4>
                                <p>This material covers advanced topics in JavaScript, including closures,
                                    promises, and async/await.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fs-14 text-muted">Uploaded: 12 March 2023</span>
                                    <div class="actions">
                                        <button class="btn btn-sm btn-warning">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Material Card 2 -->
                    <div class="material-card row mb-4">
                        <div class="col-xl-6 col-xxl-5">
                            <img src="images/materials/doc-2.jpg" alt="Material Image" class="img-fluid rounded">
                        </div>
                        <div class="col-xl-6 col-xxl-7">
                            <div class="material-content">
                                <h4><a href="javascript:void(0);">Data Structures & Algorithms in Python</a>
                                </h4>
                                <p>A comprehensive overview of key data structures and algorithms used in
                                    Python programming.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fs-14 text-muted">Uploaded: 20 March 2023</span>
                                    <div class="actions">
                                        <button class="btn btn-sm btn-warning">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Material Card 3 -->
                    <div class="material-card row mb-4">
                        <div class="col-xl-6 col-xxl-5">
                            <img src="images/materials/doc-3.jpg" alt="Material Image" class="img-fluid rounded">
                        </div>
                        <div class="col-xl-6 col-xxl-7">
                            <div class="material-content">
                                <h4><a href="javascript:void(0);">Introduction to Machine Learning</a></h4>
                                <p>Introduction to key concepts such as supervised and unsupervised
                                    learning, and model evaluation.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fs-14 text-muted">Uploaded: 5 April 2023</span>
                                    <div class="actions">
                                        <button class="btn btn-sm btn-warning">Edit</button>
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Showing <span>1-3</span> of <span>50</span> materials</h6>
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link"><i
                                        class="fas fa-chevron-left"></i></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link"><i
                                        class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-xxl-5" style="margin-top: 8px;">
            <!-- Manage Materials Card -->
            <div class="card bg-danger" style=" border-radius: 15px;">
                <div class="card-body" style="color: white; padding: 20px;">
                    <h4 class="mb-4" style="font-size: 1.5rem; margin-bottom: 20px;">Manage Materials</h4>
                    <ul class="list-unstyled" style="padding-left: 0;">
                        <li class="mb-3 d-flex align-items-center" style="margin-bottom: 15px;">
                            <i class="fas fa-upload me-3 fs-5" style="font-size: 1.25rem; margin-right: 15px;"></i>
                            <a href="#" style="color: white; text-decoration: none; font-weight: bold;"
                                data-bs-toggle="modal" data-bs-target="#uploadModal">Upload New Material</a>
                        </li>
                        <li class="mb-3 d-flex align-items-center" style="margin-bottom: 15px;">
                            <i class="fas fa-edit me-3 fs-5" style="font-size: 1.25rem; margin-right: 15px;"></i>
                            <a href="#" style="color: white; text-decoration: none; font-weight: bold;"
                                data-bs-toggle="modal" data-bs-target="#editModal">Edit Existing
                                Materials</a>
                        </li>
                        <li class="mb-3 d-flex align-items-center" style="margin-bottom: 15px;">
                            <i class="fas fa-trash-alt me-3 fs-5" style="font-size: 1.25rem; margin-right: 15px;"></i>
                            <a href="#" style="color: white; text-decoration: none; font-weight: bold;"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">Delete Materials</a>
                        </li>
                        <li class="mb-3 d-flex align-items-center" style="margin-bottom: 15px;">
                            <i class="fas fa-file-download me-3 fs-5" style="font-size: 1.25rem; margin-right: 15px;"></i>
                            <a href="#" style="color: white; text-decoration: none; font-weight: bold;"
                                data-bs-toggle="modal" data-bs-target="#downloadModal">Download
                                Materials</a>
                        </li>
                        <li class="mb-3 d-flex align-items-center" style="margin-bottom: 15px;">
                            <i class="fas fa-eye me-3 fs-5" style="font-size: 1.25rem; margin-right: 15px;"></i>
                            <a href="#" style="color: white; text-decoration: none; font-weight: bold;"
                                data-bs-toggle="modal" data-bs-target="#viewModal">View All Materials</a>
                        </li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-secondary mt-3"
                        style="background-color: #6c757d; color: white; text-align: center; padding: 10px; border-radius: 30px; display: block; text-decoration: none;">Manage
                        Materials</a>
                </div>
            </div>
        </div>

        <!-- Modals -->

        <!-- Upload Material Modal -->
        <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="uploadModalLabel">Upload New Material</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="uploadForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="materialName" class="form-label">Material Name</label>
                                <input type="text" class="form-control" id="materialName" required>
                            </div>
                            <div class="mb-3">
                                <label for="materialFile" class="form-label">Upload File</label>
                                <input type="file" class="form-control" id="materialFile" name="materialFile"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Download Material Modal -->
        <div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="downloadModalLabel">Download Materials</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="downloadForm">
                            <div class="mb-3">
                                <label for="downloadMaterial" class="form-label">Select Material to
                                    Download</label>
                                <select class="form-control" id="downloadMaterial">
                                    <option value="material1.pdf">Material 1</option>
                                    <option value="material2.pdf">Material 2</option>
                                    <option value="material3.pdf">Material 3</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Download</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Material Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Material</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editForm">
                            <div class="mb-3">
                                <label for="editMaterial" class="form-label">Select Material to Edit</label>
                                <select class="form-control" id="editMaterial">
                                    <option value="material1.pdf">Material 1</option>
                                    <option value="material2.pdf">Material 2</option>
                                    <option value="material3.pdf">Material 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="newMaterialName" class="form-label">New Material Name</label>
                                <input type="text" class="form-control" id="newMaterialName" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Material Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Delete Material</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="deleteForm">
                            <div class="mb-3">
                                <label for="deleteMaterial" class="form-label">Select Material to
                                    Delete</label>
                                <select class="form-control" id="deleteMaterial">
                                    <option value="material1.pdf">Material 1</option>
                                    <option value="material2.pdf">Material 2</option>
                                    <option value="material3.pdf">Material 3</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- View Materials Modal -->
        <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewModalLabel">View All Materials</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul id="materialList">
                            <li>Material 1.pdf</li>
                            <li>Material 2.pdf</li>
                            <li>Material 3.pdf</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('scripts')
<script src="/Assets/vendor/global/global.min.js"></script>
<script src="/Assets/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="/Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="/Assets/js/custom.js"></script>
<script src="/Assets/js/dlabnav-init.js"></script>
<script src="/Assets/js/demo.js"></script>
<script src="/Assets/js/styleSwitcher.js"></script>
@endsection



