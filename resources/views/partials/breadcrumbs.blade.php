@unless ($breadcrumbs->isEmpty())
    <!-- Start Breadcrumb -->
    <nav aria-label="breadcrumb">
        <h1 class="h3">{{ ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Fallback Title' }}</h1>
        <ol class="breadcrumb bg-transparent small p-0">
            @foreach ($breadcrumbs as $breadcrumb)

                @if ($breadcrumb->url && !$loop->last)
                    <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb->title }}</li>
                @endif

            @endforeach
        </ol>
    </nav>
    <!-- End Breadcrumb -->
@endunless