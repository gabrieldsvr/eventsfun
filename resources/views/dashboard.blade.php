@extends('layouts.master')

@push('styles')

@endpush

@section('content')
    <main>
        <div class="container">

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                            aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                            class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                            class="active" aria-current="true"></button>
                </div>
                <div class="carousel-inner" style="max-height: 500px">
                    <div class="carousel-item active">
                        <img src="https://storage.alboom.ninja/sites/7838/albuns/263198/magic_mirror.jpg?t=1527693787"
                             alt="" width="100%">
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Example headline.</h1>
                                <p>Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://storage.alboom.ninja/sites/7838/albuns/263198/magic_mirror.jpg?t=1527693787"
                             alt="" width="100%">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://storage.alboom.ninja/sites/7838/albuns/263198/magic_mirror.jpg?t=1527693787"
                             alt="" width="100%">
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>


        <div class="container marketing my-5">

            <!-- Three columns of text below the carousel -->
            <div class="row mt-3">
                <div class="col-lg-6 mb-3">
                    <div class="text-center">

                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                             xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                             preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777"></rect>
                            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                        </svg>
                        <h2 class="fw-normal">Espelho mágico</h2>

                        <p>Traga para sua festa um jeito novo e elegante de divertir e guardar recordações de seu evendo
                            ou festa.</p>
                        <p><a class="btn btn-secondary" href="#">Ver detalhes »</a></p>
                    </div>

                </div><!-- /.col-lg-4 -->
                <div class="col-lg-6 mb-3">
                    <div class="text-center">

                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                             xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                             preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777"></rect>
                            <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                        </svg>
                        <h2 class="fw-normal">Plataforma 360°</h2>
                        <p>Procurando por algo diferenciado, moderno e divertido? Faça videos incriveis em 360° para
                            guardar seus momentos.</p>
                        <p><a class="btn btn-secondary" href="#">Ver detalhes »</a></p>
                    </div>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


        </div><!-- /.container -->

        <hr class="featurette-divider">
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-5 mb-3">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_936784-MLB49130559155_022022-O.webp"
                         alt="" width="100%" style="max-height: 400px">
                </div>
                <div class="col-12 col-md-7 mb-3">
                    <div class="container text-center">
                        <div class="mb-3 border-bottom">
                            <h1>Espelho Mágico</h1>
                        </div>
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="row">
                                    <div class=""><i
                                            class="fa-solid fa-wand-magic-sparkles rounded-circle bg-light p-3 "></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 class="text-black">Moderno</h3>
                                </div>
                                <div class="row">
                                    <p class="text-secondary">Espelho moderno que ira decorar todo seu ambiente da festa
                                        e trara curiosidade.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="">
                                        <i class="fa-solid fa-print rounded-circle bg-light p-3 "
                                           style="font-size: 24px"></i></div>
                                </div>
                                <div class="row">
                                    <h3 class="text-black">Impressão imediata</h3>
                                </div>
                                <div class="row">
                                    <p class="text-secondary">Escolha numero de cópias e imprima elas em 15 segundos
                                        após tirar elas.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="">
                                        <i class="fa-solid fa-masks-theater rounded-circle bg-light p-3 "
                                           style="font-size: 24px"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 class="text-black">Diversão</h3>
                                </div>
                                <div class="row">
                                    <p class="text-secondary">Para tornar a brincadeira mais divertida disponibilizamos
                                        apedrechos como óculos, gravatas, colares e máscaras.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class=""><i class="fa-solid fa-camera rounded-circle bg-light p-3 "
                                                     style="font-size: 24px"></i></div>
                                </div>
                                <div class="row">
                                    <h3 class="text-black">Camera profissional</h3>
                                </div>
                                <div class="row">
                                    <p class="text-secondary">Usamos as melhores câmeras do mercado para trazer melhor
                                        qualidade aos nossos clientes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-md-7  mb-3">
                    <div class="container text-center">
                        <div class="mb-3 border-bottom">
                            <h1>Plataforma 360°</h1>
                        </div>
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="row">
                                    <div class="">
                                        <i class="fa-regular fa-lightbulb rounded-circle bg-light p-3 "
                                           style="font-size: 24px"></i></div>
                                </div>
                                <div class="row">
                                    <h3 class="text-black">Inovador</h3>
                                </div>
                                <div class="row">
                                    <p class="text-secondary">Traga o diferencial para sua festa ou evento. Com certeza
                                        vão lembrar sempre dele. </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="">
                                        <i class="fa-solid fa-video rounded-circle bg-light p-3 "
                                           style="font-size: 24px"></i></div>
                                </div>
                                <div class="row">
                                    <h3 class="text-black">Videos divertidos</h3>
                                </div>
                                <div class="row">
                                    <p class="text-secondary">Grave videos extremamente difentes do comum do
                                        mercado. </p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="">

                                        <i class="fa-brands fa-instagram rounded-circle bg-light p-3 "
                                           style="font-size: 24px"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <h3 class="text-black">Baixe e compartilhe</h3>
                                </div>
                                <div class="row">
                                    <p class="text-secondary">Disponibilizamos os vídeos para download logo após gravar,
                                        com a opção de ja poder postar nas redes-socias e mostrar para seus amigos seu
                                        vídeo.</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="">
                                        <i class="fa-solid fa-people-group rounded-circle bg-light p-3 "
                                           style="font-size: 24px"></i></div>
                                </div>
                                <div class="row">
                                    <h3 class="text-black">Não fique sozinho</h3>
                                </div>
                                <div class="row">
                                    <p class="text-secondary">Chame seus até 2 amigos para gravar junto com você na
                                        plataforma, afinal, tudo com amigos SEMPRE é melhor!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5  mb-3">
                    <img src="https://http2.mlstatic.com/D_NQ_NP_746826-MLB51003623814_082022-O.webp"
                         alt="" width="100%" style="max-height: 400px">
                </div>

            </div>
        </div>

        <hr class="featurette-divider">

        <div class="container my-5">
            <div class="row mb-2">
                <div class="text-center">
                    <h1>Quem somos!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="text-secondary">
                        <p>
                            Aliando praticidade, qualidade e muita diversão, a 4Self está no mercado há 8 anos,
                            garantindo modernidade, muita alegria e a captura daquela descontração de momentos que não
                            voltam. Nossa experiência em fotografia para eventos garante uma comemoração espontânea e
                            bastante significativa! Além da qualidade, nossa empresa busca garantir um excelente
                            atendimento aos nossos clientes.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">


        <div class="container my-5">
            <div class="row mb-2">
                <div class="text-center">
                    <h1 >Faça um orçamento agora</h1>
                    <p class="text-secondary">Responderemos o mais rápido possivel!</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-8 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" id="nome"  name="nome" placeholder="Digite seu nome"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"  name="email" placeholder="Digite seu email"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <input type="telefone" class="form-control" id="telefone" name="telefone"
                                           placeholder="Digite seu email" required>
                                </div>
                                <div class="form-group">
                                    <label for="data">Data do evento</label>
                                    <input type="date" class="form-control" id="data" name="data" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" rows="6" required placeholder="Conte a nós qual serviço estais interessado e qual sua dúvida..."></textarea>
                                </div>
                                <div class="mx-auto">
                                    <button type="submit" class="btn btn-primary text-right">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Contato</h5>
                            <p class="card-text">Florianópolis/SC</p>
                            <p class="card-text">Celular: (48) 9 9684-3295</p>
                            <p class="card-text">E-mail: contato@4self.com.br</p>
                            <hr class="featurette-divider">

                            <div class="row">
                                <div class="col-9 text-center">
                                    <p>Clique agora no botão ao lado e nos chame diretamente pelo whatsapp! </p>
                                </div>
                                <div class="col-3">
                                    <a href="">
                                        <p><i class="fa-brands fa-square-whatsapp text-success"
                                              style="font-size: 48px"></i></p>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('plugin-scripts')

@endpush

@push('custom-scripts')
@endpush
