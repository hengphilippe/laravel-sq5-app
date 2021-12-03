@extends('admin.layouts.master')
@section('contents')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Category</strong></h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="#" class="btn btn-primary"><i class='bx bx-plus-medical'></i> Add New</a>
                    <a href="#" class="btn btn-secondary"><i class='bx bxs-trash-alt'></i> View Trash</a>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Category</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Ordering</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="height: 120px">
                                    <td>1</td>
                                    <td>About</td>
                                    <td>about</td>
                                    <td>2</td>
                                    <td>03-Dec-2021</td>
                                    <td>
                                        <input type="checkbox" data-id="" class="status-event form-check-input-switchery" checked data-fouc>
                                        {{-- @if($about->status == 1)
                                        <input type="checkbox" data-id="{{ $about->id }}" class="status-event form-check-input-switchery" checked data-fouc>
                                        @else
                                            <input type="checkbox" data-id="{{ $about->id }}" class="status-event form-check-input-switchery" data-fouc>
                                        @endif --}}
                                    </td>
                                    <td class="text-center">
                                        <div class="card-actions">
                                            <div class="dropdown position-relative" data-bs-display="sticky">
                                                <a data-bs-toggle="dropdown" data-bs-display="sticky"
                                                    aria-expanded="false" class="">
                                                    <i class='bx bx-dots-vertical'></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end"  aria-labelledby="dropdownMenuButton" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-20px, -87px, 0px);">
                                                    <a class="dropdown-item" href="#" data-bs-display="sticky"> <i class='bx bx-edit-alt' ></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-display="sticky"> <i class='bx bx-trash' ></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                     
                                    </td>
                                </tr>
                                
                                <tr style="height: 120px">
                                    <td>2</td>
                                    <td>Contact</td>
                                    <td>contact</td>
                                    <td>3</td>
                                    <td>03-Dec-2021</td>
                                    <td>
                                        <input type="checkbox" data-id="" class="status-event form-check-input-switchery" checked data-fouc>
                                        {{-- @if($about->status == 1)
                                        <input type="checkbox" data-id="{{ $about->id }}" class="status-event form-check-input-switchery" checked data-fouc>
                                        @else
                                            <input type="checkbox" data-id="{{ $about->id }}" class="status-event form-check-input-switchery" data-fouc>
                                        @endif --}}
                                    </td>
                                    <td class="text-center">
                                        <div class="card-actions">
                                            <div class="dropdown position-relative" data-bs-display="sticky">
                                                <a data-bs-toggle="dropdown" data-bs-display="sticky"
                                                    aria-expanded="false" class="">
                                                    <i class='bx bx-dots-vertical'></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end"  aria-labelledby="dropdownMenuButton" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-20px, -87px, 0px);">
                                                    <a class="dropdown-item" href="#" data-bs-display="sticky"> <i class='bx bx-edit-alt' ></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-bs-display="sticky"> <i class='bx bx-trash' ></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                     
                                    </td>
                                </tr>
                                

                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

        </div>
    </main>
@endsection
