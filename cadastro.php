<!doctype html>
<html class="no-js" lang="pt-br">

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

    <!-- Novo design ainda não definido com padrão  -->
    <style>
        body {
            background: #ffffff !important;
        }
        main {
            min-height: 100vh;
        }
        hr {
            background: #a9abad;
            margin: 32px 0;
        }

        .title h1,
        .title h2,
        .title h3,
        .title h4,
        .title h5,
        .title h6 {
            color: #272727;
            font-weight: 700;
        }
        .title p {
            color: #a9abad;
            font-size: 16px;
        }

        .form-group {
            margin: 0;
        }

        .form-group label {
            color: #272727;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 4px;
        }
        .form-control,
        .form-select {
            border-width: 1px;
            border-style: solid;
            border-color: #ebf0f4;
            border-radius:  .25rem;
            padding: 8px;
            outline: 0;
            box-shadow: none;

            font-size: 14px;
            background: #ebf0f4;
        }
        .form-control:focus,
        .form-select:focus {
            outline: 0;
            box-shadow: none;
            border-color: #006091;
            background: #ebf0f4;
        }

        .btn {
            font-size: 14px;
            padding: 8px 32px;
        }

        .btn {
            background: #018bff;
            border-color: #018bff;
            color: #fff;
            font-weight: 600;
            padding: 12px 32px;
        }

        .btn:hover {
            background: #007ce2;
            border-color: #007ce2;
            color: #fff;
        }

        .terms p {
            margin-bottom: 0;
            color: #a9abad;
            font-size: 12px;
        }
        main {
            position: relative;
        }
        .background {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 44%;
            height: 100%;
            position: absolute;
            top: 0;
            right: 0;
        }
        .background::before {
            content: '';
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg , #04c0ef, #0061b0);
            position: absolute;
            top: 0;
            left: 0;
            opacity: .6 ;
        }
        @media (min-width: 1200px) {
            .container-fluid {
                max-width: 90%;
            }
        }
    </style>

    <body>

        <main class="py-5 d-flex align-items-center">
            <div class="background d-lg-block d-none" style="background-image: url(assets/images/background-3.jpg)"></div>
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6" >
                        <div class="title mb-5">
                            <h2>Cadastre-se</h2>
                            <p>Preencha as informações abaixo para se cadastrar.</p>
                        </div>

                        <form method="POST" action="">

                            <!-- Dados clientes -->
                            <div class="row">
                                <!-- title container -->
                                <div class="col-lg-12">
                                    <div class="title mb-4">
                                        <h6>Dados cliente</h6>
                                    </div>
                                </div>
                                <!-- inputs -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6 mb-lg-4 mb-4">
                                            <div class="form-group">
                                                <label>Nome/Razão social:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-lg-4 mb-4">
                                            <div class="form-group">
                                                <label>CPF/CNPJ:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-lg-0 mb-4">
                                            <div class="form-group">
                                                <label>Telefone:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-lg-0 mb-4">
                                            <div class="form-group">
                                                <label>Segmento:</label>
                                                <select name="" class="form-control">
                                                    <option value="">Selecione</option>
                                                    <option value="">Exemplo</option>
                                                    <option value="">Exemplo</option>
                                                    <option value="">Exemplo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Dados cliente -->

                            <hr>

                            <!-- Endereço de cobrança -->
                            <div class="row">
                                <!-- title container -->
                                <div class="col-lg-12">
                                    <div class="title mb-4">
                                        <h6>Endereço</h6>
                                    </div>
                                </div>
                                <!-- inputs -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 mb-lg-4 mb-4">
                                            <div class="form-group">
                                                <label>CEP:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 mb-lg-4 mb-4">
                                            <div class="form-group">
                                                <label>Endereço:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 mb-lg-4 mb-4">
                                            <div class="form-group">
                                                <label>N:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-lg-0 mb-4">
                                            <div class="form-group">
                                                <label>Comp:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-lg-0 mb-4">
                                            <div class="form-group">
                                                <label>Bairro:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-lg-0 mb-4">
                                            <div class="form-group">
                                                <label>Cidade:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 mb-lg-0 mb-4">
                                            <div class="form-group">
                                                <label>UF:</label>
                                                <select class="form-select" name="">
                                                    <option value=""></option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MT">MT</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MG">MG</option>
                                                    <option value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PR">PR</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Endereço de cobrança -->

                            <hr>

                            <!-- Dados -->
                            <div class="row">
                                <!-- title container -->
                                <div class="col-lg-12">
                                    <div class="title mb-4">
                                        <h6>Dados de acesso</h6>
                                    </div>
                                </div>
                                <!-- inputs -->
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 mb-lg-0 mb-4">
                                            <div class="form-group">
                                                <label>E-mail acesso:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-lg-0 mb-4">
                                            <div class="form-group">
                                                <label>Confirme e-mail:</label>
                                                <input class="form-control" type="text" name="" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-lg-0 mb-4">
                                            <div class="form-group">
                                                <label>Senha acesso loja:</label>
                                                <input class="form-control" type="password" name="senha" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-lg-0 mb-4">
                                            <div class="form-group">
                                                <label>Confirme a senha:</label>
                                                <input class="form-control" type="password"  name="" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end Dados da loja -->

                            <div class="mt-5 mb-4">
                                <button class="btn">Cadastrar</button>
                            </div>

                            <div class="terms">
                                <p>Ao clicar em cadastrar você concorda com o nosso <a href="" target="_blank">contrato e termos de uso.</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>