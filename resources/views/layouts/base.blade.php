<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <script>window.Laravel = { 'csrfToken': '{{ csrf_token() }}' }</script>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <div id="app">
        <Globe></Globe>
    </div>

    <div class="Container">
        <div class="Content">
            @yield('content')
        </div>

        <aside class="Sidebar">
            <section class="Widget">
                <h3 class="Widget__title">Latest Posts</h3>
                <ul class="Widget__content">
                    <li>Lorem ipsum</li>
                    <li>Dolor sit amet</li>
                    <li>Consectetur</li>
                    <li>Adisciping</li>
                    <li>Lost grid</li>
                    <li>Lookie here</li>
                </ul>
            </section>
            <section class="Widget">
                <h3 class="Widget__title">About Me</h3>
                <p class="Widget__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad, quod! Alias distinctio ea et hic inventore libero.</p>
            </section>
        </aside>
    </div>

    @stack('scripts')

    <script src="{{ mix('/js/app.js') }}"></script>

    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat" rel="stylesheet">
</body>
</html>
