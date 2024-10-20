<!DOCTYPE html>
<html lang="zxx" class="js">
@include('theme.header')

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            {{-- @include('theme.sidemenu') --}}
            <div class="nk-wrap ">
                {{-- @include('theme.header-top') --}}
                <div class="nk-content ">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                {{-- @extends('theme.footer') --}}
            </div>
        </div>
    </div>
    <script src="/assets/js/bundle.js?ver=3.0.3"></script>
    <script src="/assets/js/scripts.js?ver=3.0.3"></script>
    <script src="{{ asset('js/actions.js') }}"></script>

</body>

</html>
