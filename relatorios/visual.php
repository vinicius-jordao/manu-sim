<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Documento visual</title>
        <!-- frameworks -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <!-- styles -->
        <link rel="stylesheet" href="style.css?v=<?=rand(0,9999)?>">
        <style>
            table.table thead tr th {
                background: #b4c6e7;
            }
            @media (max-width:540px) {
                header .content {
                    flex-direction: column;
                    align-items: flex-start;
                }
                header .content .d-flex.align-items-center {
                    width: 100%;
                    justify-content: space-between;
                    margin-bottom: 24px;
                }
                header .content .d-flex.align-items-center div {
                    text-align: right;
                }
                header .content div.text-end {
                    width: 100%;
                }
                .section-title .d-flex.justify-content-between {
                    flex-direction: column;
                }
                .section-title .d-flex.justify-content-between h1:first-child {
                    margin-bottom: 8px
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
                        <h1>Controle de Peças</h1>
                        <h1>O.S.: n⁰00001</h1>
                    </div>
                </div>
                <!-- item -->
                <div class="item">
                    <div class="row">
                        <div class="col-12">
                            <div class="title mt-4 mb-4">
                                <h6>Dados do Cliente</h6>
                            </div>
                        </div>
                        <div class="col-4">
                            <p class="mb-2">Industria de Móveis Planejado ME</p>
                            <p class="mb-2">CNPJ: 13.803/795/0001-19</p>
                            <p class="mb-2">Av. Principal n.⁰123, Centro, São Bento do Sul - SC</p>
                        </div>
                        <div class="col-4">
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
                            <div class="title mt-4 mb-4">
                                <h6>Dados do Cliente</h6>
                                <h6>O.S. Interna: 2345</h6>
                            </div>
                        </div>
                        <div class="col-4">
                            <p class="mb-2">Solicitante: <strong>João da Silva - Cracha 1325</strong></p>
                            <p class="mb-2">Equipamento: <strong>Lixadeira Banda Larga BLX</strong></p>
                            <p class="mb-2">Tag: <strong>Lix0012</strong></p>
                            <p class="mb-2">Setor: <strong>Produção</strong></p>
                        </div>
                        <div class="col-4">
                            <p class="mb-2">Tipo O.S: <strong class="text-danger">CORRETIVA</strong></p>
                            <p class="mb-2">Prioridade: <strong class="text-danger">MUITO ALTA</strong></p>
                            <br>
                            <p class="mb-2">Status Serviço: <strong class="text-warning">ANDAMENTO</strong></p>
                        </div>
                        <div class="col-4">
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
                            <div class="title mt-4 mb-3">
                                <h6>Documentação Visual</h6>
                            </div>
                        </div>
                        <!-- peça -->
                        <div class="col-12">
                            <div class="pb-3 mb-3 border-bottom">
                                <div class="row">
                                    <div class="col-4 mb-0 mb-3">
                                        <img src="exemplo.png" class="img-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec risus felis, bibendum at justo sit amet, laoreet iaculis sapien. Duis at pellentesque velit, tristique feugiat tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ut leo magna. Integer luctus elementum dui, eget mollis quam imperdiet id. Sed sit amet justo nec purus vestibulum malesuada quis quis justo. Aliquam non orci vel velit sollicitudin sagittis. Morbi vel urna ut enim vulputate elementum. Sed sed sem diam. In hac habitasse platea dictumst. Etiam vitae dolor porttitor, finibus ipsum sit amet, euismod dolor. Proin elementum odio ligula, quis euismod mi posuere ut. Phasellus feugiat quam vitae vehicula commodo. Donec bibendum justo augue, sed malesuada libero molestie eget. Curabitur placerat erat nec odio accumsan, sed sodales libero congue.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end peça -->
                        <!-- peça -->
                        <div class="col-12">
                            <div class="pb-3 mb-3 border-bottom">
                                <div class="row">
                                    <div class="col-4 mb-0 mb-3">
                                        <img src="exemplo.png" class="img-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec risus felis, bibendum at justo sit amet, laoreet iaculis sapien. Duis at pellentesque velit, tristique feugiat tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ut leo magna. Integer luctus elementum dui, eget mollis quam imperdiet id. Sed sit amet justo nec purus vestibulum malesuada quis quis justo. Aliquam non orci vel velit sollicitudin sagittis. Morbi vel urna ut enim vulputate elementum. Sed sed sem diam. In hac habitasse platea dictumst. Etiam vitae dolor porttitor, finibus ipsum sit amet, euismod dolor. Proin elementum odio ligula, quis euismod mi posuere ut. Phasellus feugiat quam vitae vehicula commodo. Donec bibendum justo augue, sed malesuada libero molestie eget. Curabitur placerat erat nec odio accumsan, sed sodales libero congue.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end peça -->
                        <!-- peça -->
                        <div class="col-12">
                            <div class="pb-3 mb-3 border-bottom">
                                <div class="row">
                                    <div class="col-4 mb-0 mb-3">
                                        <img src="exemplo.png" class="img-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec risus felis, bibendum at justo sit amet, laoreet iaculis sapien. Duis at pellentesque velit, tristique feugiat tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ut leo magna. Integer luctus elementum dui, eget mollis quam imperdiet id. Sed sit amet justo nec purus vestibulum malesuada quis quis justo. Aliquam non orci vel velit sollicitudin sagittis. Morbi vel urna ut enim vulputate elementum. Sed sed sem diam. In hac habitasse platea dictumst. Etiam vitae dolor porttitor, finibus ipsum sit amet, euismod dolor. Proin elementum odio ligula, quis euismod mi posuere ut. Phasellus feugiat quam vitae vehicula commodo. Donec bibendum justo augue, sed malesuada libero molestie eget. Curabitur placerat erat nec odio accumsan, sed sodales libero congue.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end peça -->
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
                        <div class="col-12 mb-4 text-center">
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
                            <p class="mb-2 text-end">Pag. 02 de 04</p>
                        </div>
                    </div>
                </div>
                <!-- end item -->
            </div>
        </main>

    </body>
</html>