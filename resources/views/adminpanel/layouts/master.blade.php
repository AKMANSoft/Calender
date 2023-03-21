<!DOCTYPE html>
<html lang="en">

@include('adminpanel.partials.head')

<!-- body start -->

<body data-layout-mode="default" data-theme="dark" data-layout-width="fluid" data-topbar-color="dark"
    data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

    @include('adminpanel.partials.header')
    <!-- Begin page -->
    <div id="wrapper">

        @include('adminpanel.partials.sidebar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- END wrapper -->

    @include('adminpanel.partials.script')

</body>

</html>
