<div class="dropdown mr-4">
    <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false"
       data-toggle="dropdown">
				    <span class="h3">
			    		<i class="lar la-bell la-lg"></i>
				    </span>
        <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-info"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink">
        <div class="card shadow">
            <div class="card-header d-flex align-items-center py-3 bg-light">
                <h2 class="h4 card-header-title">Notifications</h2>
                <a class="ml-auto" href="#">Clear all</a>
            </div>

            <div class="card-body p-0 content">
                <div class="list-group list-group-flush">
                    @for($i=0; $i<25; $i++)
                        @include('view::components.notification',
[
    'url' => '#',
    'title' => 'Demo Notices',
    'message' => '<span class="text-primary">@htmlstream</span> just liked your post!',
    'date' => '2018-01-14'
])
                    @endfor
                </div>
            </div>

            <div class="card-footer py-3">
                <a class="btn btn-block btn-outline-primary" href="#">View all notifications</a>
            </div>
        </div>
    </div>
</div>
