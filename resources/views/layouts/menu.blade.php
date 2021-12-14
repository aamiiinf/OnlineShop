
<li class="nav-item has-treeview">
    <a href="{{ route('categories.index') }}"
        class="nav-link mr-1 {{ Request::is('*categories*') ? 'active' : '' }}">
        @if(app()->getLocale()=='fa')
        <i class="fa fa-list-alt" aria-hidden="true"></i>
        <p class="mx-2">دسته بندی ها</p>
        @endif
        @if(app()->getLocale()=='en')
        <p class="mx-2">Categories</p>
        <i class="fa fa-list-alt" aria-hidden="true"></i>
        @endif
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('posts.index') }}"
        class="nav-link mr-1 {{ Request::is('*posts*') ? 'active' : '' }}">
        @if(app()->getLocale()=='fa')
        <i class="fas fa-sticky-note"></i>
        <p class="mx-2">محصولات</p>
        @endif
        @if(app()->getLocale()=='en')
        <p class="mx-2">Products</p>
        <i class="fas fa-sticky-note" style="font-size:19px"></i>
        @endif
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('management') }}"
        class="nav-link mr-1 {{ Request::is('*management*') ? 'active' : '' }}">
        @if(app()->getLocale()=='fa')
        <img width="19" height="19" src="data:image/png;base64,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">
        <p class="mx-1">مدیریت</p>
        @endif
        @if(app()->getLocale()=='en')
        <p class="mx-2">Mangment</p>
        <img width="19" height="19" src="data:image/png;base64,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">
        @endif
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('reports') }}"
        class="nav-link mr-1 {{ Request::is('*reports*') ? 'active' : '' }}">
        @if(app()->getLocale()=='fa')
        <i class="fas fa-chart-bar" style="font-size:19px"></i>
        <p class="mx-1">گزارشات</p>
        @endif
        @if(app()->getLocale()=='en')
        <p class="mx-2">Reports</p>
        <i class="fas fa-chart-bar" style="font-size:19px"></i>
        @endif
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}"
        class="nav-link {{ Request::is('*users*') ? 'active' : '' }}">
        @if(app()->getLocale()=='fa')
        <i class="fas fa-users"></i>
        <p class="mx-2">کاربران</p>
        @endif
        @if(app()->getLocale()=='en')
        <p class="mx-2">Users</p>
        <i class="fas fa-users" style="font-size:14px"></i>
        @endif
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('comments.index') }}"
       class="nav-link {{ Request::is('*comments*') ? 'active' : '' }}">
        @if(app()->getLocale()=='fa')
        <i class="fa fa-comment" aria-hidden="true"></i>
        <p class="mx-2">کامنت ها</p>
        @endif
        @if(app()->getLocale()=='en')
        <p class="mx-2">Comments</p>
        <i class="fa fa-comment" aria-hidden="true" style="font-size:17px"></i>
        @endif
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('calendar') }}"
        class="nav-link {{ Request::is('*calendar*') ? 'active' : '' }}">
        @if(app()->getLocale()=='fa')
        <i class="fa fa-calendar" style="font-size: 18px;margin-right: 2px;"></i>
        <p class="mx-2">تقویم</p>
        @endif
        @if(app()->getLocale()=='en')
        <p class="mx-2">Clender</p>
        <i class="fa fa-calendar" style="font-size: 18px;margin-right: 2px;"></i>
        @endif
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('setting') }}"
        class="nav-link {{ Request::is('*setting*') ? 'active' : '' }}">
        @if(app()->getLocale()=='fa')
        <i class="fa fa-cog" style="font-size: 19px" aria-hidden="true"></i>
        <p class="mx-2">تنظیمات</p>
        @endif
        @if(app()->getLocale()=='en')
        <p class="mx-2">Setting</p>
        <i class="fa fa-cog" style="font-size: 19px" aria-hidden="true"></i>
        @endif
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tags.index') }}"
       class="nav-link {{ Request::is('*tags*') ? 'active' : '' }}">
        @if(app()->getLocale()=='fa')
        <i class="fa fa-tag text-light" style="font-size: 18px;" aria-hidden="true"></i>
        <p class="mx-2">برچسب ها</p>
        @endif
        @if(app()->getLocale()=='en')
        <p class="mx-2">Tags</p>
        <i class="fa fa-tag text-light" style="font-size: 18px;" aria-hidden="true"></i>
        @endif
    </a>
</li>
