<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
    <link rel='stylesheet'
        href='https://startbootstrap.com/templates/agency/font-awesome-4.1.0/css/font-awesome.min.css'>
    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/slide.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/signin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/komplit.css') }}">

    <title>Dagangnih! | {{ $title }}</title>
</head>

<body>
    <div class="container mt-4">
        @yield('container')
    </div>

    <body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">
        <!-- Navigation -->
        @include('partials.navbar')

        <!-- Header -->
        <header style="background-image: url({{ url('assets/bottom.png') }})">

            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Cari tempat dagang?</div>
                    <div class="intro-heading">Hallo juragan,<br>
                        perkenankan kami membantu permasalahan agan dalam mencari lapak jualan, dari mulai ketersediaan
                        lokasi, sampai harga produk dan ukuran lapak</div>
                    <a href="#mitra" class="page-scroll btn btn-xl">Kenalan yuk</a>
                </div>
                <div class="gambar" style="background-image: url({{ url('assets/gambar.png') }})">
                </div>
            </div>
        </header>

        <!-- Slider -->
        <section id="mitra">
            <h1>usaha yang tergabung</h1>
            <div class="slider">
                <img class="tenan"
                    src="https://images.unsplash.com/photo-1485893086445-ed75865251e0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
                <img class="tenan"
                    src="https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
                <img class="tenan"
                    src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
                <img class="tenan"
                    src="https://images.unsplash.com/photo-1529068755536-a5ade0dcb4e8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
                <img class="tenan"
                    src="https://images.unsplash.com/photo-1499887142886-791eca5918cd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
                <img class="tenan"
                    src="https://images.unsplash.com/photo-1484186304838-0bf1a8cff81c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
                <img class="tenan"
                    src="https://images.unsplash.com/photo-1484611941511-3628849e90f7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
                <img class="tenan"
                    src="https://images.unsplash.com/photo-1485206412256-701ccc5b93ca?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cGVvcGxlfGVufDB8MnwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60" />
            </div>
        </section>



        <footer style="background-image: url({{ url('assets/footer.png') }})">
            <div class="container">
                <!--MAP-->
                <div id="map" style="width: 600px; height: 400px; center "></div>

            </div>
        </footer>
        <span
            style="height: 20px; width: 40px; min-height: 20px; min-width: 40px; position: absolute; opacity: 0.85; z-index: 8675309; display: none; cursor: pointer; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAADU0lEQVR42s2WXUhTYRjHz0VEVPRFUGmtVEaFUZFhHxBhsotCU5JwBWEf1EWEEVHQx4UfFWYkFa2biPJiXbUta33OXFtuUXMzJ4bK3Nqay7m5NeZq6h/tPQ+xU20zugjOxR/+7/O8539+5znnwMtNTExwJtMb3L/fiLv3botCSmUjeCaejTOb39AiFothfHxcFIrHY8RksZjBsckJcOIRMfFsHD/SsbExUYpnI8DR0dGUGjSb0byhEJp5Uqg5CTSzc2CQleJbMEj9/ywBcGRkJEk9DQqouEVQT1sK444yWI9UonmTjGqauVLEIlHa9x8lAMbj8SSpp0rwKGMVvg8P46vbg0C7na8z8JsMcgHe7jlEa+edRhiLy8n/TUMfu6EvLElk+U0WtGwrTrdfAGQf5J8iiK4LVzDU28t8JtMSocf8E+l68myaNFXm/6rXslLK7ay5TOunuRvZWpJuvwAYjUaTpOIWoquuAZ219RTaxKYp9BbjycoN5FvL9qH9TBX5rvoGdJythvXYSTxdtRnWylO/ZdqrLsGwszzhWQ593z2KlAwCYCQSSZJ6ehZ0W7bD9VBLgN0NCqr3qR7R2rBrL3pu3Sb/7nDlz2uy6cG0OXk0GTbZXzNp8trsPAQdTj6frlWzN2DcXZGKQQAMh8NJ6rpyHe+PnkCr/CAFdZyvpfpjuvkifLF9wIt1Wwlo0OHie1RvWrKa93RjzfzliTzPKz3ltB0/Tevmwp14wGUgHAzSOoUEwFAolFaaBSuhnslPRkJexUJtZ6v5HtUeLswl33n1BgEY5fvhs9sJ3FAiT+QYyyvoAQJuD0KBAFRTJNAuz5/s3gJgMBhMJwrVFRThM5tY5zUF/A4X1f2fvQTRLCuBreoim0YmAbqNJryvPEXeeq46kaNdkQ/1HCncbJKPs9ZSv2VHGfWsZ2hfkhKAfr8/pdxWKx4wwD69PmVfNSOL+lr2w+gYqHpWDtXt1xQ8AMlWU0e1lqLd/APRHoP8AJqWrQG9gYxcPMsvSJUvAA4MDKTUJ7MZLaVy8v+qT21tcDx/OemePr0RTkNrur4A6PP5xCgBsL+/X4wiQDpuuVxOeL1eMYmYeDY6sOp0z+B0OuHxeEQhxkJMFosJiSO/UinOI/8Pc+l7KKArAT8AAAAASUVORK5CYII=);"></span>
    </body>

    <!--MAP Javascript-->
    <script>
        var map = L.map('map').setView([-5.421554983317848, 105.2572750802158], 18);

        var tiles = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(map);
    </script>
    <!-- jQuery Version 1.11.0 -->
    <script
        src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jquery-1.11.0.js">
    </script>

    <script src="{{ url('js/script.js') }}">
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script
        src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/bootstrap.min.js">
    </script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script
        src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/classie.js">
    </script>
    <script
        src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/cbpAnimatedHeader.js">
    </script>

    <!-- Contact Form JavaScript -->
    <script
        src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jqBootstrapValidation.js">
    </script>
    <script
        src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/contact_me.js">
    </script>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>
    <script src='js/slide.js'></script>
</body>

</html>
