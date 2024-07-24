<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu pt-5">
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
                        <li class="{{ request()->is('admin/cms/pages/graduate/edit') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.pages.edit', ['slug' => 'graduate']) }}">Graduates</a></li>
                        <li class="{{ request()->is('admin/cms/pages/faq/edit') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.pages.edit', ['slug' => 'faq']) }}">Faq</a></li>
                        <li class="{{ request()->is('admin/cms/pages/blog/edit') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.pages.edit', ['slug' => 'blog']) }}">Blog And Article</a></li>
                    </ul>

                </li>
               {{-- Faqs Route --}}
                <li class=" {{(request()->is('admin/faqs*')) ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-list"></i><span> Faqs
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ (request()->is('admin/faqs')) ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.faqs.index') }}">All Faqs</a></li>
                        <li class="{{ (request()->is('admin/faq/create')) ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.faq.create') }}">Add Faq</a></li>

                    </ul>

                </li>
{{-- Gallery Routes --}}
<li class=" {{(request()->is('admin/graduates*')) ? '' : 'select-menu' }}">
        <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                class="fas fa-image"></i><span> Graduate Galleries
                <span class="float-right menu-arrow select-btn "><i
                        class="mdi mdi-chevron-right"></i></span></span></a>
        <ul class="submenu">
            <li class="{{ (request()->is('admin/graduates')) ? 'active-nav' : '' }}"><a
                    href="{{ route('admin.graduates.index') }}">All Graduate Galleries</a></li>
            <li class="{{ (request()->is('admin/graduate/create')) ? 'active-nav' : '' }}"><a
                    href="{{ route('admin.graduate.create') }}">Add Graduate Gallerie</a></li>

        </ul>

    </li>
    <li class=" {{(request()->is('admin/trainings*')) ? '' : 'select-menu' }}">
        <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                class="fas fa-image"></i><span> Training Galleries
                <span class="float-right menu-arrow select-btn "><i
                        class="mdi mdi-chevron-right"></i></span></span></a>
        <ul class="submenu">
            <li class="{{ (request()->is('admin/trainings')) ? 'active-nav' : '' }}"><a
                    href="{{ route('admin.trainings.index') }}">All Training Galleries</a></li>
            <li class="{{ (request()->is('admin/training/create')) ? 'active-nav' : '' }}"><a
                    href="{{ route('admin.training.create') }}">Add Training Gallerie</a></li>

        </ul>

    </li>
    {{-- Setting Route --}}
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
