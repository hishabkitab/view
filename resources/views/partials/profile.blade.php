<div class="dropdown ml-2">
    <a class="link-muted d-flex align-items-center" href="#!" role="button" id="dropdownMenuLink"
       aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
        <img class="u-avatar--xs img-fluid rounded-circle mr-2" src="{{ asset('/img/avatars/img1.jpg') }}"
             alt="User Profile">
        <span class="text-dark d-none d-sm-inline-block">
							Bruce Goodman <small class="fa fa-angle-down text-muted ml-1"></small>
						</span>
    </a>

    <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink"
         style="width: 260px;">
        <div class="card">
            <div class="card-header py-3">
                <!-- Storage -->
                <div class="d-flex align-items-center mb-3">
                    <span class="h6 text-muted text-uppercase mb-0">Points</span>

                    <div class="ml-auto text-muted">
                        <strong class="text-dark">60</strong> / 100 <span class="text-secondary font-weight-bold">(hkp)</span>
                    </div>
                </div>

                <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <!-- End Storage -->
            </div>

            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <li class="mb-4">
                        <a class="d-flex align-items-center link-dark" href="#!">
                            <span class="h3 mb-0"><i class="la-lg lar la-user-circle text-muted mr-2"></i></span>
                            View Profile
                        </a>
                    </li>
                    <li class="mb-4">
                        <a class="d-flex align-items-center link-dark" href="#!">
                            <span class="h3 mb-0"><i class="la-lg lar la-list-alt text-muted mr-2"></i></span>
                            Settings
                        </a>
                    </li>
                    <li class="mb-4">
                        <a class="d-flex align-items-center link-dark" href="#!">
                            <span class="h3 mb-0"><i class="la-lg lar la-laugh-wink text-muted mr-2"></i></span>
                            Invite your friends
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-items-center link-dark" href="#logoutModal" data-toggle="modal">
                            <span class="h3 mb-0"><i class="la-lg lar la-share-square text-muted mr-2"></i></span>
                            Sign Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('view::partials.logout')