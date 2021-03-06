<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Distribuidora Fama</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="/css/slick-theme.css" />
    <link type="text/css" rel="stylesheet" href="/css/nouislider.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/css/estilos.css" />
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
</head>
<body>
    <!-- HEADER -->
    @include('Partials.header')
    <!-- HEADER -->

    <!-- NAVEGATION -->
    @include('Partials.nav')
    <!-- NAVEGATION -->
    @if (!isset($mensaje))
    <!--carousel-->
    @if ($historias->isNotEmpty())
    <div class="historias">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach ($historias as $item)

                @if ($item->principal == 1)
                <li data-target="#carousel-example-generic" data-slide-to="{{ $x->count() }}" class="active"></li>
                @else
                <li data-target="#carousel-example-generic" data-slide-to="{{ $x->count() }}"></li>
                @endif
                @endforeach
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach ($historias as $item)
                @if ($item->principal == 1)
                <div class="item active">
                    <img src="/storage/{{ $item->banner }}" alt="...">
                </div>
                @else
                <div class="item">
                    <img src="/storage/{{ $item->banner }}" alt="...">
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!--carousel-->

    <!-- Sección del body -->
    <!-- SECTION -->

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h4 class="title">Categorias populares</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="{{ asset('/img/grupo1.jpg')}}" alt="">
                        </div>
                        <div class="shop-body">
                            <h5>Sección de<br>{{ $chunk[0]->nombre_categoria }}</h5>
                            <a href="{{ route('filtro.categoria',  $chunk[0]->nombre_categoria) }}" class="cta-btn">Ver lista <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-3 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="{{ asset('/img/grupo2.jpg') }}" alt="">
                        </div>
                        <div class="shop-body">
                            <h5>Sección de<br>{{ $chunk[1]->nombre_categoria }}</h5>
                            <a href="{{ route('filtro.categoria',  $chunk[1]->nombre_categoria) }}" class="cta-btn">Ver lista <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-3 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="{{ asset('/img/grupo4.jpg') }}" alt="">
                        </div>
                        <div class="shop-body">
                            <h5>Sección de<br>{{ $chunk[2]->nombre_categoria }}</h5>
                            <a href="{{ route('filtro.categoria',  $chunk[2]->nombre_categoria) }}" class="cta-btn">Ver lista <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-3 col-xs-6">
                    <div class="shop" style="height: 175px">
                        <div class="shop-img">
                            <img src="{{ asset('/img/grupo3.jpg') }}" alt="">
                        </div>
                        <div class="shop-body">
                            <h5>Colección de<br>{{ $chunk[3]->nombre_categoria }}</h5>
                            <a href="{{ route('filtro.categoria',  $chunk[3]->nombre_categoria) }}" class="cta-btn">Ver lista <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    @endif
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        @if ($productos->isNotEmpty())
                        @if (isset($mensaje))
                        <h4>{{ $mensaje }}</h4>
                        @else
                        <h4 class="title">Listado completo de los productos</h4>
                        @endif
                        @endif
                        @if ($productos->isEmpty())
                        @if (isset($mensaje))
                        <h4>{{ $mensaje }}</h4>
                        {{-- @else
                        <h4 class="title">Listado completo de los productos</h4> --}}
                        @endif
                        @endif
                    </div>
                </div>

                <!-- STORE -->
                <div id="store" class="col-md-12">

                    <!-- store products -->
                    <div class="row">
                        @if ($productos->isEmpty())
                        @if (isset($mensaje2))
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <img class="center-block" style="padding-bottom: 5px" src="{{ '/img/nada.png' }}" alt="" height="50px">
                                <h5 class="text-center">{{ $mensaje2 }}</h5>
                            </div>
                        </div>
                        @endif
                        @else
                        @foreach ($productos as $item)
                        <div class="col-md-3 col-xs-6 animate__animated animate__animate__flipInX">
                            <div class="product">
                                <div class="product-img">
                                    @if ($item->fotos->count() >= 1)
                                    <a href="{{ route('info.producto', $item->id) }}"><img src="/storage/{{$item->fotos->first()->url }}" alt="Imagen del producto" height="200px" width="100px"></a>
                                    @endif
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{ $item->subcategoria->nombre_sub }}</p>
                                    <h3 class="product-name"><a style="color: #333" href="{{ route('info.producto', $item->id) }}">{{ $item->nombre_producto }}</a></h3>
                                    <p style="font-size: 12px">{{ $item->review }}</p>
                                    <div class="product-rating"></div>
                                    <div class="product-btns">
                                        <a name="" id="" class=" btn add-to-cart-btn" href="https://api.whatsapp.com/send?phone=593{{ $x[0]->telefono }}&text=Hola%20Distribuidora%20Fama,%20me%20gustar%C3%ADa%20obtener%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20este%20producto:%20{{$item->nombre_producto }}.%20El%20c%C3%B3digo%20del%20producto%20es:%20{{ $item->codigo_unico }}" role="button"><span style="padding-right: 10px"><i class="fa fa-shopping-cart"></i></span> Comprar</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>

                    <!-- /store products -->
                    {{ $productos->links() }}
                    <!-- /store bottom filter -->
                </div>
                <!-- /STORE -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
    <!-- Sección del body -->





    <!-- FOOTER -->
    @include('Partials.footer')
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/slick.min.js') }}"></script>
    <script src="{{ asset('/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>
