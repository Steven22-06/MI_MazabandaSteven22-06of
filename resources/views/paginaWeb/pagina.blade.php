@extends('layouts.index')

@section('seo')
<title>{{$seo->title}}</title> 
<meta name="description" content="{{$seo->description}}">
<meta name="keywords" content="{{$seo->keywords}}">

@endsection
@section('content')

<section class="principal">
            <div class="carrusel">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      @foreach($inicio as $item)
                        <div class="carousel-item {{$item->class}}">
                          <img src="{{asset('imagen/'.$item->image)}}" class="d-block w-100" alt="{{$item -> title}}">
                        </div>
                      @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </section>
        <section id="MV">
            <section class="MV">
                <section class="mision">
                    <h2><i class="fa-solid fa-chart-simple fa-beat-fade"></i> Misión</h2><br>
                    <img width="200" height="150" src="{{asset('imagen/'.$Mision->image)}}" alt="{{$Mision->name}}"> <br> <br>
                    <p>{{$Mision->name}}</p>

                </section>
                <section class="vision">
                    <h2><i class="fa-solid fa-arrow-trend-up fa-beat-fade"></i> Visión</h2><br>
                    <img width="200" height="150" src="{{asset('imagen/'.$Vision->image)}}" alt="{{$Vision->name}}"> <br> <br>

                    <p>{{$Vision->name}}</p>
                </section>
            </section>
        </section><hr>
        <section  id="Servicios"  class="precios">
            <h2 class="tit-servi"><i class="fa-solid fa-shop fa-beat-fade"></i> Servicios</h2>
            <section class="pagos">
              @foreach($servicios as $item)
                <section class="servi-precio">
                    {{$item->description}}
                </section>
                @endforeach
            </section>
        </section>
        <section class="SERVICIOS">
            <section>
                <section class="div">
                  @foreach($servicios as $item)
                    <img height: 280px; width: 350px; src="{{asset('imagen/'.$item->image)}}" alt="{{$item->description}}"><br>
                  @endforeach
                </section>
                
            </section><br>
        </section>
@endsection