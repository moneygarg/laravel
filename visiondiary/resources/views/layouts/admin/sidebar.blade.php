<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Home</li> 
                <li> <a class="" href="{{ URL::to('users/profile') }}" aria-expanded="true"><i class="fa fa-user"></i>
                        <span class="hide-menu">Profile </span></a></li>
                <?php if(in_array(Auth::user()->type,array("developer"))){ ?>
                <li> <a class="" href="{{ URL::to('projectType') }}" aria-expanded="true"><i class="fa fa-tachometer"></i><span class="hide-menu">Project Types</span></a></li>
                <?php }?>
                <?php if(in_array(Auth::user()->type,array("developer","admin"))){ ?>
                <li> <a class="" href="{{ URL::to('users') }}" aria-expanded="true"><i class="fa fa-users"></i>
                    <span >Users</span></a></li>
                <?php }?>

                <li> <a class="has-arrow  " href="#" aria-expanded="true"><i class="fa fa-unlock"></i>
                <span class="hide-menu">Credentails <span class="label label-rouded label-primary pull-right">3</span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ URL::to('credentials/vision') }}">Vision App</a></li>
                        <li><a href="{{ URL::to('credentials/other') }}">Other App</a></li>
                        <li><a href="{{ URL::to('credentials/personnel') }}">Personnel App</a></li>
                    </ul>
                </li>

                <li> <a class="" href="{{ URL::to('redmines') }}" aria-expanded="true"><i class="fa fa-tasks"></i>
                    <span class="hide-menu">Redmines</span></a>

                </li>
                <li> <a class="" href="{{ URL::to('admin/officetrack') }}" aria-expanded="true"><i class="fa fa-tasks"></i>
                    <span class="hide-menu">Officetrack</span></a>

                </li>
                <li> <a class="" href="{{ URL::to('events') }}" aria-expanded="true"><i class="fa fa-image"></i>
                    <span class="hide-menu">Events</span></a>

                </li>

                <li class="nav-label">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>