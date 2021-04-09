

    <!-- Sidebar scroll-->

    <div class="scroll-sidebar">

        <!-- Sidebar navigation-->

        <nav class="sidebar-nav">

            <ul id="sidebarnav">

                <!-- User Profile-->

                <li>

                    <!-- User Profile-->

                    <div class="user-profile dropdown m-t-20">

                        <div class="user-pic">

                            <img src="{{asset('images/logo-white.png')}}" alt="users" class="rounded-circle img-fluid" />

                        </div>

                        <div class="user-content hide-menu m-t-10">

                            <h5 class="m-b-10 user-name font-medium">World Market Commodities</h5>

                            <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">

                                <a class="dropdown-item" href="javascript:void(0)">

                                    <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>

                                <a class="dropdown-item" href="javascript:void(0)">

                                    <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>

                                <a class="dropdown-item" href="javascript:void(0)">

                                    <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="javascript:void(0)">

                                    <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="javascript:void(0)">

                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>

                            </div>

                        </div>

                    </div>

                    <!-- End User Profile-->

                </li>



                <li class="sidebar-item">

                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('home')}}" aria-expanded="false">

                        <i class="sl-icon-home"></i>

                        <span class="hide-menu">{{__('Accueil')}}</span>

                    </a>

                </li>



                <li class="sidebar-item">

                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('sent.index')}}" aria-expanded="false">

                        <i class="sl-icon-list"></i>

                        <span class="hide-menu">{{__('Envoyés')}}</span>

                    </a>

                </li>



                <li class="sidebar-item">

                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('receved.index')}}" aria-expanded="false">

                        <i class="sl-icon-info"></i>

                        <span class="hide-menu">Reçus</span>

                    </a>

                </li>



                <li class="sidebar-item">

                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('visits.index')}}" aria-expanded="false">

                        <i class="sl-icon-globe"></i>

                        <span class="hide-menu">Visites</span>

                    </a>

                </li>



                {{-- <li class="sidebar-item">

                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="page4" aria-expanded="false">

                        <i class="sl-icon-plus"></i>

                        <span class="hide-menu">Page 4</span>

                    </a>

                </li> --}}



                

            </ul>

        </nav>

        <!-- End Sidebar navigation -->

    </div>

    <!-- End Sidebar scroll-->





