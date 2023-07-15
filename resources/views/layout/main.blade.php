@include('layout.header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            @yield('content')
        </div>
    </main>
</div>
@include('layout.footer')