<!DOCTYPE html>
<html lang="ru">

@include('page-components.head')

<body>
    @include('page-components.header')


    @yield('content')


    @include('page-components.footer')


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
</body>

</html>
