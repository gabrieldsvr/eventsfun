@extends('layouts.master')

@push('styles')

@endpush

@section('content')


{{--    MENU--}}

    <div class="container-fluid m-0 p-0 fixed-top border-bottom">
        <nav class="navbar navbar-expand-lg menu fixed-top  position-absolute top-0 w-100 py-5" style="z-index: 10;
       box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; transition: background-color 0.5s ease;
" >
            <div class="container-fluid">
                <a class="navbar-brand p-0 me-0 me-lg-2 ms-5" href="/" aria-label="Bootstrap">
                    <img src="{{url('images/logo_2.png')}}" style="width: 200px" class="portrait-logo" alt="" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active font-menu" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-menu" href="#">EVENTOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-menu" href="#">NOSSAS CABINES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-menu" href="#">CONTATO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-menu" href="#">GALERIA</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav justify-content-end pe-5">

                            <li class="nav-item font-bebas">
                                <button class="btn btn-light btn-lg" type="submit">CHAME AGORA</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

{{--    CARROSEL--}}
    <div class="container-fluid m-0 p-0" >
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://lirp.cdn-website.com/f53f5274/dms3rep/multi/opt/SalsaPromoHighRes209-1920w.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://lirp.cdn-website.com/f53f5274/dms3rep/multi/opt/GettyImages-1061358082-1920w.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://lirp.cdn-website.com/f53f5274/dms3rep/multi/opt/SalsaPromoHighRes095-1920w.JPG" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

{{--    titulo1--}}
    <div class="container-fluid bg-black py-5 d-block">
        <div class="container bg-black">
            <h1 class="display-4  text-center">
                DE UM UPGRADE EM SEU EVENTO COM A <span class="text-warning">4FUN</span> CABINES DE FOTO
            </h1>
        </div>
    </div>

{{--trio de imagens--}}
{{--trio de imagens--}}
    <div class="container-fluid">
        <div class="row">
            <div class="p-0 col-12 col-md-6 col-lg-4 bg-danger thumb">
                <div class="container">
                    <img src="https://irp.cdn-website.com/f53f5274/dms3rep/multi/SalsaPromoHighRes443-cabf7f02.jpg"
                         alt="..." class="portrait image">
                    <div class="overlay">
                        <div class="text display-4">CASAMENTOS</div>
                    </div>
                </div>
            </div>
            <div class="p-0 col-12 col-md-6 col-lg-4  bg-danger thumb">
                <div class="container">
                    <img src="https://irp.cdn-website.com/f53f5274/dms3rep/multi/SalsaPromoHighRes152.jpg"
                         alt="..." class="portrait image">
                    <div class="overlay">
                        <div class="text display-4">EVENTOS EMPRESARIAIS</div>
                    </div>
                </div>
            </div>
            <div class="p-0 col-12  col-md-6 col-lg-4 bg-danger thumb">
                <div class="container">
                    <img src="https://irp.cdn-website.com/f53f5274/dms3rep/multi/SalsaPromoHighRes117.JPG"
                         alt="..." class="portrait image">
                    <div class="overlay">
                        <div class="text display-4">15 ANOS</div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid ">
        <div class="row">
            <div class="col-12 col-lg-8 p-5 text-white pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul>
                                <li class="my-1">Plataforma 360</li>
                                <li class="my-1">Cabine de fotos</li>
                                <li class="my-1">Totem fotográfico</li>
                                <li class="my-1">Cabines de GIF e Bumerangue</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="display-3">NOSSAS CABINES <span class="text-warning">4FUN</span></div>
                    </div>
                    <div class="row">
                        <div style="font-size: 18px; line-height: 36px">
                            <p>Mantenha seu evento <span class="text-warning">4FUN</span> com nossa experiência única e
                                criativa de cabine de fotos! Oferecemos
                                cabines de impressão clássicas, experiências virtuais ou pacotes personalizados criados
                                para
                                a sua festa. Nossos estandes oferecem a flexibilidade que você precisa para criar a
                                festa
                                perfeita!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4"
                 style="background-image: url({{url('images/cabine.jpg')}});    background-repeat: no-repeat!important;background-size: cover!important; background-position: 40% 60%!important;"></div>
        </div>
    </div>


<div class="container-fluid bg-warning">
        <div class="row">
            <div class="col-12 col-lg-5"
                 style="background-image: url('{{url('images/cabine.jpg')}}');    background-repeat: no-repeat!important;background-size: cover!important; background-position: 50% 50%!important;">
            </div>


            <div class="col-12 col-lg-7 p-5 my-5 bg-warning">
                <div class="row">
                    <div class="display-3 text-black text-center my-5">Por que alugar conosco?</div>
                </div>
                <div class="row">
                    <div class="text-black" style="font-size: 18px; line-height: 36px">
                        <p> Na 4FUN Eventos, ajudamos você a desenvolver ideias e conceitos para ajudá-lo a imaginar seu casamento, festa ou evento com nosso toque criativo. Nossos serviços incluem acessórios artesanais personalizados, impressões para combinar com o tema do seu casamento e muito mais. Permita-nos moldar sua experiência para se adequar ao que você precisa. Por que se contentar com uma opção sem brilho? Deixe-nos inspirar você!</p></div>
                </div>
            </div>


        </div>
    </div>


    <div class="container p-5">
        <div class="row mb-5">
            <div class="container">
                <h1 class="display-4 text-center">Aluguel de <span class="text-warning">cabine de fotos</span> - Como funciona</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="container" style="font-size: 20px">
                <p class="text-center ">
                    Nossas cabines fotográficas ao ar livre de última geração são elegantes e não intrusivas.
                </p>
                <p class="text-center ">
                    Nossos estandes são super rápidos e fáceis de configurar e embalar. Aqui está um rápido resumo de
                    como tudo
                    funciona:</p>
            </div>
        </div>
        <div class="row text-center text-white">
                <div style="line-height: 36px; font-size: 20px; font-weight: bold">
                    <div class="col-12 font-poppins">
                        <span style="font-weight: lighter">  1.</span> Configuração rápida e profissional
                    </div>
                    <div class="col-12 font-poppins "><span style="font-weight: lighter">  2.</span> Nosso estande orienta seus convidados pelas etapas</div>
                    <div class="col-12 font-poppins"><span style="font-weight: lighter">  3.</span> Compartilhe e imprima todas as suas fotos</div>
                    <div class="col-12 font-poppins"><span style="font-weight: lighter">  4.</span> Viva o momento; nós fazemos isso durar</div>
                </div>
        </div>
        <div class="row py-4">
            <div class="col-12 text-center">
                <div class="btn btn-lg btn-warning" style="font-family: 'Bebas Neue', cursive; font-size: 28px">
                    AGENDAR AGORA!
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid bg-black p-5" >
        <div class="container bg-black text-center">
            <h1 class="display-4">
                CRIE A MELHOR <span class="text-warning">EXPERIÊNCIA</span> INTERATIVA NO SEU EVENTO!
            </h1>
        </div>
    </div>


{{--4 fotos--}}
    <div class="container-fluid">
        <div class="row">
            <div class="p-0 col-12 col-sm-6 col-xl-3 bg-danger thumb">
                <div class="container">
                    <img src="{{url('images/formatura.jpg')}} "
                         alt="..." class="portrait image" style=" width: 200%;">
                    <div class="overlay">
                        <div class="text display-5">EXPRERIÊNCIA INTERATIVA INCRÍVEL</div>
                    </div>
                </div>
            </div>
            <div class="p-0 col-12 col-sm-6 col-xl-3  bg-danger thumb">
                <div class="container">
                    <img src="https://irp.cdn-website.com/f53f5274/dms3rep/multi/GettyImages-1061358082.jpg"
                         alt="..." class="portrait image" style=" width: 200%;">
                    <div class="overlay">
                        <div class="text display-5">PERSONALIZE SUA CABINE</div>
                    </div>
                </div>
            </div>
            <div class="p-0 col-12 col-sm-6  col-xl-3  bg-danger thumb">
                <div class="container">
                    <img src="{{url('images/apetrechos.jpg')}}"
                         alt="..." class="portrait image" style=" width: 200%;">
                    <div class="overlay">
                        <div class="text display-5">ADEREÇOS E CENÁRIOS PERSONALIZADOS PARA CABINE</div>
                    </div>
                </div>
            </div>
            <div class="p-0 col-12 col-sm-6 col-xl-3  bg-danger thumb">
                <div class="container">
                    <img src="{{url('images/img_casamento.jpg')}} "
                         alt="..." class="portrait image" style=" width: 180%;">
                    <div class="overlay">
                        <div class="text display-5">IMPRESSÕES DE ALTA QUALIDADE</div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{--contato--}}
    <div class="container-fluid bg-warning pb-5">
        <div class="bg-warning text-black">
            <div class="row text-center py-5">
                <h1 class="display-6 text-black text-center" style="font-weight: bold">Solicite informações sobre preços e promoções <span class="text-white">especiais</span> abaixo:</h1>
            </div>
            <div class="container">
                <form action="">
                    <div class="row my-3">
                        <div class="col-12 col-lg-6 py-2">
                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Nome Completo" aria-label=".form-control-lg example">
                        </div>
                        <div class="col-12 col-lg-6 py-2">
                            <input class="form-control form-control-lg" name="email" type="email" placeholder="Email" aria-label="email">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class=" col-12">
                            <label for="evento" class="text-white my-2 " style="font-weight: bold; font-size: 20px">Tipo do evento</label>
                            <select class="form-select" name="event" id="evento" aria-label="Tipo de evento">
                                <option selected>Open this select menu</option>
                                <option value="1">Casamento</option>
                                <option value="2">15 anos</option>
                                <option value="3">Aniversários</option>
                                <option value="4">Eventos corporativos</option>
                                <option value="5">Outros</option>
                            </select>

                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 col-lg-6 py-2">
                            <input class="form-control form-control-lg" name="date" type="date" placeholder="Data do evento" aria-label="Data do evento">
                        </div>
                        <div class="col-12 col-lg-6 py-2">
                            <input class="form-control form-control-lg" name="hours" type="text" placeholder="Quantas horas?" aria-label="Aluguel por quantas horas">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class=" col-12">
                            <input class="form-control form-control-lg" name="locale" type="text" placeholder="Localização" aria-label="localizacao">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="btn btn-lg btn-dark" style="font-family: 'Bebas Neue', cursive; font-size: 24px">
                                ENVIAR!
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


{{--footer--}}
    <div class="container-fluid bg-black">
        <div class="container py-5 bg-black">
            <div class="row">
                <div class="col-3 thumb-logo">
                    <img src="{{url('images/F.jpg')}}" class="portrait-logo" alt="" >
                </div>
                <div class="col-6 py-5 my-5">
                    <div class="row">
                        <div class="col-12">

                            <h1 class="display-6">INFORMAÇÕES PARA CONTATO</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">Telefone: (48) 8838-9430</div>
                        <div class="col-12">Email: contato.4funeventos@gmail.com</div>
                        <div class="col-12">Região Grande Florianópolis</div>
                    </div>
                </div>
                <div class="col-3  py-5 my-5">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="display-6">Atendimento</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">Seg - Sex 9:00 - 22:00 pm</div>
                        <div class="col-12">Sábado 10:00 - 16:00</div>
                        <div class="col-12">Domingo 10:00 - 16:00</div>
                        <div class="col-12">

                            <a href="https://www.facebook.com/profile.php?id=100089908810964" class="btn  text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/4funeventos_floripa/" class="btn  text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg></a>
                            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5548988389430" class="btn  text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="container px-5 py-5">
            <div class="row">
                <div class="col-6">

                </div>
                <div class="col-6" style="font-size: 12px">
                    O conteúdo, incluindo imagens, exibido neste site é protegido por leis de direitos autorais. O download, republicação, retransmissão ou reprodução do conteúdo deste site é estritamente proibido. Terms of Use | Privacy Policy
                </div>
            </div>
        </div>

    </div>




@endsection
@push('plugin-scripts')

    <script>
        const myCarouselElement  = document.querySelector('#myCarousel')
        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 4000,
            touch: false
        })



        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll > 500) {
                // $('.menu').css('background-color','black');
                $('.menu').css('background-color','black');
            } else {
                $('.menu').css('background-color','');
            }
        });
    </script>

@endpush

@push('custom-scripts')
@endpush
