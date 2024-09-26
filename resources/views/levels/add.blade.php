

@extends('layout.app')

@section('title', 'Add Levels') 

@section('content')
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10 col-md-10">
                        <div class="card shadow-sm" style="padding: 40px; border-radius: 8px; width: 100%;">
                            <div class="card-header text-center">
                                <h4 class="card-title" style="font-size: 1.75rem; font-weight: bold;">Level Management
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('levels.store')}}" method="POST">
                                        {{-- @method('POST') --}}
                                        @csrf
                                        <div class="mb-4">
                                            <input type="text" class="form-control input-default"
                                               name="name" placeholder="Enter level name">
                                        </div>
                                         <div class="mb-4">
                                            <textarea class="form-control input-default"
                                               name="description" placeholder="Enter level description"></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-lg"
                                                style="padding: 10px 20px; font-size: 1.1rem;">Add level</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection





   