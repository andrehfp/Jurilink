<?php
require_once '../template/header.php'; //chama o header
require_once ( '../config.php');     //chama as configurações de página!


session_start();
if(!isset($_SESSION['usuario'])) header("location:logout.php");

$pesq_uf = pg_exec($conexao1, "select * from uf order by nome");
$resultado = pg_fetch_object($pesq_uf);
?>

<div class="container">

    <form id="form_pessoa" class="form-horizontal pessoaAjaxForm" method="post" action="../operacoes/CPessoa/incluir_pessoa_rollback_op.php">
        <fieldset>

            <!--Campos formulário -->

            <legend>Cadastrar nova pessoa</legend>

            <div id="tipo" class="control-group ">
                <label class="control-label" for="tipo">Tipo</label>

                <div class="controls">
                    <label class="radio">
                        <input type="radio" name="tipo" id="optionsRadios1" value="0" >
                        Fisica
                    </label>
                    <label class="radio">
                        <input type="radio" name="tipo" id="optionsRadios2" value="1">
                        Juridica
                    </label>
                    <label class="radio">
                        <input type="radio" name="tipo" id="optionsRadios3" value="2">
                        Advogado
                    </label>
                </div>

                <div id="nome" class="control-group">
                    <label class="control-label" for="Nome">Nome</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="nome_input" name="nome">                       
                        <span  class="help-inline ">*</span>                    
                    </div>
                </div>

                <div id="oab" class="control-group">
                    <label class="control-label" for="oab">OAB</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="oab_input" name="oab">                       
                        <span  class="help-inline ">*</span>                    
                    </div>
                </div>

                <div id="cnpj" class="control-group">
                    <label class="control-label" for="cnpj">CNPJ</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="cnpj_input" name="cnpj">                       
                        <span  class="help-inline ">*</span>                    
                    </div>
                </div>

                <div id="cpf" class="control-group">
                    <label class="control-label" for="cpf">CPF</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="cpf_input" name="cpf">                       
                        <span  class="help-inline ">*</span>                    
                    </div>
                </div>

                <div id="rg" class="control-group">
                    <label class="control-label" for="rg">RG</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="rg_input" name="rg">                       
                        <span  class="help-inline ">*</span>                    
                    </div>
                </div>

                <div id="comarca" class="control-group">
                    <label class="control-label" for="rg">Orgao Expedidor</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="comarca_input" name="comarca">                       
                        <span  class="help-inline ">*</span>                    
                    </div>
                </div>

                <div id="endereco"class="control-group ">
                    <label class="control-label" for="endereco">Endereco</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="endereco_input" name="endereco">     
                        <span  class="help-inline ">*</span> 
                    </div>
                </div>

                <div id="bairro"class="control-group ">
                    <label class="control-label" for="bairro">Bairro</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="bairro_input" name="bairro">     
                        <span  class="help-inline ">*</span> 
                    </div>
                </div>

                <div id="cidade" class="control-group ">
                    <label class="control-label" for="cidade">Cidade</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="cidade_input" name="cidade">       
                        <span  class="help-inline ">*</span> 
                    </div>
                </div>

                <div id="estado" class="control-group">
                    <label class="control-label" for="Estado">Estado</label>
                    <div class="controls">                    
                        <select  name="estado" id="estado_input">
                            <option value="-1">-</option>
                            <?php
                            if ($resultado->id_uf != NULL) {
                                do {
                                    echo "<option value=$resultado->id_uf>$resultado->nome</option>";
                                } while ($resultado = pg_fetch_object($pesq_uf));
                            }
                            ?>                     
                        </select>
                        <span  class="help-inline "><i class="icon-search"></i></span>
                    </div>
                </div>

                <div id="telefone" class="control-group ">
                    <label class="control-label" for="telefone">Telefone</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="telefone_input" name="telefone">    
                        <span  class="help-inline ">*</span> 
                    </div>
                </div>

                <div id="email" class="control-group ">
                    <label class="control-label" for="email">Email</label>
                    <div class="controls">                        
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span><input class="input-large" id="email_input" name="email" type="text">
                        </div>
                        <span class="help-inline">*</span>
                    </div>
                </div>     

                <div id="user" class="control-group">
                    <label class="control-label" for="userCheckbox">User</label>
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" name="userCheckbox" id="userCheckbox" value="1">
                            A pessoa cadastrada tera acesso ao sistema
                        </label>
                    </div>                    
                </div>

                <div id="senha" class="control-group ">
                    <label class="control-label" for="telefone">Senha</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="senha_input" name="senha">    
                        <span  class="help-inline ">*</span> 
                    </div>
                </div>

                <!--Botões do formulário -->
                <div class="form-actions">
                    <button  id ="enviar"  type="button" class="btn btn-primary submit-pessoa">Salvar</button>
                    <button  type="button" class="btn">Cancelar</button>
                </div>

            </div>

        </fieldset>

    </form> 
    
</div> <!-- container -->

<?php
require_once '../template/scripts.php';
require_once 'scripts_cadastrar_pessoa.php';
?>
