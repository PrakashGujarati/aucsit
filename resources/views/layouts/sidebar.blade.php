<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{asset('assets/assets/images/users/profile.png')}}" alt="user" />
                        
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    
                    <div class="profile-text">
                        <h5>{{Auth::user()->name}}</h5>
                        
                       
                    </div>
                </div>
                
                <nav class="sidebar-nav">   
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="/dashboard" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Patient</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/patient" class="active">Patient </a></li>
                                <li><a href="{{route('table')}}" class="@if(\Request::route()->getName() == 'add.case' || \Request::route()->getName() == 'edit.case' || \Request::route()->getName() == 'table') active @endif">Case </a></li>
                            </ul>
                        </li>
                
                    </ul>
                </nav>
                
            </div>
            
        </aside>