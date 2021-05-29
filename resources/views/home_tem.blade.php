@extends('layouts.master')

@section('content')
<section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="{{ asset('images/im2.png') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        {{-- <h1 style="color:black">A propos de nous !</h1> --}}
                        {{-- <p style="color:black">Achetez vos produits de parapharmacie au Maroc sur vitrine.ma. Notre
                            société
                            vous offre le plus grand choix de produits de parapharmacie au Maroc et aux meilleurs
                            prix du
                            marché. Vous pouvez commander vos produits en ligne sur notre site. Pour le paiement,
                            vous avez
                            le choix entre le paiement en espèce à la livraison ou le paiement électronique en
                            utilisant
                            votre carte bancaire. Les livraisons des produits de parapharmacie sur Casablanca,
                            Rabat, Salé,
                            Témara et Kénitra sont opérées par nos propres livreurs. </p> --}}
                        <a style="color:black" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/im1.png" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        {{-- <h1 style="color:black">Contactez nous !</h1> --}}
                        {{-- <p style="color:black">Appelez-nous et recevez les conseils de nos docteurs en pharmacie. --}}
                        </p>
                        <a style="color:black" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/im3.png" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        {{-- <h1 style="color:black">Beaucoup d'offres speciaux</h1> --}}
                        {{-- <p style="color:black">Vitrine.ma vous offre des remises exceptionnelles sur une sélection
                            de
                            produits de parapharmacie chaque semaine valable dans la limite du stock.Vous trouverez
                            tous les
                            offres speciaux au dessous de la page. N'hesitez pas de les voir ! </p> --}}
                        <a style="color:black" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
        </a>
    </div>
</section>
<!-- about  -->

<!-- end abouts -->
<!-- service -->
<div id="service" class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Categories</h2>

                </div>
            </div>
        </div>
    </div>
    <div class="container margin-r-l">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                <div class="service-box">
                    <figure>
                        <a href="images/1.jpg" class="fancybox" rel="ligthbox">
                            <img src="images/tee shirts.png" class="zoom img-fluid " alt="">
                        </a>
                        <span class="hoverle">
                            <a href="{{url('/TEE SHIRTS')}}" class="fancybox" rel="ligthbox" id="category"
                                style="color:black;font-size:24px">TEE SHIRTS</a>
                        </span>
                    </figure>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                <div class="service-box">
                    <figure>
                        <a href="images/2.jpg" class="fancybox" rel="ligthbox">
                            <img src="images/shorts and pants.png" class="zoom img-fluid " alt="">
                        </a>
                        <span class="hoverle">
                            <a href="{{url('/SHORTS & PANTS')}}" class="fancybox" rel="ligthbox"
                                style="color:black;font-size:24px">SHORTS & PANTS
                            </a>
                        </span>
                    </figure>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                <div class="service-box">
                    <figure>
                        <a href="images/3.jpg" class="fancybox" rel="ligthbox">
                            <img src="images/hats.png" class="zoom img-fluid " alt="">
                        </a>
                        <span class="hoverle">
                            <a href="{{url('/HATS')}}" class="fancybox" rel="ligthbox"
                                style="color:black;font-size:24px">HATS</a>
                        </span>
                    </figure>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                <div class="service-box">
                    <figure>
                        <a href="images/4.jpg" class="fancybox" rel="ligthbox">
                            <img src="images/business casual.png" class="zoom img-fluid " alt="">
                        </a>
                        <span class="hoverle">
                            <a href="{{url('/BUSINESS CASUAL')}}" class="fancybox" rel="ligthbox"
                                style="color:black;font-size:24px">BUSINESS CASUAL</a>
                        </span>
                    </figure>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                <div class="service-box">
                    <figure>
                        <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                            <img src="images/shoes.png" class="zoom img-fluid " alt="">
                        </a>
                        <span class="hoverle">
                            <a href="{{url('/SHOES')}}" class="fancybox" rel="ligthbox"
                                style="color:black;font-size:24px">SHOES</a>
                        </span>
                    </figure>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                <div class="service-box">
                    <figure>
                        <a href="images/6.jpg" class="fancybox" rel="ligthbox">
                            <img src="images/best sellers.png" class="zoom img-fluid " alt="">
                        </a>
                        <span class="hoverle">
                            <a href="{{url('/BEST SELLERS')}}" class="fancybox" rel="ligthbox"
                                style="color:black;font-size:24px">BEST SELLERS</a>
                        </span>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end service -->
<!-- Download -->
<div id="download" class="download">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>RECENT Products</h2>
                    <span>Every Wednesday Boutique Clothes a selection of shoes, tee shirts and new products
                        for
                        clothes within the newsletter.

                        Suppliers interested in promoting their products in this feature can email
                        clothes@boutique.gmail.com.</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <img class="first-slide" src="images/rec_pro_1.png"
                                alt="First slide"> </div>
                        <div class="carousel-item"> <img class="second-slide" src="images/rec_pro_2.png"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item"> <img class="third-slide" src="images/rec_pro_3.png"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i
                            class='fa fa-angle-left'></i></a> <a class="carousel-control-next" href="#main_slider"
                        role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end Download -->

@endsection