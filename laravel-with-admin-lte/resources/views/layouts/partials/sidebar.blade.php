<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/logo.png')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-tachometer'></i> <span>Dashboard</span></a></li>
            <li><a href="{{ url('admin/users') }}"><i class='fa fa-users'></i> <span>Users</span></a></li>
            <li><a href="{{ url('admin/slideshows') }}"><i class='fa fa-picture-o'></i> <span>Slide show</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-rss"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/news-categories') }}">News Categories</a></li>
                    <li><a href="{{ url('admin/news') }}">News</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-lightbulb-o"></i> <span>Products</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/product-main-categories') }}">Product Categories Main</a></li>
                    <li><a href="{{ url('admin/product-sub-categories') }}">Product Categories Sub</a></li>
                    <li><a href="{{ url('admin/products') }}">Products</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-cubes"></i> <span>Service</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/service-categories') }}">Service Categories</a></li>
                    <li><a href="{{ url('admin/services') }}">Services</a></li>
                </ul>
            </li>
            <li><a href="{{ url('admin/references') }}"><i class='fa fa-tags'></i> <span>Project References</span></a></li>
            <li><a href="{{ url('admin/contacts') }}"><i class='fa fa-user'></i> <span>Contacts</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-download"></i> <span>Download</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/download/philips') }}">Philips</a></li>
                    <li><a href="{{ url('admin/download/winner-products') }}">Winner Products</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
