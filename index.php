<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHPSergipe</title>
    <link rel="stylesheet" type="text/css" href="estrutura.css">
</head>
<body class="auto">

    <div class="container auto">
        <img src="imagem/logo-php.png" width="180" />
        <img class="float-right margin-top-38" src="imagem/banner-php.png" width="740" />
    </div>

    <nav class="violet-bg">
        <div class="container auto">
            <ul class="float-left w-70">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">ZCE Quiz</a></li>
                <li><a href="#">Discussão</a></li>
                <li><a href="#">Parceiros</a></li>
                <li><a href="#">Coordenação</a></li>
                <li><a href="#">Logo</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
        <div >
            <ul class="float-right w-30">
                <li><a href=""><img class="mt-5" src="imagem/face.png" width="30" heigth="30" /></a></li>
                <li><a href=""><img class="mt-5" src="imagem/twitter.png" width="30" heigth="30" /></a></li>
                <input class="color-gray hi-26 mt-16 w-30" type="text" name="busca" placeholder="Buscar no site" />
            </ul>
        </div>
    </nav>

    <div class="container auto">
        <div class="clear-float">
            <img class="border" src="imagem/banner-php.png" width="100%" />
        </div>
        <div class="float-left w-70">
            <h3>DESTAQUES</h3>
            <section>
                <?php
                    echo str_repeat(
                        '<article class="margin-top float-left">
                            <div class="float-left w-30">
                                <img src="imagem/php.jpg" width="160" height="120" />
                            </div>
                            <div class="float-left w-70">
                                <h2>Lorem Ipsum dolor sit</h2>
                                <p class="text-news">
                                Is simply dummy text of the printing and cubrid_column_types(req_identifier)etting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                                </p>
                            </div>   
                        </article>', 3); 
                ?>          
                <a class="clear-float float-right button" href="#">ver todos</a>
            </section>
            <h3 class="clear-float">PROJETOS</h3>
            <section class="mb-30">
            <?php
                echo str_repeat(
                '<article class="margin-top float-left">
                     <div class="float-left w-30">
                        <img src="imagem/gato.jpg" width="160" height="120" />
                     </div>
                     <div class="float-left w-70">
                        <h2>Lorem Ipsum dolor sit</h2>
                        <p class="text-news">
                        Is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                        </p>
                     </div>
                 </article>', 3)
            ?>
                <a class="clear-float float-right button" href="#">ver todos</a>
            </section>
        </div>

        <aside class="float-left w-30 p-10">
            <div class="box facebook-box ml-6">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FPHP-Sergipe%2F296232240477531&amp;width&amp;height=358&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:358px; width: 290px" allowTransparency="true">
                </iframe>
            </div> 
            <form class="box ml-6 border-box">
                <h4>ENQUETE</h4>
                <p class="margin-left fs-14">
                Você participaria de um evento PHP realizado pelo PHPSERGIPE?
                </p>
                <input class="margin-left mt-20 fs-14" type="checkbox" name="opcao" value="Sim"><label class="p-14 fs-14">Sim</label><br/>             
                <input class="margin-left mt-20 fs-14" type="checkbox" name="opcao" value="Não"><label class="p-14 fs-14">Não</label><br/>
                <input class="margin-left mt-20 mb-30 fs-14" type="checkbox" name="opcao" value="Talvez"><label class="p-14 fs-14">Talvez</label><br/>              
                <a class="button p-10-45 margin-left" href="#">Votar</a>
                <a class="margin-left link-result mt-20 mb-16"href="#">Ver resultados</a>
            </form> 
            <form class="box ml-6 border-box">
                <h4>NEWSLETTER</h4>          
                <input class="hi-30 w-70 margin-left bg-gray" type="text" name="nome" placeholder="Nome">
                <input class=" mt-10 hi-30 w-70 margin-left bg-gray" type="text" name="email" placeholder="exemplo@exemplo.com">
                <input class="button bc ml-125 mb-16" type="submit" value="Cadastrar">
            </form>
        </aside>
    </div>

    <footer class="clear-float">
        <div class="container auto">
            <address>
                &copy;PHPSERGIPE Brazil Users Group<br />
                Copyright &copy; 2015 Todos os direitos reservados.
            </address>
        </div>
    </footer>
</body>
</html>
