@if(!empty($skin))
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/skins/' . $skin . '.css') }}">
@else
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/skin/light.css') }}">
@endif
