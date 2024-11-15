@include('dashboard.inc.header')
@include('dashboard.inc.navbar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row py-2">
                @yield('content')
            </div>
        </div>
    </div>
</div>
@include('dashboard.inc.footer')
