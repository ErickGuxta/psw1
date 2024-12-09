<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Lista Alunos</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>

        <div class="sessao-direita-header">
            <div class="caixa1">
                <div class="imgs-logo">
                    <a href="#"><img src="img/facebook-icon.png" alt=""></a>
                    <a href="#"><img src="img/instagram-icon.png" alt=""></a>
                    <a href="#"><img src="img/linkedin-icon.png" alt=""></a>
                    <a href="#"><img src="img/github-icon.png" alt=""></a>
                </div>
            </div>
            <div class="caixa2">
                <img src="img/image-user-qualquer.png" alt="">
            </div>
        </div>
    </header>

    <section>
        <aside>
            <nav>
                <ul>
                    <div>
                        <span><img src="img/imagem-home.png" alt="imagem home"></span>
                        <li class="nav-item"> <a href="index.php">Home</a></li>
                    </div>
                    <div>
                        <span><img src="img/imagem-registro.png" alt="imagem registro"></span>
                        <li class="nav-item"> <a href="cadaluno.php">Cadastrar Aluno</a></li>
                        
                    </div>
                    <div>
                        <span><img src="img/imgem-usuario.png" alt="imagem usuario"></span>
                        <li class="nav-item"> <a href="listaaluno.php">Lista de Alunos</a></li>
                    </div>

                    <div>
                        <span><img src="img/imagem-ti.png" alt="imagem TI"></span>
                        <li class="nav-item"> <a href="#">Tec. da Informação</a></li>
                    </div>
                </ul>
            </nav>
        </aside>

        <main>
            <div class="conteudo-listaaluno">
                <!-- <div class="titulo"><h2>LISTA DE INFORMAÇÕES DOS ALUNOS</h2></div> -->
                <table class="tabela-informacoes">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>UF</th>
                            <th>Celular</th>
                            <th>CPF</th>
                            <th>Disciplinas Cursando</th>
                            <th>Disciplinas Favoritas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Erick Gustavo Costa de Souza</td>
                            <td>Rua Dom Bosco</td>
                            <td>São Francisco</td>
                            <td>Carinhanha</td>
                            <td>BA</td>
                            <td>77998094236</td>
                            <td>86656505554</td>
                            <td>PSW, BANCO DE DADOS, QUIMICA, MATEMATICA</td>
                            <td>BANCO DE DADOS, PSW</td>
                        </tr>
                        <tr>
                            <td>Erick Gustavo Costa de Souza</td>
                            <td>Rua Dom Bosco</td>
                            <td>São Francisco</td>
                            <td>Carinhanha</td>
                            <td>BA</td>
                            <td>77998094236</td>
                            <td>86656505554</td>
                            <td>PSW, BANCO DE DADOS, QUIMICA, MATEMATICA</td>
                            <td>BANCO DE DADOS, PSW</td>
                        </tr>
                        <tr>
                            <td>Nome Completo</td>
                            <td>Endereço</td>
                            <td>Bairro</td>
                            <td>Cidade</td>
                            <td>UF</td>
                            <td>Numero</td>
                            <td>CPF</td>
                            <td>Discp. Cursando</td>
                            <td>Discp. Favorita</td>
                        </tr>
                    
                    </tbody>
                </table>
            </div>
        </main>
    </section>

    <footer>
        <span>© 2024 CadAluno. Todos os direitos reservados.</span>
    </footer>
</body>
</html>
