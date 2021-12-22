@extends('layouts.admin')

@section('content')

<div class="page-wrapper">
    <!--page-content-wrapper-->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div>
                                    <p class="mb-0 font-weight-bold">Total Active Post</p>
                                    <h2 class="mb-0"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div>
                                    <p class="mb-0 font-weight-bold">Total Users</p>
                                    <h2 class="mb-0"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div>
                                    <p class="mb-0 font-weight-bold">Net Income</p>
                                    <h2 class="mb-0"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card radius-15">
                        <div class="card-header border-bottom-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h5 class="mb-lg-0">Recent Post's</h5>
                                </div>
                                <div class="ml-lg-auto mb-2 mb-lg-0">
                                    <div class="btn-group-round">
                                        <a href="" class="btn btn-md btn-warning">View All </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>

            </div>
            <!--end row-->

        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@endsection
