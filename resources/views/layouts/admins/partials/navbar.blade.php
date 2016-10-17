<div class="navbar navbar-default navbar-fixed navbar-fixed-top" id=
"navbar">
    <div class="navbar-container" id="navbar-container">
        <button class="navbar-toggle menu-toggler pull-left fixed"
        data-target="#sidebar" id="menu-toggler" type="button"><span class="sr-only">Toggle sidebar</span>
        <span class="icon-bar"></span> <span class="icon-bar"></span>
        <span class="icon-bar"></span></button>
        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="{{ route('dashboard') }}"><small><i class=
            "fa fa-smile-o"></i> Niramoy Business Directory Admin Panel</small></a>    
        </div>
        @if(Auth::guard('admins'))
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">

            
<!--            <li class="grey">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                    href="#"><i class="ace-icon fa fa-tasks"></i>
                    <span class="badge badge-grey">4</span></a>
                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                    <li class="dropdown-header">
                            <i class="ace-icon fa fa-check"></i> 4 Tasks to complete
                        </li>
                        <li class="dropdown-content ace-scroll" style=
                        "position: relative;">
                            <div class="scroll-track" style=
                            "display: none;">
                                <div class="scroll-bar"></div>
                            </div>
                            <div class="scroll-content" style=
                            "max-height: 200px;">
                                <ul class=
                                "dropdown-menu dropdown-navbar">
                                    <li>
                                        <a href="#">
                                        <div class="clearfix">
                                            <span class=
                                            "pull-left">Software
                                            Update</span> <span class=
                                            "pull-right">65%</span>
                                        </div>
                                        <div class=
                                        "progress progress-mini">
                                            <div class="progress-bar"
                                            style="width:65%"></div>
                                        </div></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <div class="clearfix">
                                            <span class=
                                            "pull-left">Hardware
                                            Upgrade</span> <span class=
                                            "pull-right">35%</span>
                                        </div>
                                        <div class=
                                        "progress progress-mini">
                                            <div class=
                                            "progress-bar progress-bar-danger"
                                            style="width:35%"></div>
                                        </div></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <div class="clearfix">
                                            <span class=
                                            "pull-left">Unit
                                            Testing</span> <span class=
                                            "pull-right">15%</span>
                                        </div>
                                        <div class=
                                        "progress progress-mini">
                                            <div class=
                                            "progress-bar progress-bar-warning"
                                            style="width:15%"></div>
                                        </div></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug
                                            Fixes</span> <span class=
                                            "pull-right">90%</span>
                                        </div>
                                        <div class=
                                        "progress progress-mini progress-striped active">
                                        <div class=
                                        "progress-bar progress-bar-success"
                                            style="width:90%"></div>
                                        </div></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">See tasks with details
                            <i class="ace-icon fa fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </li>
                <li class="purple">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                    href="#"><i class=
                    "ace-icon fa fa-bell icon-animated-bell"></i>
                    <span class="badge badge-important">8</span></a>
                    <ul class=
                    "dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                    <li class="dropdown-header">
                            <i class=
                            "ace-icon fa fa-exclamation-triangle"></i>
                            8 Notifications
                        </li>
                        <li class="dropdown-content ace-scroll" style=
                        "position: relative;">
                            <div class="scroll-track" style=
                            "display: none;">
                                <div class="scroll-bar"></div>
                            </div>
                            <div class="scroll-content" style=
                            "max-height: 200px;">
                                <ul class=
                                "dropdown-menu dropdown-navbar navbar-pink">
                                <li>
                                        <a href="#">
                                        <div class="clearfix">
                                            <span class=
                                            "pull-left"><i class=
                                            "btn btn-xs no-hover btn-pink fa fa-comment">
                                            </i> New Comments</span>
                                            <span class=
                                            "pull-right badge badge-info">
                                            +12</span>
                                        </div></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class=
                                        "btn btn-xs btn-primary fa fa-user">
                                        </i> Bob just signed up as an
                                        editor ...</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <div class="clearfix">
                                            <span class=
                                            "pull-left"><i class=
                                            "btn btn-xs no-hover btn-success fa fa-shopping-cart">
                                            </i> New Orders</span>
                                            <span class=
                                            "pull-right badge badge-success">
                                            +8</span>
                                        </div></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <div class="clearfix">
                                            <span class=
                                            "pull-left"><i class=
                                            "btn btn-xs no-hover btn-info fa fa-twitter">
                                            </i> Followers</span>
                                            <span class=
                                            "pull-right badge badge-info">
                                            +11</span>
                                        </div></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">See all notifications <i class=
                            "ace-icon fa fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </li>
                <li class="green">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                    href="#"><i class=
                    "ace-icon fa fa-envelope icon-animated-vertical"></i>
                    <span class="badge badge-success">5</span></a>
                    <ul class=
                    "dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                    <li class="dropdown-header">
                            <i class="ace-icon fa fa-envelope-o"></i> 5
                            Messages
                        </li>
                        <li class="dropdown-content ace-scroll" style=
                        "position: relative;">
                            <div class="scroll-track" style=
                            "display: none;">
                                <div class="scroll-bar"></div>
                            </div>
                            <div class="scroll-content" style=
                            "max-height: 200px;">
                                <ul class=
                                "dropdown-menu dropdown-navbar">
                                    <li>
                                        <a class="clearfix" href=
                                        "#"><img alt="Alex's Avatar"
                                        class="msg-photo" src=
                                        "/assets/avatars/avatar.png">
                                        <span class=
                                        "msg-body"><span class=
                                        "msg-title"><span class=
                                        "blue">Alex:</span> Ciao sociis
                                        natoque penatibus et auctor
                                        ...</span> <span class=
                                        "msg-time"><i class=
                                        "ace-icon fa fa-clock-o"></i>
                                        <span>a moment
                                        ago</span></span></span></a>
                                    </li>
                                    <li>
                                        <a class="clearfix" href=
                                        "#"><img alt="Susan's Avatar"
                                        class="msg-photo" src=
                                        "/assets/avatars/avatar3.png">
                                        <span class=
                                        "msg-body"><span class=
                                        "msg-title"><span class=
                                        "blue">Susan:</span> Vestibulum
                                        id ligula porta felis euismod
                                        ...</span> <span class=
                                        "msg-time"><i class=
                                        "ace-icon fa fa-clock-o"></i>
                                        <span>20 minutes
                                        ago</span></span></span></a>
                                    </li>
                                    <li>
                                        <a class="clearfix" href=
                                        "#"><img alt="Bob's Avatar"
                                        class="msg-photo" src=
                                        "/assets/avatars/avatar4.png">
                                        <span class=
                                        "msg-body"><span class=
                                        "msg-title"><span class=
                                        "blue">Bob:</span> Nullam quis
                                        risus eget urna mollis ornare
                                        ...</span> <span class=
                                        "msg-time"><i class=
                                        "ace-icon fa fa-clock-o"></i>
                                        <span>3:15
                                        pm</span></span></span></a>
                                    </li>
                                    <li>
                                        <a class="clearfix" href=
                                        "#"><img alt="Kate's Avatar"
                                        class="msg-photo" src=
                                        "/assets/avatars/avatar2.png">
                                        <span class=
                                        "msg-body"><span class=
                                        "msg-title"><span class=
                                        "blue">Kate:</span> Ciao sociis
                                        natoque eget urna mollis ornare
                                        ...</span> <span class=
                                        "msg-time"><i class=
                                        "ace-icon fa fa-clock-o"></i>
                                        <span>1:33
                                        pm</span></span></span></a>
                                    </li>
                                    <li>
                                        <a class="clearfix" href=
                                        "#"><img alt="Fred's Avatar"
                                        class="msg-photo" src=
                                        "/assets/avatars/avatar5.png">
                                        <span class=
                                        "msg-body"><span class=
                                        "msg-title"><span class=
                                        "blue">Fred:</span> Vestibulum
                                        id penatibus et auctor
                                        ...</span> <span class=
                                        "msg-time"><i class=
                                        "ace-icon fa fa-clock-o"></i>
                                        <span>10:09
                                        am</span></span></span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown-footer">
                            <a href="inbox.html">See all messages
                            <i class=
                            "ace-icon fa fa-arrow-right"></i></a>
                        </li>
                    </ul>
                </li> 
-->              
                <li class="light-blue">
                    <a class="dropdown-toggle" data-toggle="dropdown"
                    href="#"><img alt="Jason's Photo" class="nav-user-photo" src="/assets/avatars/icon.png">
                    <span class="user-info"><small>Welcome,</small>
                    {{ auth()->guard('admins')->user()->username }}</span> <i class=
                    "ace-icon fa fa-caret-down"></i></a>
                    <ul class=
                    "user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                    <li>
                            <a href="#"><i class=
                            "ace-icon fa fa-cog"></i> Settings</a>
                        </li>
                        <li>
                            <a href="#"><i class=
                            "ace-icon fa fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/control/logout') }}"><i class=
                            "ace-icon fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        @endif   
    </div><!-- /.navbar-container -->
</div>