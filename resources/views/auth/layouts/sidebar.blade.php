<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3 @if(app()->getLocale()=='en') ml-auto @endif"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{__('admin_panel')}}</span>
    </a>

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="@if(app()->getLocale()=='fa') margin-right: 18px @endif">
            <img src="{{ asset(Auth::user()->image) }}" class="img-circle elevation-2" alt="{{ config('app.name') }}">
        </div>
        <div class="info">
            <a href="{{ route('users.show', [Auth::user()->id]) }}" class="brand-text d-block mt-1" style="color: rgba(255, 255, 255, 0.7);">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <div class="sidebar" style="direction: ltr">
        <nav class="mt-2" style="direction: rtl">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
