
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

    <head>
        <title>JuriLink ~ Basic</title>       
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="../../bootstrap/css/jurilink.css" />   
         
    </head>

    <body>
        <div class="navbar ">
            <div class="navbar-inner">
                <div class="container">                    
                    <a  class="brand" href="../../jurilink_main.php">JuriLink</a>  
                    <ul class="nav  pull-right">
                        <li><a href="#">Ajuda</a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#"  class="dropdown-toggle" data-toggle="dropdown">daani_hart@msn.com
                                <b class="caret"></b></a>
                            <ul id="menu2" class=" nav-list dropdown-menu">
                                <li>
                                    <a href="#">
                                        <i class="icon-user"></i>
                                        Conta
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="icon-off"> </i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="subnav">            
            <ul class="nav nav-pills">
                <li class="active"><a href="../../jurilink_main.php">Inicio</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pessoas
                        <b class="caret"></b></a>
                    <ul id="menu1" class="dropdown-menu">
                        <li><a href="../pessoa/cadastrar_pessoa.php">Clientes</a></li>
                        <li><a href="#">Advogados</a></li>
                        <li><a href="#">Outros</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Processos
                        <b class="caret"></b></a>
                    <ul id="menu2" class="dropdown-menu">
                        <li><a href="../../paginas/processo/cadastrar_processo.php">Incluir</a></li>
                        <li><a href="../../paginas/comarca/excluir_processo.php">Excluir</a></li>
                        <li><a href="#">Editar</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Comarcas
                        <b class="caret"></b></a>
                    <ul id="menu2" class="dropdown-menu">
                        <li><a href="../../paginas/comarca/cadastrar_comarca.php">Incluir</a></li>
                        <li><a href="../../paginas/comarca/excluir_comarca.php">Excluir</a></li>
                        <li><a href="#">Editar</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Juizos
                        <b class="caret"></b></a>
                    <ul id="menu3" class="dropdown-menu">
                        <li><a href="../../paginas/juizo/cadastrar_juizo.php">Incluir</a></li>
                        <li><a href="../../paginas/juizo/excluir_juizo.php">Excluir</a></li>
                        <li><a href="#">Editar</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Natureza
                        <b class="caret"></b></a>
                    <ul id="menu3" class="dropdown-menu">
                        <li><a href="../../paginas/natureza_acao/cadastrar_natureza_acao.php">Incluir</a></li>
                        <li><a href="../../paginas/natureza_acao/excluir_natureza_acao.php">Excluir</a></li>
                        <li><a href="#">Editar</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ato
                        <b class="caret"></b></a>
                    <ul id="menu3" class="dropdown-menu">
                        <li><a href="../../paginas/ato/cadastrar_ato.php">Incluir</a></li>
                        <li><a href=#>Excluir</a></li>
                        <li><a href="#">Editar</a></li>
                    </ul>
                </li>


            </ul>           
        </div>
