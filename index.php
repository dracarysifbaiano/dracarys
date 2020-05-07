<?php 
$logado = @$_COOKIE['logado'];
$acessoUS = @$_GET['pagina']; 
    if($acessoUS == 'login'){
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_CSS/acesso.css">
    <title>Login - Empório Otaku</title>
</head>

<body>
    <div class="back">
        <div class="login">
            <div class="login_tamanho">
            <a href="index.php"><img class="img_voltar" src="./_IMG/ic_arrow_back_grey600_18dp.png" alt="" srcset=""></a>
                <div class="efeito"></div>
                <h2>Faça login</h2>
                <form action="" method="post">
                    <fieldset>
                        <legend>E-mail</legend>
                        <input type="email" placeholder="E-mail" name="">
                    </fieldset>
                    <fieldset>
                        <legend>Senha</legend>
                        <input type="password" placeholder="Senha" name="">
                    </fieldset>
                    <input class="btn" href="#" type="submit" value="LOGIN">
                </form>
                <p class="rs">Conectar de outra forma</p>
                <input class="rsf" type="submit" value="FACEBOOK">
                <input class="rsg" type="submit" value="GOOGLE">
                <div class="outro_documento">
                    <p><a href="<?php echo 'index.php?pagina=cadastro'; ?>">Não tem uma conta? Cadastre-se</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="alerta none">
        <img class="fecharal" src="./_IMG/ic_close_white_18dp.png" alt="" srcset="">
        <p>Senha ou email incorretos.</p>
        <div class="caregando">
            <div class="pocen"></div>
        </div>
    </div>
    <script src="./_JS/login.js"></script>
</body>

</html>
<?php }else if($acessoUS == 'cadastro'){ ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./_CSS/acesso.css">
    <title>Cadastro - Empório Otaku</title>
</head>

<body>
    <div class="back">
        <div class="login">
            <div class="login_tamanho">
                <a href="index.php"><img class="img_voltar" src="./_IMG/ic_arrow_back_grey600_18dp.png" alt="" srcset=""></a>
                <div class="efeito"></div>
                <h2>Cadastre-se</h2>
                <form action="" method="post">
                    <fieldset>
                        <legend>Nome</legend>
                        <input type="text" placeholder="Nome" name="">
                    </fieldset>
                    <fieldset>
                        <legend>E-mail</legend>
                        <input type="email" placeholder="E-mail" name="">
                    </fieldset>
                    <fieldset>
                        <legend>Senha</legend>
                        <input type="password" placeholder="Senha" name="">
                    </fieldset>
                    <fieldset>
                        <legend>Gênero</legend>
                        <select class="gdfgd feddgf evrerv" name="" id="US_genero">
                            <option value="" disabled selected>Gênero</option>
                            <option value="">HOMEM</option>
                            <option value="">MULHER</option>
                            <option value="">OUTRO</option>
                        </select>
                    </fieldset>
                    <input type="submit" value="CADASTRAR">
                </form>
                <div class="outro_documento">
                    <p><a href="<?php echo 'index.php?pagina=login'; ?>">Já tem uma conta?</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="./_JS/cadastro.js"></script>
</body>

</html>



<?php }else{ ?>
    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Empório Otaku</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="./_CSS/style.css">
    <link rel="shortcut icon" href="./_IMG/ic_group_white_18dp.png" type="image/x-icon">
</head>

<body class="body">


    <header class="header">
        <div class="mostrar_menu">
            <img class="img_mostrar_menu menu1" src="./_IMG/ic_view_headline_white_18dp.png" alt="" srcset="">
        </div>
        <div class="logo_menu">
            <span class="texto_logo_menu">Empório Otaku</span>
        </div>
        <div class="buscar_produto">
            <img src="./_IMG/ic_arrow_back_white_18dp.png" class="seta_buscar_produto seta_buscar_produto2" alt=""
                srcset="">
            <input type="text" class="input_buscar_produto input_buscar_produto2"
                placeholder="Mangas, camisas, figuras..." name="" id="">
            <img class="img_buscar_produto" src="./_IMG/ic_search_white_18dp.png" alt="" srcset="">
        </div>
        <div class="sacola_produto">
            <img src="./_IMG/ic_local_mall_white_18dp.png" alt="" class="img_sacola_produto">
        </div>
    </header>
    <nav class="menu_responsivo">
        <div class="nav1">
            <div class="cabecalho_menu">
                <div class="mostrar_menu">
                    <img class="img_mostrar_menu menu2" src="./_IMG/ic_view_headline_white_18dp.png" alt="" srcset="">
                </div>
                <div class="logar_cadastrar">
                    <img src="./_IMG/ic_group_white_18dp.png" alt="" class="img_logar_cadastrar">
                    <div class="textos_logar_cadastrar">
                        <p><a href="<?php echo 'index.php?pagina=cadastro'; ?>">Cadastre-se</a></p>
                        <p><a href="<?php echo 'index.php?pagina=login'; ?>">Faça login</a></p>
                    </div>
                </div>
            </div>
            <div class="categoria_produtos">
                <p><a class="categoria_cell cat1">Categoria</a></p>
                <p><a class="categoria_cell cat2 none">Categoria</a></p>
                <div class="mostrar_categoria none">
                <p><a class="categoria var1">MODA</a></p>
                <p><a class="categoria var1a none">MODA</a></p>
                <div class="catcell1 none">
                    <ul>
                    <a href="#"><li>Se clickar a gente casa</li></a>
                    <a href="#"><li>Se clickar a gente casa</li></a>
                    <a href="#"><li>Se clickar a gente casa</li></a>
                    <a href="#"><li>Se clickar a gente casa</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Se clickar a gente casa</li></a>
                    <a href="#"><li>Se clickar a gente casa</li></a>
                    <a href="#"><li>Se clickar a gente casa</li></a>
                    <a href="#"><li>Se clickar a gente casa</li></a>
                    <a href="#"><li>Se clickar a gente casa</li></a>
                    </ul>
                </div>
                <p><a class="categoria var2">TECNOLOGIA</a></p>
                <p><a class="categoria var2a none">TECNOLOGIA</a></p>
                <div class="catcell2 none">
                    <ul>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>

                    </ul>
                </div>
                <p><a class="categoria var3">MOVEIS</a></p>
                <p><a class="categoria var3a none">MOVEIS</a></p>
                <div class="catcell3 none">
                    <ul>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>

                    </ul>
                </div>
                <p><a class="categoria var4">FIGURINHA</a></p>
                <p><a class="categoria var4a none">FIGURINHA</a></p>
                <div class="catcell4 none">
                    <ul>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
       
                    </ul>
                </div>
                <p><a class="categoria var5">DRACARYS</a></p>
                <p><a class="categoria var5a none">DRACARYS</a></p>
                <div class="catcell5 none">
                    <ul>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
       
                    </ul>
                </div>
                <p><a class="categoria var6">ANIMES</a></p>
                <p><a class="categoria var6a none">ANIMES</a></p>
                <div class="catcell6 none">
                    <ul>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    </ul>
                </div>
                <p><a class="categoria var7">VARIEDADES</a></p>
                <p><a class="categoria var7a none">VARIEDADES</a></p>
                <div class="catcell7 none">
                    <ul>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>

                    </ul>
                </div>
                <p><a class="categoria var8">ACESSORIOS</a></p>
                <p><a class="categoria var8a none">ACESSORIOS</a></p>
                <div class="catcell8 none">
                    <ul>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    </ul>
                </div>
                <p><a class="categoria var9">PRESENTE</a></p>
                <p><a class="categoria var9a none">PRESENTE</a></p>
                <div class="catcell9 none">
                    <ul>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    </ul>
                </div>
                <p><a class="categoria var10">ABACATE</a></p>
                <p><a class="categoria var10a none">ABACATE</a></p>
                <div class="catcell10 none">
                    <ul>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    <a href="#"><li>Lorem ipsum</li></a>
                    </ul>
                </div>
                </div>
                <p><a class="destaque_cell" href="">Destaque</a></p>
                <p><a class="favorito_cell" href="">favoritos</a></p>
                <p><a class="meuspedidos_cell" href="">meus pedidos</a></p>
                <p><a class="notificações_cell" href="">notificações</a></p>
                <p><a class="promoções_cell" href="">promoções</a></p>
                <p><a class="mensagem_cell" href="">Mensagens</a></p>
                <hr>
                <p><a href="">Atendimento pelo whatsapp</a></p>
                <p><a href="">Políticas de privacidade</a></p>
                <p><a href="">trabalhe conosco</a></p>
                <p><a href="">termos e condições</a></p>
                <p><a href="">Contato</a></p>
                <p><a href="">Sobre o site</a></p>
                <p><a href="">Sair</a></p>
            </div>
        </div>
        <div class="nav2">

            <div class="conjunto_menu">
                <div class="logo_menu">
                    <div class="logo_menu_texto">
                        <p>Empório Otaku</p>
                    </div>
                </div>
                <div class="buscar_menu">
                    <input type="text" placeholder="Produto, Mangar, Camisa, Figura..." name=""
                        id="input_pesquisar_buscar_menu">
                    <a href=""><img class="dscxdvdfv pesquisar_buscar_menu pesquisar_buscar_menu2"
                            src="./_IMG/ic_search_white_18dp.png" alt="" srcset=""></a>
                </div>
                <div class="fav_sal_menu">
                    <div class="favorito_comprar">
                        <img src="./_IMG/ic_favorite_white_18dp.png" alt="" id="img1_fav_sal_menu" srcset="">
                        <div class="potfav">14</div>
                    </div>
                    <div class="sacola_comprar">
                        <img src="./_IMG/ic_local_mall_white_18dp.png" alt="" srcset="">
                        <div class="potsal">99</div>
                    </div>
                </div>
                <div class="acesso_menu">
                    <img src="./_IMG/ic_people_outline_white_18dp.png" alt="" srcset="">
                    <p><a class="cadastrar_conta" href="<?php echo 'index.php?pagina=cadastro'; ?>">Cadastre-se</a></p>
                    <p><a class="entrar_conta" href="<?php echo 'index.php?pagina=login'; ?>">Entre</a></p>
                </div>
                
            </div>
            <div class="nomes_menu">
                <div class="nome_nomes_menu">
                    <p><a href="" class="vbefhvb">TODOS OS PRODUTOS</a></p>
                    <div class="nomes_menu_todos_os_produtos eveverbd">
                    <div class="nomes_menu_todos_os_produtos_partes">
                       <ul class="parte1">
                        <li><a href="">Acessórios de Tecnologia</a></li>
                        <li><a>Ar e Ventilação</a></li>
                        <li><a>Artesanato</a></li>
                        <li><a>Artigos para Festa</a></li>
                        <li><a>Áudio</a></li>
                        <li><a>Automotivo</a></li>
                        <li><a>Bebês</a></li>
                        <li><a>Beleza e Perfumaria</a></li>
                        <li><a>Brinquedos</a></li>
                        <li><a>Cama, Mesa e Banho</a></li>
                        <li><a>Câmeras e Drones</a></li>
                        <li><a>Casa e Construção</a></li>
                        <li><a>Celulares</a></li>
                        <li><a>Colchões</a></li>
                        <li><a>Comércio e Indústria</a></li>
                       </ul>
                    </div>
                    <div class="nomes_menu_todos_os_produtos_partes">
                        <ul>
                            <li><a>Acessórios de Tecnologia</a></li>
                            <li><a>Ar e Ventilação</a></li>
                            <li><a>Artesanato</a></li>
                            <li><a>Artigos para Festa</a></li>
                            <li><a>Áudio</a></li>
                            <li><a>Automotivo</a></li>
                            <li><a>Bebês</a></li>
                            <li><a>Beleza e Perfumaria</a></li>
                            <li><a>Brinquedos</a></li>
                            <li><a>Cama, Mesa e Banho</a></li>
                            <li><a>Câmeras e Drones</a></li>
                            <li><a>Casa e Construção</a></li>
                            <li><a>Celulares</a></li>
                            <li><a>Colchões</a></li>
                            <li><a>Comércio e Indústria</a></li>
                           </ul>
                    </div>
                    <div class="nomes_menu_todos_os_produtos_partes">
                        <ul>
                            <li><a>Acessórios de Tecnologia</a></li>
                            <li><a>Ar e Ventilação</a></li>
                            <li><a>Artesanato</a></li>
                            <li><a>Artigos para Festa</a></li>
                            <li><a>Áudio</a></li>
                            <li><a>Automotivo</a></li>
                            <li><a>Bebês</a></li>
                            <li><a>Beleza e Perfumaria</a></li>
                            <li><a>Brinquedos</a></li>
                            <li><a>Cama, Mesa e Banho</a></li>
                            <li><a>Câmeras e Drones</a></li>
                            <li><a>Casa e Construção</a></li>
                            <li><a>Celulares</a></li>
                            <li><a>Colchões</a></li>
                            <li><a>Comércio e Indústria</a></li>
                           </ul>
                        </div>
                    </div>
                    <p><a href="" class="vbefhvb2">CAMISA</a></p>
                    <div class="nomes_menu_todos_os_produtos2 eveverbd">
                    <div class="nomes_menu_todos_os_produtos_partes2">
                        <ul>
                            <li><a>Acessórios de Tecnologia</a></li>
                            <li><a>Ar e Ventilação</a></li>
                            <li><a>Artesanato</a></li>
                            <li><a>Artigos para Festa</a></li>
                            <li><a>Áudio</a></li>
                            <li><a>Automotivo</a></li>
                            <li><a>Bebês</a></li>
                            <li><a>Beleza e Perfumaria</a></li>
                            <li><a>Brinquedos</a></li>
                            <li><a>Cama, Mesa e Banho</a></li>
                            <li><a>Câmeras e Drones</a></li>
                            <li><a>Casa e Construção</a></li>
                            <li><a>Celulares</a></li>
                            <li><a>Colchões</a></li>
                            <li><a>Comércio e Indústria</a></li>
                           </ul>
                    </div>
                    <div class="nomes_menu_todos_os_produtos_partes2">
                        <ul>
                            <li><a>Acessórios de Tecnologia</a></li>
                            <li><a>Ar e Ventilação</a></li>
                            <li><a>Artesanato</a></li>
                            <li><a>Artigos para Festa</a></li>
                            <li><a>Áudio</a></li>
                            <li><a>Automotivo</a></li>
                            <li><a>Bebês</a></li>
                            <li><a>Beleza e Perfumaria</a></li>
                            <li><a>Brinquedos</a></li>
                            <li><a>Cama, Mesa e Banho</a></li>
                            <li><a>Câmeras e Drones</a></li>
                            <li><a>Casa e Construção</a></li>
                            <li><a>Celulares</a></li>
                            <li><a>Colchões</a></li>
                            <li><a>Comércio e Indústria</a></li>
                           </ul>
                        </div>
                    </div>
                    <p><a href="" class="vbefhvb3">MANGAR</a></p>
                    <div class="nomes_menu_todos_os_produtos3 eveverbd">
                    <div class="nomes_menu_todos_os_produtos_partes3">
                       <ul>
                        <li><a href="">Acessórios de Tecnologia</a></li>
                        <li><a>Ar e Ventilação</a></li>
                        <li><a>Artesanato</a></li>
                        <li><a>Artigos para Festa</a></li>
                        <li><a>Áudio</a></li>
                        <li><a>Automotivo</a></li>
                        <li><a>Bebês</a></li>
                        <li><a>Beleza e Perfumaria</a></li>
                        <li><a>Brinquedos</a></li>
                        <li><a>Cama, Mesa e Banho</a></li>
                        <li><a>Câmeras e Drones</a></li>
                        <li><a>Casa e Construção</a></li>
                        <li><a>Celulares</a></li>
                        <li><a>Colchões</a></li>
                        <li><a>Comércio e Indústria</a></li>
                       </ul>
                    </div>
                    <div class="nomes_menu_todos_os_produtos_partes3">
                        <ul>
                            <li><a>Acessórios de Tecnologia</a></li>
                            <li><a>Ar e Ventilação</a></li>
                            <li><a>Artesanato</a></li>
                            <li><a>Artigos para Festa</a></li>
                            <li><a>Áudio</a></li>
                            <li><a>Automotivo</a></li>
                            <li><a>Bebês</a></li>
                            <li><a>Beleza e Perfumaria</a></li>
                            <li><a>Brinquedos</a></li>
                            <li><a>Cama, Mesa e Banho</a></li>
                            <li><a>Câmeras e Drones</a></li>
                            <li><a>Casa e Construção</a></li>
                            <li><a>Celulares</a></li>
                            <li><a>Colchões</a></li>
                            <li><a>Comércio e Indústria</a></li>
                           </ul>
                    </div>
                    </div>
                    <p><a href="" class="vbefhvb4">MANGAR</a></p>
                    <div class="nomes_menu_todos_os_produtos4 eveverbd">
                    <div class="nomes_menu_todos_os_produtos_partes4">
                       <ul>
                        <li><a href="">Acessórios de Tecnologia</a></li>
                        <li><a>Ar e Ventilação</a></li>
                        <li><a>Artesanato</a></li>
                        <li><a>Artigos para Festa</a></li>
                        <li><a>Áudio</a></li>
                        <li><a>Automotivo</a></li>
                        <li><a>Bebês</a></li>
                        <li><a>Beleza e Perfumaria</a></li>
                        <li><a>Brinquedos</a></li>
                        <li><a>Cama, Mesa e Banho</a></li>
                        <li><a>Câmeras e Drones</a></li>
                        <li><a>Casa e Construção</a></li>
                        <li><a>Celulares</a></li>
                        <li><a>Colchões</a></li>
                        <li><a>Comércio e Indústria</a></li>
                       </ul>
                    </div>
                    <div class="nomes_menu_todos_os_produtos_partes4">
                        <ul>
                            <li><a>Acessórios de Tecnologia</a></li>
                            <li><a>Ar e Ventilação</a></li>
                            <li><a>Artesanato</a></li>
                            <li><a>Artigos para Festa</a></li>
                            <li><a>Áudio</a></li>
                            <li><a>Automotivo</a></li>
                            <li><a>Bebês</a></li>
                            <li><a>Beleza e Perfumaria</a></li>
                            <li><a>Brinquedos</a></li>
                            <li><a>Cama, Mesa e Banho</a></li>
                            <li><a>Câmeras e Drones</a></li>
                            <li><a>Casa e Construção</a></li>
                            <li><a>Celulares</a></li>
                            <li><a>Colchões</a></li>
                            <li><a>Comércio e Indústria</a></li>
                           </ul>
                    </div>
                    </div>
                    <p><a href="" class="vbefhvb5">MANGAR</a></p>
                    <div class="nomes_menu_todos_os_produtos5 eveverbd">
                    <div class="nomes_menu_todos_os_produtos_partes5">
                       <ul>
                        <li><a href="">Acessórios de Tecnologia</a></li>
                        <li><a>Ar e Ventilação</a></li>
                        <li><a>Artesanato</a></li>
                        <li><a>Artigos para Festa</a></li>
                        <li><a>Áudio</a></li>
                        <li><a>Automotivo</a></li>
                        <li><a>Bebês</a></li>
                        <li><a>Beleza e Perfumaria</a></li>
                        <li><a>Brinquedos</a></li>
                        <li><a>Cama, Mesa e Banho</a></li>
                        <li><a>Câmeras e Drones</a></li>
                        <li><a>Casa e Construção</a></li>
                        <li><a>Celulares</a></li>
                        <li><a>Colchões</a></li>
                        <li><a>Comércio e Indústria</a></li>
                       </ul>
                    </div>
                    <div class="nomes_menu_todos_os_produtos_partes5">
                        <ul>
                            <li><a>Acessórios de Tecnologia</a></li>
                            <li><a>Ar e Ventilação</a></li>
                            <li><a>Artesanato</a></li>
                            <li><a>Artigos para Festa</a></li>
                            <li><a>Áudio</a></li>
                            <li><a>Automotivo</a></li>
                            <li><a>Bebês</a></li>
                            <li><a>Beleza e Perfumaria</a></li>
                            <li><a>Brinquedos</a></li>
                            <li><a>Cama, Mesa e Banho</a></li>
                            <li><a>Câmeras e Drones</a></li>
                            <li><a>Casa e Construção</a></li>
                            <li><a>Celulares</a></li>
                            <li><a>Colchões</a></li>
                            <li><a>Comércio e Indústria</a></li>
                           </ul>
                    </div>
                    </div>
                    <p><a href="" class="vbefhvb6">MANGAR</a></p>
                    <div class="nomes_menu_todos_os_produtos6 eveverbd">
                    <div class="nomes_menu_todos_os_produtos_partes6">
                       <ul>
                        <li><a href="">Acessórios de Tecnologia</a></li>
                        <li><a>Ar e Ventilação</a></li>
                        <li><a>Artesanato</a></li>
                        <li><a>Artigos para Festa</a></li>
                        <li><a>Áudio</a></li>
                        <li><a>Automotivo</a></li>
                        <li><a>Bebês</a></li>
                        <li><a>Beleza e Perfumaria</a></li>
                        <li><a>Brinquedos</a></li>
                        <li><a>Cama, Mesa e Banho</a></li>
                        <li><a>Câmeras e Drones</a></li>
                        <li><a>Casa e Construção</a></li>
                        <li><a>Celulares</a></li>
                        <li><a>Colchões</a></li>
                        <li><a>Comércio e Indústria</a></li>
                       </ul>
                    </div>
                    <div class="nomes_menu_todos_os_produtos_partes6">
                        <ul>
                            <li><a>Acessórios de Tecnologia</a></li>
                            <li><a>Ar e Ventilação</a></li>
                            <li><a>Artesanato</a></li>
                            <li><a>Artigos para Festa</a></li>
                            <li><a>Áudio</a></li>
                            <li><a>Automotivo</a></li>
                            <li><a>Bebês</a></li>
                            <li><a>Beleza e Perfumaria</a></li>
                            <li><a>Brinquedos</a></li>
                            <li><a>Cama, Mesa e Banho</a></li>
                            <li><a>Câmeras e Drones</a></li>
                            <li><a>Casa e Construção</a></li>
                            <li><a>Celulares</a></li>
                            <li><a>Colchões</a></li>
                            <li><a>Comércio e Indústria</a></li>
                           </ul>
                    </div>
                    </div>
                    <p><a href="" class="vbefhvb7">MANGAR</a></p>
                    <div class="nomes_menu_todos_os_produtos7 eveverbd">
                    <div class="nomes_menu_todos_os_produtos_partes7">
                       <ul>
                        <li><a href="">Acessórios de Tecnologia</a></li>
                        <li><a>Ar e Ventilação</a></li>
                        <li><a>Artesanato</a></li>
                        <li><a>Artigos para Festa</a></li>
                        <li><a>Áudio</a></li>
                        <li><a>Automotivo</a></li>
                        <li><a>Bebês</a></li>
                        <li><a>Beleza e Perfumaria</a></li>
                        <li><a>Brinquedos</a></li>
                        <li><a>Cama, Mesa e Banho</a></li>
                        <li><a>Câmeras e Drones</a></li>
                        <li><a>Casa e Construção</a></li>
                        <li><a>Celulares</a></li>
                        <li><a>Colchões</a></li>
                        <li><a>Comércio e Indústria</a></li>
                       </ul>
                    </div>
                    <div class="nomes_menu_todos_os_produtos_partes7">
                        <ul>
                            <li><a>Acessórios de Tecnologia</a></li>
                            <li><a>Ar e Ventilação</a></li>
                            <li><a>Artesanato</a></li>
                            <li><a>Artigos para Festa</a></li>
                            <li><a>Áudio</a></li>
                            <li><a>Automotivo</a></li>
                            <li><a>Bebês</a></li>
                            <li><a>Beleza e Perfumaria</a></li>
                            <li><a>Brinquedos</a></li>
                            <li><a>Cama, Mesa e Banho</a></li>
                            <li><a>Câmeras e Drones</a></li>
                            <li><a>Casa e Construção</a></li>
                            <li><a>Celulares</a></li>
                            <li><a>Colchões</a></li>
                            <li><a>Comércio e Indústria</a></li>
                           </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="categoria_menu">
            <img src="./_IMG/1027_tarja_desk.jpg" alt="" srcset="">
        </div>
        <?php 
        if($logado != 10){
        ?>
        <div class="anuncio_p_afiliar">
            <div class="anuncio_p_afiliar_parte1">
                <p>Cadastre e tenha ofertas exclusivas hoje mesmo</p>
                <p>A depender do valor da compra, você ganhará oferta gratis</p>
                <a href=""><input type="submit" value="Cadastrar"></a>
            </div>
            <div class="anuncio_p_afiliar_parte2">
                <img src="./_IMG/pexels-photo-1474961.jpeg" alt="" srcset="">
            </div>
        </div>
        <?php }?>
    </nav>
    <div class="container">
        <div class="produtos_recentes">
            <p>Produtos adicionados recentemente</p>
            <div class="produtos_recentes_vendas">
                <div class="favoritos_cell agvwefve jhxgcfe"></div>
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_recentes_img">
                <p>Smart TV 4K LED 50” samsung Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                <p>ESTRELAS</p>
                <p>R$: 2000,00</p>
                <p>12x de 160,00 sem juros</p>
                <button><a href="">ADICIONAR NA SACOLA</a></button>
            </div>
            <div class="produtos_recentes_vendas">
                <div class="favoritos_cell bgvwefve jhxgcfe"></div>
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_recentes_img">
                <p>Smart TV 4K LED 50” samsung Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                <p>ESTRELAS</p>
                <p>R$: 2000,00</p>
                <p>12x de 160,00 sem juros</p>
                <button><a href="">ADICIONAR AO CARRINNHO</a></button>
            </div>
            <div class="produtos_recentes_vendas">
                <div class="favoritos_cell cgvwefve jhxgcfe"></div>
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_recentes_img">
                <p>Smart TV 4K LED 50” samsung Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                <p>ESTRELAS</p>
                <p>R$: 2000,00</p>
                <p>12x de 160,00 sem juros</p>
                <button><a href="">ADICIONAR NA SACOLA</a></button>
            </div>
            <div class="produtos_recentes_vendas">
                <div class="favoritos_cell dgvwefve jhxgcfe"></div>
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_recentes_img">
                <p>Smart TV 4K LED 50” samsung Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                <p>ESTRELAS</p>
                <p>R$: 2000,00</p>
                <p>12x de 160,00 sem juros</p>
                <button><a href="">ADICIONAR NA SACOLA</a></button>
            </div>
            <div class="produtos_recentes_vendas">
                <div class="favoritos_cell egvwefve jhxgcfe"></div>
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_recentes_img">
                <p>Smart TV 4K LED 50” samsung Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                <p>ESTRELAS</p>
                <p>R$: 2000,00</p>
                <p>12x de 160,00 sem juros</p>
                <button><a href="">ADICIONAR NA SACOLA</a></button>
            </div>
            <div class="produtos_recentes_vendas">
                <div class="favoritos_cell fgvwefve jhxgcfe"></div>
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_recentes_img">
                <p>Smart TV 4K LED 50” samsung Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                <p>ESTRELAS</p>
                <p>R$: 2000,00</p>
                <p>12x de 160,00 sem juros</p>
                <button><a href="">ADICIONAR NA SACOLA</a></button>
            </div>
        </div>
        <div class="produtos_promocao">
            <p>Alguns produtos em promoção</p>
            <div class="produtos_promocao_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_promocao_img">
                <div class="produtos_promocao_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="produtos_promocao_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_promocao_img">
                <div class="produtos_promocao_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="produtos_promocao_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_promocao_img">
                <div class="produtos_promocao_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="produtos_promocao_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_promocao_img">
                <div class="produtos_promocao_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="produtos_promocao_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_promocao_img">
                <div class="produtos_promocao_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="produtos_promocao_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_promocao_img">
                <div class="produtos_promocao_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="ver_mais">
                <a href="">
                    <p>Ver mais produtos</p>
                </a>
                <img src="./_IMG/ic_chevron_right_black_18dp.png" alt="" class="ver_mais_img">
            </div>
        </div>
        <div class="entrar">
            <p>Seja Bem Vindo ao Empório Otaku, Cadastre-se ou Entre para ficar por dentro de tudo</p>
            <a href=""><input type="submit" value="Navegar"></a>
        </div>
        <div class="produtos_maisvendidos">
            <p>Produtos mais vendido</p>
            <div class="produtos_maisvendidos_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_maisvendidos_img">
                <p>Notebook Sansung</p>
                <p>R$ 2000,00</p>
                <p>estrelas</p>
            </div>
            <div class="produtos_maisvendidos_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_maisvendidos_img">
                <p>Notebook Sansung</p>
                <p>R$ 2000,00</p>
                <p>estrelas</p>
            </div>
            <div class="produtos_maisvendidos_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_maisvendidos_img">
                <p>Notebook Sansung</p>
                <p>R$ 2000,00</p>
                <p>estrelas</p>
            </div>
            <div class="produtos_maisvendidos_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_maisvendidos_img">
                <p>Notebook Sansung</p>
                <p>R$ 2000,00</p>
                <p>estrelas</p>
            </div>
            <div class="produtos_maisvendidos_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_maisvendidos_img">
                <p>Notebook Sansung</p>
                <p>R$ 2000,00</p>
                <p>estrelas</p>
            </div>
            <div class="produtos_maisvendidos_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_maisvendidos_img">
                <p>Notebook Sansung</p>
                <p>R$ 2000,00</p>
                <p>estrelas</p>
            </div>
        </div>
        <div class="produtos_querido">
            <p>Mangar mais vendidos</p>
            <div class="produtos_querido_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_querido_img">
                <div class="produtos_querido_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="produtos_querido_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_querido_img">
                <div class="produtos_querido_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="produtos_querido_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_querido_img">
                <div class="produtos_querido_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="produtos_querido_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_querido_img">
                <div class="produtos_querido_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="produtos_querido_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_querido_img">
                <div class="produtos_querido_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
            <div class="produtos_querido_vendas">
                <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" class="produtos_querido_img">
                <div class="produtos_querido_vendas_p">
                    <p>estrela</p>
                    <p>notebook cinza...</p>
                    <p>r$ 2000,00</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container_pc">

        <div class="produtos_recentes_pc">
            <a href=""><div class="produtos_recentes_pc_vendas">
                <div class="produtos_recentes_pc_vendas_img">
                    <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" srcset="">
                </div>
                <div class="produtos_recentes_pc_vendas_texto">
                    <p>Smart TV 4K LED 50” Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                    <p>ESTRELAS</p>
                    <p>R$: 2000,00</p>
                    <p>Ate 12x de 160,00 sem juros</p>
                    <a href=""><input type="submit" value="COmpra"></a>
                </div>
                <div class="favoritos_pc afasdfcsf sztsvdr"></div>
            </div>
            </a>
            <div class="produtos_recentes_pc_vendas">
                <div class="produtos_recentes_pc_vendas_img">
                    <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" srcset="">
                </div>
                <div class="produtos_recentes_pc_vendas_texto">
                    <p>Smart TV 4K LED 50” Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                    <p>ESTRELAS</p>
                    <p>R$: 2000,00</p>
                    <p>12x de 160,00 sem juros</p>
                    <a href=""><input type="submit" value="COmpra"></a>
                </div>
                <div class="favoritos_pc bfasdfcsf sztsvdr"></div>
            </div>
            <div class="produtos_recentes_pc_vendas">
                <div class="produtos_recentes_pc_vendas_img">
                    <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" srcset="">
                </div>
                <div class="produtos_recentes_pc_vendas_texto">
                    <p>Smart TV 4K LED 50” Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                    <p>ESTRELAS</p>
                    <p>R$: 2000,00</p>
                    <p>12x de 160,00 sem juros</p>
                    <a href=""><input type="submit" value="COmpra"></a>
                </div>
                <div class="favoritos_pc cfasdfcsf sztsvdr"></div>
            </div>
            <div class="produtos_recentes_pc_vendas">
                <div class="produtos_recentes_pc_vendas_img">
                    <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" srcset="">
                </div>
                <div class="produtos_recentes_pc_vendas_texto">
                    <p>Smart TV 4K LED 50” Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                    <p>ESTRELAS</p>
                    <p>R$: 2000,00</p>
                    <p>12x de 160,00 sem juros</p>
                    <a href=""><input type="submit" value="COmpra"></a>
                </div>
                <div class="favoritos_pc dfasdfcsf sztsvdr"></div>
            </div>
            <div class="produtos_recentes_pc_vendas">
                <div class="produtos_recentes_pc_vendas_img">
                    <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" srcset="">
                </div>
                <div class="produtos_recentes_pc_vendas_texto">
                    <p>Smart TV 4K LED 50” Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                    <p>ESTRELAS</p>
                    <p>R$: 2000,00</p>
                    <p>12x de 160,00 sem juros</p>
                    <a href=""><input type="submit" value="COmpra"></a>
                </div>
                <div class="favoritos_pc efasdfcsf sztsvdr"></div>
            </div>
            <div class="produtos_recentes_pc_vendas">
                <div class="produtos_recentes_pc_vendas_img">
                    <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" srcset="">
                </div>
                <div class="produtos_recentes_pc_vendas_texto">
                    <p>Smart TV 4K LED 50” Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                    <p>ESTRELAS</p>
                    <p>R$: 2000,00</p>
                    <p>12x de 160,00 sem juros</p>
                    <a href=""><input type="submit" value="COmpra"></a>
                </div>
                <div class="favoritos_pc ffasdfcsf sztsvdr"></div>
            </div>
            <div class="produtos_recentes_pc_vendas">
                <div class="produtos_recentes_pc_vendas_img">
                    <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" srcset="">
                </div>
                <div class="produtos_recentes_pc_vendas_texto">
                    <p>Smart TV 4K LED 50” Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                    <p>ESTRELAS</p>
                    <p>R$: 2000,00</p>
                    <p>12x de 160,00 sem juros</p>
                    <a href=""><input type="submit" value="COmpra"></a>
                </div>
                <div class="favoritos_pc gfasdfcsf sztsvdr"></div>
            </div>
            <div class="produtos_recentes_pc_vendas">
                <div class="produtos_recentes_pc_vendas_img">
                    <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" srcset="">
                </div>
                <div class="produtos_recentes_pc_vendas_texto">
                    <p>Smart TV 4K LED 50” Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                    <p>ESTRELAS</p>
                    <p>R$: 2000,00</p>
                    <p>12x de 160,00 sem juros</p>
                    <a href=""><input type="submit" value="COmpra"></a>
                </div>
                <div class="favoritos_pc ifasdfcsf sztsvdr"></div>
            </div>
            <div class="produtos_recentes_pc_vendas">
                <div class="produtos_recentes_pc_vendas_img">
                    <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" srcset="">
                </div>
                <div class="produtos_recentes_pc_vendas_texto">
                    <p>Smart TV 4K LED 50” Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                    <p>ESTRELAS</p>
                    <p>R$: 2000,00</p>
                    <p>12x de 160,00 sem juros</p>
                    <a href=""><input type="submit" value="COmpra"></a>
                </div>
                <div class="favoritos_pc kfasdfcsf sztsvdr"></div>
            </div>
            <div class="produtos_recentes_pc_vendas">
                <div class="produtos_recentes_pc_vendas_img">
                    <img src="./_IMG_PRODUTOS/Melhor-Notebook-Custo-Beneficio.jpg" alt="" srcset="">
                </div>
                <div class="produtos_recentes_pc_vendas_texto">
                    <p>Smart TV 4K LED 50” Samsung UN50RU7100 Wi-Fi Bluetooth... </p>
                    <p>ESTRELAS</p>
                    <p>R$: 2000,00</p>
                    <p>12x de 160,00 sem juros</p>
                    <a href=""><input type="submit" value="COmpra"></a>
                </div>
                <div class="favoritos_pc lfasdfcsf sztsvdr"></div>
            </div>
      
            
        </div>
        <div class="curiosidades">
            <div class="curiosidades_dividir">
                <div class="curiosidades_anuncio">
                <div class="primeiro">
                    <p>Compre com segurança</p>
                    <p>Pagamento fácil e rápido</p>
                    <p>aqui no <b>Empório Otaku</b></p>
                    </div>
                </div>
                <div class="curiosidades_anuncio">
                    <div class="credito">
                    <img src="./_IMG/ic_credit_card_grey600_18dp.png" alt="" srcset="">
                    <p>Pague em até 12 vezes.</p>
                    <p>Pagamento fácil e rápido,</p>
                    <p>aqui no Empório Otaku</p>
                    </div>
                </div>
                <div class="curiosidades_anuncio">
                    <div class="credito terceiro">
                    <img src="./_IMG/ic_wallet_giftcard_grey600_18dp.png" alt="" srcset="">
                    <p>Frete grátis a partir de</p>
                    <p>R$: 150,00</p>
                    <p class="saiba_curiosidades"><a href="">Saiba mais</a></p>
                    </div>
                </div>
                <div class="curiosidades_anuncio">
                    <div class="credito">
                    <img src="./_IMG/ic_https_grey600_18dp.png" alt="" srcset="">
                    <p>Segurança, do início ao fim</p>
                    <p>todas suas informações</p>
                    <p>ficaram privadas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>Empório Otaku</p>
        <p>Todos os direitos reservados &copy; 2020 </p>
    </footer>
    <script src="./_JS/main.js"></script>
</body>

</html>


<?php } ?>