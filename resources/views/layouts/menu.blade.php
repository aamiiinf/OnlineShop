
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
    <a href="{{ route('reports') }}"
        class="nav-link mr-1 {{ Request::is('*reports*') ? 'active' : '' }}">
        @if(app()->getLocale()=='fa')
        <i class="fas fa-chart-bar" style="font-size:19px"></i>
        <p class="mx-2">گزارشات</p>
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
