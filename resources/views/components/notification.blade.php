<!-- Notification -->
<a class="list-group-item list-group-item-action" href="{{ url($url) }}">
    <div class="media align-items-center">
        <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
            <i class="lab la-facebook-f"></i>
        </div>

        <div class="media-body">
            <div class="d-md-flex align-items-center">
                <h4 class="mb-1">{{ $title }}</h4>
                <small class="text-muted ml-md-auto">@date($date)</small>
            </div>
            <p class="text-truncate mb-0" style="max-width: 250px;">
                {!! $message !!}
            </p>
        </div>
    </div>
</a>
<!-- End Notification -->