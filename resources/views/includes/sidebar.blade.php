<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="/images/avatars/user-06.png" alt="profile image">
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">{{ Auth::user()->name }}</p>
                    <p class="designation">{{ Auth::user()->user_type == 'A' ? 'Admin' : 'User' }}</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/portal')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        @if(Auth::user()->user_type == 'U')
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Engineering</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('portal/engineering')}}">Files</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://trello.com/">Board</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('portal/billing')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Billing</span>
            </a>
        </li>
        @endIf

        @if(Auth::user()->user_type == 'A')
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Engineering</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('portal/engineering/all')}}">Files</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://trello.com/">Board</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('portal/billing/all')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Billing</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('portal/blog')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Blogs</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('portal/users')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Users</span>
            </a>
        </li>
        @endIf

        <li class="nav-item">
            <a class="nav-link" href="{{url('portal/ticket')}}">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Support Ticket</span>
            </a>
        </li>

    </ul>
</nav>
