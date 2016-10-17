<div class="sidebar sidebar-fixed responsive compact" data-sidebar="true" data-sidebar-hover="true" data-sidebar-scroll="true" id="sidebar">
    <div class="nav-wrap-up pos-rel">
        <div class="nav-wrap">
            <ul class="nav nav-list" style="top: 0px; position: relative; transition-property: top; transition-duration: 0.15s;">
            <li class="hover">
                    <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-tachometer"></i> <span class="menu-text">Dashboard</span></a> <b class="arrow"></b>
                </li>
                <li class="hover">
                    <a href="{{ route('control.category.index') }}"><i class="menu-icon fa fa-list-alt"></i> <span class="menu-text">Category</span></a> <b class="arrow"></b>
                </li>
                <li class="hover">
                    <a href="#"><i class="menu-icon fa fa-briefcase"></i> <span class="menu-text">Business</span></a> <b class="arrow"></b>
                </li> 

                <li class="hover">
                    <a href="{{ route('control.plan.index') }}"><i class="menu-icon fa fa-picture-o"></i> <span class="menu-text">Plan</span></a> <b class="arrow"></b>
                </li>                               

            </ul>
        </div>
        <div class="ace-scroll nav-scroll scroll-disabled">
            <div class="scroll-track" style="display: none;">
                <div class="scroll-bar" style=
                "transition-property: top; transition-duration: 0.1s; top: 0px;">
                </div>
            </div>
            <div class="scroll-content">
                <div></div>
            </div>
        </div>
    </div><!-- /.nav-list -->
</div>