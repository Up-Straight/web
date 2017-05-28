@component('components.components.headers.header2')
@endcomponent

    <div id="menu-bar">
        <div id="dashboard-logo">
            <img src="images/logo.png" width="151px" height="70px">
        </div>
        <ul>
            <li class="menu-heading">Main</li>
            <li class="selected"><span><img src="images/burn.png" width="auto" height="auto"></span>Activity</li>
            <li><i class="fa fa-fw fa-user"></i>Profiles</li>
            <li><i class="fa fa-fw fa-cogs"></i>Settings</li>
            <li class="menu-heading">Help</li>
            <li><i class="fa fa-fw fa-envelope"></i>Contact</li>
            <li><i class="fa fa-fw fa-info"></i>Tutorial</li>
            <li class="menu-heading">Account</li>
            <li><i class="fa fa-fw fa-cogs"></i>Settings</li>
            <li><i class="fa fa-fw fa-sign-out"></i>Logout</li>
        </ul>

        <div id="dashboard-user-box">
            <div id="user-logo-box">
                <div class="user-logo"></div>
            </div>
            <div id="user-text-box">
                <div class="user-name"><span>Prodaniuc Pavel</span></div>
                <div class="user-status">
                    <div class="online-box-container">
                        <div class="online-box"></div>
                    </div>
                    <div class="user-status-text">online</div>
                </div>
            </div>
        </div>
    </div>

    <div id="dashboard-content-box">
        @yield('content')
    </div>

</main>
</body>