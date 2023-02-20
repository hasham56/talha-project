<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row">
                    <div class="col-xl-12 col-12 dashboard-users">
                        <div class="row ">
                            <!-- Statistics Cards Starts -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-sm-3 col-12 dashboard-users-danger">
                                        <a href="{{url('/')}}/freelancers/list">
                                            <div class="text-center card">
                                                <div class="py-1 card-body">
                                                    <div class="mx-auto badge-circle badge-circle-lg badge-circle-light-danger mb-50">
                                                        <i class="bx bxs-info-circle font-medium-5"></i>
                                                    </div>
                                                    <div class="text-muted line-ellipsis">All Freelancers</div>
                                                    <h3 class="mb-0">{{$totalFreelancers}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-12 dashboard-users-danger">
                                        <a href="{{url('/')}}/freelancers/pending-approval">
                                            <div class="text-center card">
                                                <div class="py-1 card-body">
                                                    <div class="mx-auto badge-circle badge-circle-lg badge-circle-light-danger mb-50">
                                                        <i class="bx bxs-info-circle font-medium-5"></i>
                                                    </div>
                                                    <div class="text-muted line-ellipsis">Pending Freelancers</div>
                                                    <h3 class="mb-0">{{$totalPendingFreelancers}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-12 dashboard-users-danger">
                                        <a href="{{url('/')}}/hirers/list">
                                            <div class="text-center card">
                                                <div class="py-1 card-body">
                                                    <div class="mx-auto badge-circle badge-circle-lg badge-circle-light-danger mb-50">
                                                        <i class="bx bxs-info-circle font-medium-5"></i>
                                                    </div>
                                                    <div class="text-muted line-ellipsis">Hirers</div>
                                                    <h3 class="mb-0">{{$totalHirers}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-12 dashboard-users-danger">
                                        <a href="{{url('/')}}/posts/list">
                                            <div class="text-center card">
                                                <div class="py-1 card-body">
                                                    <div class="mx-auto badge-circle badge-circle-lg badge-circle-light-danger mb-50">
                                                        <i class="bx bxs-info-circle font-medium-5"></i>
                                                    </div>
                                                    <div class="text-muted line-ellipsis">Posts</div>
                                                    <h3 class="mb-0">{{$totalPosts}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-12 dashboard-users-danger">
                                        <a href="{{url('/')}}/posts/flagged">
                                        
										<div class="text-center card">
                                                <div class="py-1 card-body">
                                                    <div class="mx-auto badge-circle badge-circle-lg badge-circle-light-danger mb-50">
                                                        <i class="bx bxs-info-circle font-medium-5"></i>
                                                    </div>
                                                    <div class="text-muted line-ellipsis">Open Reports</div>
                                                    <h3 class="mb-0">{{$totalReports}}</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Revenue Growth Chart Starts -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dashboard Ecommerce ends -->

        </div>
    </div>
</div>
