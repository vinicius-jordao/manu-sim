<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Relatório de horas</title>
        <!-- frameworks -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- styles -->
        <link rel="stylesheet" href="style.css?v=<?=rand(0,9999)?>">
        <style>
            div.item .title {
                background: #b4c6e7;
            }
            div.item .title h6 {
                color: #305496;
                font-weight: 800;
            }
            .table {
                min-width: 1000px;
            }
            .overflow {
                overflow: auto;
                margin-bottom: 8px;
            }
            .overflow::-webkit-scrollbar-track {
                background-color: #F4F4F4;
            }
            .overflow::-webkit-scrollbar {
                width: 6px;
                height: 6px;
                background: #F4F4F4;
            }
            .overflow::-webkit-scrollbar-thumb {
                background: #dad7d7;
            }
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
                    <div class="">
                        <p class="fw-bold">(47) 99946-0922</p>
                        <p class="fw-bold">Kepler@keplersolucoes.com.br</p>
                        <p class="fw-bold">www.keplersolucoes.com.br</p>
                    </div>
                    <div class="">
                        <p class="fw-bold">Industria de Móveis Planejado ME</p>
                        <p class="fw-bold">CNPJ: 13.803/795/0001-19</p>
                        <p class="fw-bold">Av. Principal n.⁰123, Centro, São Bento do</p>
                    </div>
                    <div class="text-end">
                        <p class="fw-bold">Responsável: José da Silva</p>
                        <p class="fw-bold">E-mail: Josedasilva@gmail.com</p>
                        <p class="fw-bold">Telefone: (47) 9 9936-1234</p>
                    </div>
                </div>
            </div>
        </header>

        <main class="mb-4">
            <div class="container-fluid">
                <div class="section-title">
                    <div class="d-flex justify-content-between">
                        <h1>Controle de Horas</h1>
                        <h1>O.S.: n⁰00001</h1>
                    </div>
                </div>
                <!-- item -->
                <div class="item mt-4">
                    <div class="row g-1">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-6">
                                    <p class="mb-2">Tipo O.S.: <strong class="text-danger">CORRETIVA</strong></p>
                                </div>
                                <div class="col-6">
                                    <p class="mb-2">Status Abertura: <strong class="text-danger">PARADO</strong></p>
                                </div>
                            </div>
                            <p class="mb-2">Equipamento: <strong>Lixadeira Banda Larga BLX</strong></p>
                            <p class="mb-2">Falha / Causa ou Motivo:</p>
                            <p class="mb-2">Descrição detalhada da Falha / Causa ou Motivo:</p>
                        </div>
                        <div class="col">
                            <p class="mb-2">Prioridade: <strong class="text-danger">MUITO ALTA</strong></p>
                            <p class="mb-2">Tag: Lix0012</p>
                        </div>
                        <div class="col">
                            <p class="mb-2">Status Serviço: <strong class="text-warning">ANDAMENTO</strong></p>
                            <p class="mb-2">Setor: <strong>Produção</strong></p>
                        </div>
                        <div class="col">
                            <p class="mb-2">Equipamento: <strong class="text-success">RODANDO</strong></p>
                            <p class="mb-2">O.S. Interna: <strong>2345</strong></p>
                        </div>
                        <div class="col">
                            <p class="mb-2">Solicitante: <strong>João da Silva - 1325</strong></p>
                            <p class="mb-2">Fechamento O.S.: Kepler Benicio Dias</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title mt-4">
                                <h6>Registro detalhado de horas trabalhas</h6>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="overflow">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 200px">Técnico</th>
                                            <th>Nível</th>
                                            <th>Data</th>
                                            <th>Entrada</th>
                                            <th>Saida</th>
                                            <th>Total</th>
                                            <th>Descrição dos Serviços</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>Kepler Benicio Dias</strong>
                                            </td>
                                            <td>TC1</td>
                                            <td>01/12/2021</td>
                                            <td>07:30</td>
                                            <td>12:00</td>
                                            <td>
                                                <strong>08:00</strong>
                                            </td>
                                            <td>Lorem ipsum dolor sit amet sit amet, consectetur adipiscing econsectetur adipiscing eetur aetur sectetur adipiscing econss. Lorem ipsum dolor sit amet sit amet, consectetur adipiscing econsectetur adipiscing eetur aetur sectetur adipiscing econss. Lorem ipsum dolor sit amet sit amet, consectetur adipiscing econsectetur adipiscing eetur aetur sectetur adipiscing econss</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Kepler Benicio Dias</strong>
                                            </td>
                                            <td>TC1</td>
                                            <td>01/12/2021</td>
                                            <td>07:30</td>
                                            <td>12:00</td>
                                            <td>
                                                <strong>08:00</strong>
                                            </td>
                                            <td>Lorem ipsum dolor sit amet sit amet, consectetur adipiscing econsectetur adipiscing eetur aetur sectetur adipiscing.</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Kepler Benicio Dias</strong>
                                            </td>
                                            <td>TC1</td>
                                            <td>01/12/2021</td>
                                            <td>07:30</td>
                                            <td>12:00</td>
                                            <td>
                                                <strong>08:00</strong>
                                            </td>
                                            <td>Lorem ipsum dolor sit amet sit amet, consectetur adipiscing econsectetur adipiscing eetur aetur sectetur adipiscing.</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Kepler Benicio Dias</strong>
                                            </td>
                                            <td>TC1</td>
                                            <td>01/12/2021</td>
                                            <td>07:30</td>
                                            <td>12:00</td>
                                            <td>
                                                <strong>08:00</strong>
                                            </td>
                                            <td>Lorem ipsum dolor sit amet sit amet, consectetur adipiscing econsectetur adipiscing eetur aetur sectetur adipiscing.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title mt-5 mb-2">
                                <h6>Controle de Horas</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Tempo para Atendimento: 02:00h</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Horas Técnicas: 24:00h</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Horas Auxiliar: 24:00h</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Máquina Parada: 30:00h</p>
                        </div>
                        <div class="col-6">
                            <p class="mb-2">Tempo Total Acumulado: 50:00h</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title mb-2">
                                <h6>Diagnóstico Técnico de Conclusão dos Serviços</h6>
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="mb-2">"Lorem ipsum dolor sit amssaet sit amet, consesactetur adipisng elit, sed dso eiusmod ddsempor incididaunt uconsecteturod tempor incididunteiusmod tempor incididunt uconsectetur adipiscsdin</p>
                            <p class="mb-2">"Lorem ipsum dolor sit amssaet sit amet, consesactetur adipisng elit, sed dso eiusmod ddsempor incididaunt uconsecteturod tempor incididunteiusmod tempor incididunt uconsectetur adipiscsdin</p>
                            <p class="mb-2">"Lorem ipsum dolor sit amssaet sit amet, consesactetur adipisng elit, sed dso eiusmod ddsempor incididaunt uconsecteturod tempor incididunteiusmod tempor incididunt uconsectetur adipiscsdin</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title mb-2">
                                <h6>Conclusão dos Serviços</h6>
                                <h6>13 de agosto de 2021</h6>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
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
                            <p class="mb-2 text-end">Pag. 04 de 04</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
            </div>
        </main>

    </body>
</html>