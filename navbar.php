<div class="header-top">
    <div class="navbar">
        <div class="pure-menu pure-menu-horizontal pure-menu-dark x-menu">
            <span class="pure-menu-heading pure-menu-link x-link md-only-ib" onclick="toggleMenu('x-sidebar')"><i class="fa fa-bars"></i></span>
            <ul class="pure-menu-list">
                <li class="pure-menu-item hide-on-mobile"><a href="#" class="pure-menu-link"><!-- <i class="fa fa-fw fa-home"></i> --> Start</a></li>
                <li class="pure-menu-item hide-on-mobile"><a href="#" class="pure-menu-link"><!-- <i class="fa fa-fw fa-puzzle-piece"></i> --> Leistungsspektrum</a></li>
                <li class="pure-menu-item hide-on-mobile"><a href="#" class="pure-menu-link"><!-- <i class="fa fa-fw fa-book"></i> --> Historie</a></li>
                <li class="pure-menu-item hide-on-mobile"><a href="#" class="pure-menu-link"><!-- <i class="fa fa-fw fa-users"></i> --> Kunden</a></li>
                <li class="pure-menu-item hide-on-mobile"><a href="#" class="pure-menu-link"><!-- <i class="fa fa-fw fa-envelope-o"></i> --> Kontakt</a></li>
            </ul>
        </div>
    </div>

    <div class="header-logo">
        <div class="l-box">
            <img src="assets/img/xrlabs.png" class="header-img">
        </div>
    </div>

    <div class="header-title">
        <div class="l-box">
            <span>XRLABS</span>
        </div>
    </div>

</div>

<div id="x-sidebar">
        <div class="x-sidebar-title">
            <span class="x-sidebar-title-icon" onclick="toggleMenu('x-sidebar')"><i class="fa fa-bars"></i></span>
            <span class="x-sidebar-title-text">Navigation</span>
        </div>

        <div class="x-sidebar-cell" onclick="alert('Alert called')">
            <span class="x-sidebar-cell-icon"><i class="fa fa-home"></i></span>
            <span class="x-sidebar-cell-text">Start</span>
        </div>

        <div class="x-sidebar-cell" onclick="alert('This is another menu item')">
            <span class="x-sidebar-cell-icon"><i class="fa fa-search"></i></span>
            <span class="x-sidebar-cell-text">Leistungsspektrum</span>
        </div>

        <div class="x-sidebar-cell" onclick="confirm('Destroy all Humans?')">
            <span class="x-sidebar-cell-icon"><i class="fa fa-search"></i></span>
            <span class="x-sidebar-cell-text">Historie</span>
        </div>

        <div class="x-sidebar-cell" onclick="confirm('Destroy all Humans?')">
            <span class="x-sidebar-cell-icon"><i class="fa fa-search"></i></span>
            <span class="x-sidebar-cell-text">Kunden</span>
        </div>

        <div class="x-sidebar-cell" onclick="confirm('Destroy all Humans?')">
            <span class="x-sidebar-cell-icon"><i class="fa fa-search"></i></span>
            <span class="x-sidebar-cell-text">Kontakt</span>
        </div>
</div>