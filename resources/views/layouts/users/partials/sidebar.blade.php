            <div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse">
                <ul class="nav nav-list">
                    <li class="hover">
                        <a href="#">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="hover">
                        <a href="{{ url('/user/listing') }}">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Business </span>
                        </a>

                        <b class="arrow"></b>
                    </li>                    

                    <li class="hover">
                    @if(count(Auth::user()->listings) > 1)
                         <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Employee </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu can-scroll ace-scroll scroll-disabled" style="">
                        @foreach(Auth::user()->listings as $listing)
                            <li class="hover">
                                <a href="{{ route('business.employee', ['business' => $listing->id ]) }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    {{ $listing->name }}
                                </a>
                                <b class="arrow"></b>
                            </li>
                        @endforeach    

                        </ul>
                        <div class="scroll-track scroll-detached no-track scroll-thin scroll-margin scroll-visible" style="display: none; top: 69px; left: 183px;"><div class="scroll-bar" style="top: 0px;"></div></div>
                    @else
                        <a href="{{ route('user.employee.index') }}"\>
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">
                               Employee
                            </span>                            
                        </a>                     
                    @endif    
                    </li>
                    <li class="hover">
                    @if(count(Auth::user()->listings) > 1)
                         <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Product </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu can-scroll ace-scroll scroll-disabled" style="">
                        @foreach(Auth::user()->listings as $listing)
                            <li class="hover">
                                <a href="{{ route('business.product', ['business' => $listing->id ]) }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    {{ $listing->name }}
                                </a>
                                <b class="arrow"></b>
                            </li>
                        @endforeach    

                        </ul>
                        <div class="scroll-track scroll-detached no-track scroll-thin scroll-margin scroll-visible" style="display: none; top: 69px; left: 183px;"><div class="scroll-bar" style="top: 0px;"></div></div>
                    @else
                        <a href="{{ route('user.product.index') }}"\>
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">
                               Product
                            </span>                            
                        </a>                     
                    @endif    
                    </li>             
         

                    <li class="hover">
                    @if(count(Auth::user()->listings) > 1)
                         <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text"> Gallery </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>
                        <b class="arrow"></b>
                        <ul class="submenu can-scroll ace-scroll scroll-disabled" style="">
                        @foreach(Auth::user()->listings as $listing)
                            <li class="hover">
                                <a href="{{ route('business.gallery', ['business' => $listing->id ]) }}">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    {{ $listing->name }}
                                </a>
                                <b class="arrow"></b>
                            </li>
                        @endforeach    

                        </ul>
                        <div class="scroll-track scroll-detached no-track scroll-thin scroll-margin scroll-visible" style="display: none; top: 69px; left: 183px;"><div class="scroll-bar" style="top: 0px;"></div></div>
                    @else
                        <a href="{{ route('user.gallery.index') }}"\>
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">
                               Gallery
                            </span>                            
                        </a>                     
                    @endif    
                    </li>
                    <li class="hover">
                        <a href="{{ route('user.review.index') }}">
                            <i class="menu-icon fa fa-picture-o"></i>
                            <span class="menu-text"> Review </span>
                        </a>

                        <b class="arrow"></b>
                    </li>                    

                </ul><!-- /.nav-list -->

                <script type="text/javascript">
                    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                </script>
            </div>