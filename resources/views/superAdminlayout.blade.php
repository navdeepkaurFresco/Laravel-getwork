@if(Session::get('role') == '1')
@include('Superadmin.includes.head')
@include('Superadmin.includes.header')
@include('Superadmin.includes.sidebar')
    @yield('content')
@include('Superadmin.includes.footer')
@endif