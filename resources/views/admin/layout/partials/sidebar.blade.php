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
                <li class=" {{ request()->is('admin/categories*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-layer-group"></i><span> Training Categories
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/categories') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.categories.index') }}">All Training Categories</a></li>
                        <li class="{{ request()->is('admin/category/create') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.category.create') }}">Add Training Category</a></li>

                    </ul>

                </li>

                <li class=" {{ request()->is('admin/price-categories*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-tags"></i><span> Subscription Categories
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/price-categories') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.priceCategories.index') }}">All Subscription Categories</a></li>
                        <li class="{{ request()->is('admin/price-category/create') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.priceCategory.create') }}">Add Subscription Category</a></li>

                    </ul>

                </li>
                <li class=" {{ request()->is('admin/prices*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-dollar-sign"></i><span> Subscriptions
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/prices') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.prices.index') }}">All Subscription</a></li>
                        <li class="{{ request()->is('admin/price/create') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.price.create') }}">Add Subscription</a></li>

                    </ul>

                </li>

                <li class=" {{ request()->is('admin/products*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-archive"></i><span> Trainings
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/products') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.products.index') }}">All Trainings</a></li>
                        <li class="{{ request()->is('admin/product/create') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.product.create') }}">Add Training</a></li>

                    </ul>

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
                <li class=" {{ request()->is('admin/faqs*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-question-circle"></i><span> Faqs
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/faqs') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.faqs.index') }}">All Faqs</a></li>
                        <li class="{{ request()->is('admin/faq/create') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.faq.create') }}">Add Faq</a></li>

                    </ul>

                </li>
                {{-- Gallery Routes --}}
                <li class=" {{ request()->is('admin/graduates*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-image"></i><span> Graduate Galleries
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/graduates') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.graduates.index') }}">All Graduate Galleries</a></li>
                        <li class="{{ request()->is('admin/graduate/create') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.graduate.create') }}">Add Graduate Gallerie</a></li>

                    </ul>

                </li>
                <li class=" {{ request()->is('admin/trainings*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-image"></i><span> Training Galleries
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/trainings') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.trainings.index') }}">All Training Galleries</a></li>
                        <li class="{{ request()->is('admin/training/create') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.training.create') }}">Add Training Gallerie</a></li>

                    </ul>

                </li>

                <li class=" {{ request()->is('admin/blogs*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-blog"></i><span> Blogs & Articles
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/blogs') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.blogs.index') }}">All Blogs & Articles</a></li>
                        <li class="{{ request()->is('admin/blog/create') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.blog.create') }}">Add Blog & Article</a></li>

                    </ul>

                </li>

                <li class=" {{ request()->is('admin/taining-contents*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-award"></i><span> Training Contents
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/training-contents') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.trainingContents.index') }}">Training Contents</a></li>
                        <li class="{{ request()->is('admin/trainingContent/create') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.trainingContent.create') }}">Add Training</a></li>

                    </ul>

                </li>


                <li class=" {{ request()->is('admin/behaviors*') ? '' : 'select-menu' }}">
                    <a href="javascript:void(0);" class="waves-effect selectBtn select-btn"><i
                            class="fas fa-atom"></i><span> Behaviour Contents
                            <span class="float-right menu-arrow select-btn "><i
                                    class="mdi mdi-chevron-right"></i></span></span></a>
                    <ul class="submenu">
                        <li class="{{ request()->is('admin/behaviors') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.behaviors.index') }}">All Behaviour Contents</a></li>
                        <li class="{{ request()->is('admin/behavior/create') ? 'active-nav' : '' }}"><a
                                href="{{ route('admin.behavior.create') }}">Add Behaviours</a></li>

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
