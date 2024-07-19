<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li class="{{ request()->is('admin/dashboard') ? 'active-nav' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="fas fa-home"></i><span class="badge badge-info badge-pill float-right"></span> <span>
                            Dashboard </span>
                    </a>
                </li>
                <li class=" {{ request()->is('admin/blog*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-list"></i><span> CMS
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/cms/pages/home/edit') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.pages.edit', ['slug' => 'home']) }}">Home</a></li>
                        <li class="{{ request()->is('admin/cms/pages/about/edit') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.pages.edit', ['slug' => 'about']) }}">About</a></li>
                        <li class="{{ request()->is('admin/cms/pages/contact/edit') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.pages.edit', ['slug' => 'contact']) }}">Contact</a></li>
                        <li class="{{ request()->is('admin/cms/pages/my-work/edit') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.pages.edit', ['slug' => 'my-work']) }}">My Work</a></li>
                        <li class="{{ request()->is('admin/cms/pages/what-i-do/edit') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.pages.edit', ['slug' => 'what-i-do']) }}">What I DO</a></li>
                    </ul>

                </li>


                <li class=" {{ request()->is('admin/setting*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect select-btn"><i class="fas fa-cog"></i><span>
                            Settings <span class="float-right menu-arrow lol"><i
                                    class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/settings/edit/1') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.settings.edit', ['setting' => 1]) }}">Edit Web Settings</a></li>
                    </ul>
                </li>


            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
