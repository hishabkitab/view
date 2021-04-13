<a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker"
   href="#!">
    <i class="las la-search la-lg"></i>
</a>

<div id="headerSearch" class="u-header-search-form">

    {!! Form::open() !!}
    <div class="input-group">
        <button class="btn-link input-group-prepend u-header-search__btn" type="submit">
            <i class="las la-search la-lg"></i>
        </button>
        {!!  Form::search('search', null,[
    'class' => 'form-control u-header-search__field',
    'placeholder' => 'Type to search…', 'required' => 'required'
    ]) !!}
    </div>
    {!! Form::close() !!}
</div>