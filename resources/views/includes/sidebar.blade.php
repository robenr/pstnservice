<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="/images/faces/face28.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
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
            <a class="nav-link" href="{{url('portal/engineering')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Engineering</span>
            </a>
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
            <a class="nav-link" href="{{url('portal/engineering/all')}}">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Engineering</span>
            </a>
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
