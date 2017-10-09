@extends('layout.master')

@include('partials.language')
@include('partials.menu')

@section('content')
    <partial-header>
        <a href="{{ route('home') }}" class="logo">
            <img src="/img/logo-dark.svg" alt="logo" />
        </a>

        <div class="search">
            <ui-text view="flat" placeholder="@lang('nav.search')"></ui-text>
        </div>

        @yield('menu')

        <template slot="lang">
            @yield('lang')
        </template>
    </partial-header>

    <page-docs>
        <template slot="nav">
            {!! $nav !!}
        </template>
        <template slot="content">
            {!! $content !!}
        </template>
    </page-docs>
@stop
