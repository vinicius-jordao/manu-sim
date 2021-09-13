<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatório de serviços</title>
        <!-- frameworks -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- styles -->
        <link rel="stylesheet" href="style.css?v=<?=rand(0,9999)?>">
        <style>
            @media (max-width:540px) {
                header .content {
                    flex-direction: column;
                    align-items: flex-start;
                }
                header .content .d-flex.align-items-center {
                    width: 100%;
                    justify-content: space-between;
                    margin-bottom: 0 !important;
                }
                header .content .d-flex.align-items-center div {
                    text-align: right;
                }
                header .content div {
                    width: 100%;
                    margin-bottom: 16px;
                }
                .section-title .d-flex.justify-content-between {
                    flex-direction: column;
                }
                .section-title .d-flex.justify-content-between h1:first-child {
                    margin-bottom: 8px
                }
                .fw-bold {
                    text-align: right;
                }
            }
        </style>
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="content mb-4">
                    <div class="d-flex align-items-center">
                        <img src="logo.png" class="me-5">
                        <div>
                            <h6 class="fw-bolder">Kleper Soluções Industrias</h6>
                            <p>Rua Ludovico Groscoph n.140 Colonial</p>
                            <p>São Bento do Sul - SC / CEP 89.2288-245</p>
                        </div>
                    </div>
                    <div class="text-end">
                        <p class="fw-bold">(47) 99946-0922</p>
                        <p class="fw-bold">Kepler@keplersolucoes.com.br</p>
                        <p class="fw-bold">www.keplersolucoes.com.br</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="mb-4">
            <div class="container-fluid">
                <div class="section-title">
                    <div class="d-flex justify-content-between">
                        <h1>Relatório de Serviços</h1>
                        <h1>O.S.: n⁰00001</h1>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title my-4">
                                <h6>Dados do Cliente</h6>
                                <h6>O.S. Interna: 2345</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Industria de Móveis Planejado ME</p>
                            <p class="mb-2">CNPJ: 13.803/795/0001-19</p>
                            <p class="mb-2">Av. Principal n.⁰123, Centro, São Bento do Sul - SC</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Responsável: José da Silva</p>
                            <p class="mb-2">E-mail: Josedasilva@gmail.com</p>
                            <p class="mb-2">Telefone: (47) 9 9936-1234</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title my-4">
                                <h6>Dados da O.S.</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Solicitante: <strong>João da Silva - Cracha 1325</strong></p>
                            <p class="mb-2">Equipamento: <strong>Lixadeira Banda Larga BLX</strong></p>
                            <p class="mb-2">Tag: <strong>Lix0012</strong></p>
                            <p class="mb-2">Setor: <strong>Produção</strong></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-2">Tipo O.S: <strong class="text-danger">CORRETIVA</strong></p>
                            <p class="mb-2">Prioridade: <strong class="text-danger">MUITO ALTA</strong></p>
                            <br>
                            <p class="mb-2">Status Serviço: <strong class="text-warning">ANDAMENTO</strong></p>
                        </div>
                        <div class="col-3">
                            <p class="mb-2">Status Abertura: <strong class="text-danger">PARADO</strong></p>
                            <br>
                            <br>
                            <p class="mb-2">Equipamento: <strong class="text-success">RODANDO</strong></p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title my-4">
                                <h6>Indices de controle de Manutenção</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Data e Hora Solicitação: <strong>03/05/1985 - 09:53h</strong></p>
                            <p class="mb-2">Tempo para Atendimento: <strong>02:00h</strong></p>
                            <div class="row">
                                <div class="col-6">
                                    <p>Horas Técnicas: <strong>24:00h</strong></p>
                                </div>
                                <div class="col-6">
                                    <p>Horas Auxiliar: <strong>24:00h</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Data e Hora Conclusão: <strong>05/05/1985 - 17:15h</strong></p>
                            <p class="mb-2">Máquina Parada: <strong>30:00h</strong></p>
                            <p class="mb-2">Tempo Total Acumulado: <strong>50:00h</strong></p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title my-4">
                                <h6>Falha / Causa ou Motivo</h6>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="mb-2">"Lorem ipsum dolor sit amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uconsectetur adipiscsdin</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title my-4">
                                <h6>Descrição detalhada da Falha / Causa ou Motivo</h6>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="mb-2">"Lorem ipsum dolor sit amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uconsectetur adipiscsdin</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title my-4">
                                <h6>Diagnóstico Técnico de Conclusão dos Serviços</h6>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="mb-2">"Lorem ipsum dolor sit amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt uconsectetur adipiscsdin</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title my-4">
                                <h6>Custos e Despesas</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Horas Técnicas: <strong>R$1.000,00</strong></p>
                            <p class="mb-2">Horas Auxiliar: <strong>R$500,00</strong></p>
                            <p class="mb-2">Despesas: <strong>R$1.500,00</strong></p>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Deslocamento: <strong>R$500,00</strong></p>
                            <p class="mb-2">Peças: <strong>R$5.700,00</strong></p>
                            <p class="mb-2">Valor Total: <strong>R$9.700,00</strong></p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title my-4">
                                <h6>Conclusão dos Serviços</h6>
                                <h6>13 de agosto de 2021</h6>
                            </div>
                        </div>
                        <div class="col-12 text-center mb-4">
                            <p class="mb-2">"Este serviço foi encerrado nas condições acima declarado, estando ciente em pleno acondo com os resultados dos serviços prestados"</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-4 mx-auto text-center">
                            <input type="text" class="form-control mb-2">
                            <h5 class="mb-2">Contratante</h5>
                        </div>
                        <div class="col-4 mx-auto text-center">
                            <input type="text" class="form-control mb-2">
                            <h5 class="mb-2">Contratado</h5>
                        </div>
                        <div class="col-12">
                            <p class="mb-2 text-end">Pag. 01 de 04</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
            </div>
        </main>

    </body>
</html>