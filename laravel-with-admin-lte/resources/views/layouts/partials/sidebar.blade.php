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
            {{--<li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>--}}
            <li class="treeview">
                <a href="#"><i class='fa fa-newspaper-o'></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">News Categories</a></li>
                    <li><a href="#">News</a></li>
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
                <a href="#"><i class='fa fa-cubes'></i> <span>Services</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Service Categories</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </li>
            <li><a href="{{ url('posts/create') }}"><i class='fa fa-link'></i> <span>Posts</span></a></li>
            <li><a href="#"><i class='fa fa-cc'></i> <span>Project References</span></a></li>
            <li><a href="#"><i class='fa fa-user'></i> <span>Contact</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
