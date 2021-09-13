<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
        <title>ManuSim</title>
        <!-- frameworks -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- styles -->
        <link rel="stylesheet" href="assets/styles/owl.theme.default.css?v=<?=rand(0,9999)?>">
        <link rel="stylesheet" href="assets/styles/owl.carousel.min.css?v=<?=rand(0,9999)?>">
        <link rel="stylesheet" href="assets/styles/style.css?v=<?=rand(0,9999)?>">
    </head>
    <body>

        <a class="btn-whatsapp d-flex justify-content-center align-items-center" href="https://wa.me/55" target="_blank">
            <ion-icon class="text-white md hydrated" name="logo-whatsapp" role="img" aria-label="logo whatsapp"></ion-icon>
        </a>

        <header>
            <div class="container">
                <div class="content">
                    <a href="" class="logo">
                        <img src="logo-blue.png" alt="logo">
                    </a>
                    <nav class="d-lg-flex d-none">
                        <ul>
                            <li>
                                <a href="#como-funciona">Como funciona</a>
                            </li>
                            <li>
                                <a href="#atuacoes">Atuações</a>
                            </li>
                            <li>
                                <a href="#beneficios">Benefícios</a>
                            </li>
                            <li>
                                <a href="#planos">Planos</a>
                            </li>
                            <li>
                                <a class="btn entrar" href="">Entrar</a>
                            </li>
                            <li>
                                <a class="btn" href="">Cadastre-se</a>
                            </li>
                        </ul>
                    </nav>
                    <button class="toggler-menu d-lg-none d-inline-flex">
                        <ion-icon name="menu"></ion-icon>
                    </button>
                </div>
            </div>
        </header>

        <aside class="menu-mobile d-lg-none d-block">
            <ul>
                <li>
                    <a href="#como-funciona">Como funciona</a>
                </li>
                <li>
                    <a href="#atuacoes">Atuações</a>
                </li>
                <li>
                    <a href="#beneficios">Benefícios</a>
                </li>
                <li>
                    <a href="#planos">Planos</a>
                </li>
                <li>
                    <a class="btn entrar" href="">Entrar</a>
                </li>
                <li>
                    <a class="btn" href="">Cadastre-se</a>
                </li>
            </ul>
        </aside>

        <section class="home" id="home">
            <div class="container">
                <div class="row align-items-center flex-lg-row flex-column-reverse">
                    <div class="col-lg-5">
                        <h1>Descomplique a <span>manutenção</span> da sua <span>empresa!</span></h1>
                        <p class="mb-4">Controle a Manutenção da sua empresa através de uma ferramenta simples, totalmente online e de fácil implantação!</p>
                        <a href="#como-funciona" class="btn">Como funciona</a>
                    </div>
                    <div class="col-lg-7 ms-auto mb-lg-0 mb-5">
                        <img src="assets/images/img-2.svg" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </section>

        <section class="video py-5 pt-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto text-center mb-4 mt-5 pt-4" id="como-funciona">
                        <div class="section-title">
                            <h2>Com o Sistema da <span>Manu<span>Sim</span></span> sua empresa poderá controlar Ordens de Serviço, Rotinas de Manutenção, Relatórios MTBS, MTTB e muito mais!</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <iframe width="100%" height="450px" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="areas py-5" id="atuacoes">
            <div class="container">
                <div class="row gy-5 gx-lg-5">
                    <div class="col-lg-12 pb-4">
                        <div class="section-title text-center">
                            <h2 class="mb-3">Veja os diversos <span>segmentos</span> que atuamos</h2>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-4">
                        <div class="item-service">
                            <ion-icon name="business"></ion-icon>
                            <h5>Indústrias</h5>
                            <p>Controle  sua equipe e elimine paradas indesejadas durante o processo gerando relatórios gerenciais sempre que necessário.</p>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-4">
                        <div class="item-service">
                            <ion-icon name="person"></ion-icon>
                            <h5>Prestadores de serviço</h5>
                            <p>Organize seus atendimentos e gere relatórios de forma simples e rápido a seus clientes.</p>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-4">
                        <div class="item-service">
                            <ion-icon name="build"></ion-icon>
                            <h5>Oficinas</h5>
                            <p>Mantenha o controle de estoque de peças e custos de cada atendimento tudo em um só lugar.</p>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-4">
                        <div class="item-service">
                            <ion-icon name="diamond"></ion-icon>
                            <h5>Mineradoras</h5>
                            <p>O controle  das rotinas de manutenção da sua frota e equipamentos na palma de suas mãos.</p>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-4">
                        <div class="item-service">
                            <ion-icon name="medkit"></ion-icon>
                            <h5>Hospitais</h5>
                            <p>Mantenha sempre em dia as rotinas de inspeções dos equipamentos, alertas serão enviados sempre que houver uma nova rotina a realizar!</p>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-4">
                        <div class="item-service">
                            <ion-icon name="book"></ion-icon>
                            <h5>Educacional</h5>
                            <p>O Controle de inspeções das instalações prediais agora estão a um clique.</p>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-4">
                        <div class="item-service">
                            <ion-icon name="construct"></ion-icon>
                            <h5>Construção</h5>
                            <p>Mantenha sua equipe mais produtiva com equipamento em pleno funcionamento.</p>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-4">
                        <div class="item-service">
                            <ion-icon name="filter"></ion-icon>
                            <h5>Logística</h5>
                            <p>Não fique na estrada por falta de manutenção, agora sua frota estará sempre em dia com as rotinas de manutenção.</p>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-4">
                        <div class="item-service">
                            <ion-icon name="leaf"></ion-icon>
                            <h5>Agro</h5>
                            <p>Máquinas sempre rodando e seu planejamento sempre em dia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="benefits py-5 bg-light no-bottom pb-5" id="beneficios">
            <div class="container">
                <div class="row align-items-center flex-lg-row flex-column-reverse">
                    <div class="col-lg-5">
                        <div class="section-title mb-5">
                            <h2>Veja alguns dos benefícios que a <span>Manu<span>Sim</span></span> pode lhe entregar</h2>
                        </div>
                        <ul>
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                Redução de custos com manutenções imprevistas
                            </li>
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                Capacidade de Planejamento do PCM
                            </li>
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                Mudança cultural da Equipe
                            </li>
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                Melhor compreensão entre os períodos
                            </li>
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                Redução de paradas não programada
                            </li>
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                Controle efetivo de mão de obra
                            </li>
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                Aumento da vida útil dos equipamentos
                            </li>
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                Ampliação da disponibilidade dos equipamentos
                            </li>
                            <li>
                                <ion-icon name="checkmark-circle"></ion-icon>
                                Compreensão de Custos global com Manutenção
                            </li>
                            <li>
                                <ion-icon name="add-circle"></ion-icon>
                                E MUITO MAIS!
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-7 mb-lg-0 mb-4">
                        <img src="assets/images/img-1.svg" alt="" class="img-fluid w-100">
                    </div>
                </div>
            </div>
        </section>

        <section class="plans" id="planos" style="background-image: url(assets/images/background.jpg);">
            <div class="container">
                <div class="content-main">
                    <div class="row">
                        <!-- title -->
                        <div class="col-xl-12">
                            <div class="section-title text-center mb-lg-5 mb-4">
                                <h1>Conheça nossos planos</h1>
                                <p>Escolha qual se encaixa melhor com seu negócio.</p>
                            </div>
                        </div>
                        <!-- end title -->
                        <!-- plans -->
                        <div class="col-xl-12">
                            <!-- first line -->
                            <div class="row g-xl-0 g-3">
                                <div class="col-xl-4">
                                    <div class="contact">
                                        <i>
                                            <ion-icon name="chatbox-ellipses"></ion-icon>
                                        </i>
                                        <div>
                                            <h6>Escolha seu plano e</h6>
                                            <h2>Teste grátis</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 mb-xl-0 mb-lg-5">
                                    <div class="item-service">
                                        <h4>Autônomo</h4>
                                        <h2>
                                            <small>
                                                <span>R$</span>
                                            </small>
                                            <span>29</span>
                                            <small><span>,90</span>/mês</small>
                                        </h2>
                                        <h6>Plano anual</h6>
                                        <a href="" class="btn">Teste grátis</a>
                                        <div class="informations">
                                            <ul>
                                                <li class="has">
                                                    <span>
                                                        <strong>01</strong>
                                                    </span>
                                                    <span>User admin</span>
                                                </li>
                                                <li class="has">
                                                    <span>
                                                        <strong>20</strong>
                                                    </span>
                                                    <span>O.S./mês</span>
                                                </li>
                                                <li class="hasnt">
                                                    <i>
                                                        <ion-icon name="close-circle"></ion-icon>
                                                    </i>
                                                    <span>Estação trab</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Relatório de serviço</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Relatório de disponibilidade</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Estoque</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Terceirizadas</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Filiais</span>
                                                </li>
                                            </ul>
                                            <a href="" class="btn">Teste grátis</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 mb-xl-0 mb-lg-5">
                                    <div class="item-service active">
                                        <h4>M.Empresa</h4>
                                        <h2>
                                            <small>
                                                <span>R$</span>
                                            </small>
                                            <span>89</span>
                                            <small><span>,90</span>/mês</small>
                                        </h2>
                                        <h6>Plano anual</h6>
                                        <a href="" class="btn">Teste grátis</a>
                                        <div class="informations">
                                            <ul>
                                                <li class="has active">
                                                    <span>
                                                        <strong>03</strong>
                                                    </span>
                                                    <span>User admin</span>
                                                </li>
                                                <li class="has active">
                                                    <span>
                                                        <strong>300</strong>
                                                    </span>
                                                    <span>O.S./mês</span>
                                                </li>
                                                <li class="has active">
                                                    <span>
                                                        <strong>02</strong>
                                                    </span>
                                                    <span>Estação trab</span>
                                                </li>
                                                <li class="has active">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Relatório de serviço</span>
                                                </li>
                                                <li class="has active">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Relatório de disponibilidade</span>
                                                </li>
                                                <li class="has active">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Estoque</span>
                                                </li>
                                                <li class="has active">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Terceirizadas</span>
                                                </li>
                                                <li class="has active">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Filiais</span>
                                                </li>
                                            </ul>
                                            <a href="" class="btn">Teste grátis</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 mb-xl-0 mb-lg-5">
                                    <div class="item-service">
                                        <h4>Empresarial</h4>
                                        <h2>
                                            <small>
                                                <span>R$</span>
                                            </small>
                                            <span>119</span>
                                            <small><span>,90</span>/mês</small>
                                        </h2>
                                        <h6>Plano anual</h6>
                                        <a href="" class="btn">Teste grátis</a>
                                        <div class="informations">
                                            <ul>
                                                <li class="has">
                                                    <span>
                                                        <strong>05</strong>
                                                    </span>
                                                    <span>User admin</span>
                                                </li>
                                                <li class="has">
                                                    <span>
                                                        <strong>2.000</strong>
                                                    </span>
                                                    <span>O.S./mês</span>
                                                </li>
                                                <li class="has">
                                                    <span>
                                                        <strong>10</strong>
                                                    </span>
                                                    <span>Estação trab</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Relatório de serviço</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Relatório de disponibilidade</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Estoque</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Terceirizadas</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Filiais</span>
                                                </li>
                                            </ul>
                                            <a href="" class="btn">Teste grátis</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 mb-xl-0 mb-lg-5">
                                    <div class="item-service">
                                        <h4>Corporate</h4>
                                        <h2>
                                            <small>
                                                <span>Consulte-nos</span>
                                            </small>
                                        </h2>
                                        <h6>para saber mais</h6>
                                        <a href="" class="btn">Teste grátis</a>
                                        <div class="informations">
                                            <ul>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>User admin</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>O.S./mês</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Estação trab</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Relatório de serviço</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Relatório de disponibilidade</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Estoque</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Terceirizadas</span>
                                                </li>
                                                <li class="has">
                                                    <i>
                                                        <ion-icon name="checkmark-circle"></ion-icon>
                                                    </i>
                                                    <span>Filiais</span>
                                                </li>
                                            </ul>
                                            <a href="" class="btn">Teste grátis</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end first line -->
                            <!-- line informations -->
                            <div class="first">
                                <div class="row g-0">
                                    <!-- title -->
                                    <div class="col-xl-4">
                                        <div class="title-resource">
                                            <h6>User admin</h6>
                                        </div>
                                    </div>
                                    <!-- end title -->
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <span>01</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has active">
                                            <span>03</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <span>05</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end line informations -->

                            <!-- line informations -->
                            <div class="middle">
                                <div class="row g-0">
                                    <!-- title -->
                                    <div class="col-xl-4">
                                        <div class="title-resource">
                                            <h6>O.S./mês</h6>
                                        </div>
                                    </div>
                                    <!-- end title -->
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <span>20</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has active">
                                            <span>300</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <span>2.000</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end line informations -->
                            <!-- line informations -->
                            <div class="middle">
                                <div class="row g-0">
                                    <!-- title -->
                                    <div class="col-xl-4">
                                        <div class="title-resource">
                                            <h6>Estação trab</h6>
                                        </div>
                                    </div>
                                    <!-- end title -->
                                    <div class="col-xl-2">
                                        <div class="hasnt">
                                            <i>
                                                <ion-icon name="close-circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has active">
                                            <span>02</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <span>10</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end line informations -->
                            <!-- line informations -->
                            <div class="middle">
                                <div class="row g-0">
                                    <!-- title -->
                                    <div class="col-xl-4">
                                        <div class="title-resource">
                                            <h6>Relatório de serviço</h6>
                                        </div>
                                    </div>
                                    <!-- end title -->
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has active">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end line informations -->
                            <!-- line informations -->
                            <div class="middle">
                                <div class="row g-0">
                                    <!-- title -->
                                    <div class="col-xl-4">
                                        <div class="title-resource">
                                            <h6>Relatório de disponibilidade</h6>
                                        </div>
                                    </div>
                                    <!-- end title -->
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has active">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end line informations -->
                            <!-- line informations -->
                            <div class="middle">
                                <div class="row g-0">
                                    <!-- title -->
                                    <div class="col-xl-4">
                                        <div class="title-resource">
                                            <h6>Estoque</h6>
                                        </div>
                                    </div>
                                    <!-- end title -->
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has active">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end line informations -->
                            <!-- line informations -->
                            <div class="middle">
                                <div class="row g-0">
                                    <!-- title -->
                                    <div class="col-xl-4">
                                        <div class="title-resource">
                                            <h6>Terceirizadas</h6>
                                        </div>
                                    </div>
                                    <!-- end title -->
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has active">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end line informations -->
                            <!-- line informations -->
                            <div class="last">
                                <div class="row g-0">
                                    <!-- title -->
                                    <div class="col-xl-4">
                                        <div class="title-resource">
                                            <h6>Filiais</h6>
                                        </div>
                                    </div>
                                    <!-- end title -->
                                    <div class="col-xl-2">
                                        <div class="hasnt">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has active">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="has">
                                            <ion-icon name="checkmark-circle"></ion-icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end line informations -->
                        </div>
                        <!-- end plans -->
                    </div>
                </div>
            </div>
        </section>

        <section class="team py-5">
            <div class="container">
                <div class="row gy-5 gx-lg-4">
                    <div class="col-lg-12">
                        <div class="section-title mb-5 text-center">
                            <h2>Equipe</h2>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg">
                        <div class="item-team">
                            <div class="image" style="background-image: url(assets/images/equipe/kepler.jpeg)"></div>
                            <h4>Kepler</h4>
                            <h6>CEO / Comercial</h6>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg">
                        <div class="item-team">
                            <div class="image" style="background-image: url(assets/images/equipe/victor.jpeg)"></div>
                            <h4>Victor</h4>
                            <h6>CTO</h6>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg">
                        <div class="item-team">
                            <div class="image" style="background-image: url(assets/images/equipe/leonardo.jpeg)"></div>
                            <h4>Leonardo</h4>
                            <h6>Desenvolvimento</h6>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg">
                        <div class="item-team">
                            <div class="image" style="background-image: url(assets/images/equipe/kleber.jpeg)"></div>
                            <h4>Kleber</h4>
                            <h6>Desenvolvimento / Suporte</h6>
                        </div>
                    </div>
                    <!-- item -->
                    <div class="col-lg-3">
                        <div class="item-team">
                            <div class="image" style="background-image: url(assets/images/equipe/vinicius.jpeg)"></div>
                            <h4>Vinicius</h4>
                            <h6>Criação e Designer</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testmonials py-5 bg-light pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-5 pt-4">
                        <div class="section-title mb-5 text-center">
                            <h2>Veja o que eles estão falando sobre isso</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="owl-carousel owl-theme" id="slide_testimonials">
                            <!-- item -->
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In diam mauris, aliquam ac feugiat in, elementum eget odio. Mauris feugiat purus tortor, non facilisis enim fermentum fermentum. Vestibulum tempus mauris in leo pellentesque, ac sollicitudin metus dignissim. Quisque at ullamcorper diam. Aliquam a nisi vel ante vulputate sodales at vitae neque. Ut ullamcorper leo vitae diam ultrices.</p>
                                <h5>Felipe</h5>
                                <h6>Gestor de TI</h6>
                            </div>
                            <!-- item -->
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In diam mauris, aliquam ac feugiat in, elementum eget odio. Mauris feugiat purus tortor, non facilisis enim fermentum fermentum. Vestibulum tempus mauris in leo pellentesque, ac sollicitudin metus dignissim. Quisque at ullamcorper diam. Aliquam a nisi vel ante vulputate sodales at vitae neque. Ut ullamcorper leo vitae diam ultrices.</p>
                                <h5>Felipe</h5>
                                <h6>Gestor de TI</h6>
                            </div>
                            <!-- item -->
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In diam mauris, aliquam ac feugiat in, elementum eget odio. Mauris feugiat purus tortor, non facilisis enim fermentum fermentum. Vestibulum tempus mauris in leo pellentesque, ac sollicitudin metus dignissim. Quisque at ullamcorper diam. Aliquam a nisi vel ante vulputate sodales at vitae neque. Ut ullamcorper leo vitae diam ultrices.</p>
                                <h5>Felipe</h5>
                                <h6>Gestor de TI</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5">
                        <a href="" class="logo d-block mb-5">
                            <img src="logo-blue.png">
                        </a>
                        <h5>O controle na palma<br><span>de suas mãos!</span></h5>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <h4>Menu</h4>
                        <ul>
                            <li>
                                <a href="#como-funciona">Como funciona</a>
                            </li>
                            <li>
                                <a href="atuacoes">Atuações</a>
                            </li>
                            <li>
                                <a href="beneficios">Benefícios</a>
                            </li>
                            <li>
                                <a href="planos">Planos</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <h4>Links</h4>
                        <ul>
                            <li>
                                <a href="">Entrar</a>
                            </li>
                            <li>
                                <a href="">Cadastre-se</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h4>Mídias sociais</h4>
                        <ul class="social-media">
                            <li>
                                <a href="">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <ion-icon name="logo-youtube"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p class="mb-0 text-secondary text-center">
                        2021 ©️ Todos os direitos reservados
                    </p>
                </div>
            </div>
        </footer>

        <!-- frameworks -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- scripts -->
        <script>
            function toggle_menu() {
                $('.toggler-menu').click(function() {
                    $('.menu-mobile').toggleClass('animated');
                });
                document.addEventListener('scroll', function() {
                    if($('.menu-mobile').hasClass('animated')) {
                        $('.toggler-menu').click();
                    }
                });
            }
            toggle_menu();

            $('#slide_testimonials').owlCarousel({
                loop: true,
                margin: 32,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: false,
                navText: ['<ion-icon name="caret-back"></ion-icon>', '<ion-icon name="caret-forward"></ion-icon>'],
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2
                    }
                }
            });
        </script>

    </body>
</html>