<!-- Content Header (Page header) -->
<section class="content-header">
    <div style="display: flex; position: relative;">
        <div style="flex: 1;">
            <h1>
                @yield('contentheader_title', 'Page Header here')
                @yield('contentheader_description')
            </h1>
        </div>
        <div style="position: absolute; margin: 0; bottom: 0; right: 20px;">
            @yield('button_crud')
        </div>
    </div>
</section>
