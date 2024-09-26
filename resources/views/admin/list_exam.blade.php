@extends('layout.app')
@section('title','list_exam')
@section('content')
				
				
				


                <div class="row">
                 
                   
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Exams</h4>
								<a href="/Exams_form" style="margin-left: auto; position: relative;">
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
                                                <th>Program</th>
                                                <th>Academic year</th>
                                                <th>Date</th>
                                                <th>Duration</th>
                                                
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                                <td>
                                                    <span class="badge light badge-success">
                                                        <i class="fa fa-circle text-success me-1"></i>
                                                        Active
                                                    </span>
                                                </td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>												
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