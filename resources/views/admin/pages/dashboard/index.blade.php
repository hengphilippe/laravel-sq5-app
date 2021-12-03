@extends('admin.layouts.master')
@section('contents')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>My</strong> Dashboard</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <a href="{{ route('admin.category') }}" class="dashboard-link">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Category</h5>
                                    </div>
    
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="grid"></i> 
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3 text-center">2</h1>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                            <a href="{{ route('admin.article') }}" class="dashboard-link">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Article</h5>
                                    </div>
    
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="file-text"></i> 
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3 text-center">2</h1>
                            </div>
                        </a>
                        </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                            <a href="" class="dashboard-link">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Setting</h5>
                                    </div>
    
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="settings"></i> 
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3 text-center">1</h1>
                            </div>
                        </a>
                        </div>
                </div>

            </div>

        </div>
    </main>
@endsection
