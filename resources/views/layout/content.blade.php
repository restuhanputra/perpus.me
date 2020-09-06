<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    @include('layout.topbar')
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
        </div>

        @yield('content')

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
