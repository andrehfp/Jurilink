
//Variável para evitar conflito JQUERY ~ PROTOTYPE
var $a = jQuery.noConflict();

var id=666;

//Quando a janela carregar, executa iniDrag
//Não há () no iniDrag pq estou apenas referenciando e não executando a função
window.onload = iniDrag;
  
//Função executada ao carregamento da página   
function iniDrag(){
    
    //obtém um array com todos os objetos DIV
    var  divs =  document.getElementsByTagName('div');                        
    
                
    for( var i=0; i< divs.length ; i++){
        
        //se a div for da classe especificada
        if( divs[i].className == 'drag'){                      
                                    
            //coloca um id nessa div, pois o prototype só trabalha com ids!                        
            divs[i].id= "drag"+i;       
                       
            //torna a div draggable
            new Draggable(
                divs[i].id, 
                {
                    revert: true                              
                }); 
        }
         
        if( divs[i].className == 'span6 drop' || divs[i].className == 'span12 drop'){
            
            //coloca um id nessa div, pois o prototype só trabalha com ids!                        
            divs[i].id= "drag"+i;     
            
            //torna a div droppable   
            Droppables.add(
                divs[i].id,
                {
                    hoverclass: 'hoverActive',
                    onDrop: moveItem
                }
                );
                    
            // Set drop area by default  non cleared.
            $( divs[i].id).cleared = false;                                                                                         
        
        } //if              
    }     //for            
}

function moveItem( draggable,droparea){
    /*if (!droparea.cleared) {
        droparea.innerHTML = '';
        droparea.cleared = true;
    }*/
    draggable.parentNode.removeChild(draggable);
    droparea.appendChild(draggable);         
      
}
            
            
function pegaId(){
    alert(this.id);
}


function pessoaAjax(){


    /* stop form from submitting normally */
    event.preventDefault(); 
        
    /* get some values from elements on the page: */
    var $form = $a( '.pessoaAjaxForm' ),
    nome = $form.find( 'input[name="nome"]' ).val(),
    tipo = $form.find( 'input[name="tipo"]:checked' ).val(),
    oab = $form.find( 'input[name="oab"]' ).val(),
    cnpj = $form.find( 'input[name="cnpj"]' ).val(),
    cpf = $form.find( 'input[name="cpf"]' ).val(),
    rg = $form.find( 'input[name="rg"]' ).val(),
    comarca = $form.find( 'input[name="comarca"]' ).val(),
    cidade = $form.find( 'input[name="cidade"]' ).val(),
    endereco = $form.find( 'input[name="endereco"]' ).val(),
    bairro = $form.find( 'input[name="bairro"]' ).val(),
    estado = $form.find( 'option').filter(':selected' ).val(),
    tel = $form.find( 'input[name="telefone"]' ).val(),
    email = $form.find( 'input[name="email"]' ).val(),
    user = $form.find( 'input[name="userCheckbox"]:checked' ).val(),
    senha = $form.find( 'input[name="senha"]' ).val(),        
    url = $form.attr( 'action' );
        
    //alert(estado);
        
    $a.post(url,{
        nome:nome,
        tipo:tipo,
        oab:oab,
        cnpj:cnpj,
        cpf:cpf,
        rg:rg,
        comarca:comarca,
        cidade:cidade,
        endereco:endereco,
        bairro:bairro,
        estado:estado,
        telefone:tel,
        email:email,
        userCheckbox:user,
        senha:senha
    },function(data){
        if(data==1){
            alert("FOI");
        }
        else{
            alert(data);
        }
    });             
}

function validaFormPessoaJS(){
    var mandar = false;      

    var form_validate= $a(".pessoaAjaxForm").validate({         
        /* showErrors: function(errorMap, errorList) {
                // Do nothing here
            },*/
        submitHandler: function(form) {
            $(form).ajaxSubmit();
        },
            
        rules:{
            nome:{
                required: true, 
                minlength: 2
            },
            endereco:{
                required: true, 
                minlength: 2
            },
            cidade:{
                required: true, 
                minlength: 2
            },
            estado:{
                  
            },
            telefone:{
                required: true, 
                minlength: 2
            },
            email:{
                email: true, 
                required:true
            }                                
        }         
    }); 
        
        
    /*Eventos OnBlur para conferir dados*/
    $a("#nome_input").blur(function(){          
        if(form_validate.element("#nome_input")==false){
            $a("#nome").removeClass("control-group").addClass("control-group error");          
            mandar = false;
        }                  
        else{
            $a("#nome").removeClass("control-group error").addClass("control-group");
            mandar = true;
        }
            
    });
      
    $a("#endereco_input").blur(function(){          
        if(form_validate.element("#endereco_input")==false){
            $a("#endereco").removeClass("control-group").addClass("control-group error");    
            mandar = false;
        }           
        else{
            $a("#endereco").removeClass("control-group error").addClass("control-group");
            mandar = true;
        }
            
    });

    $a("#cidade_input").blur(function(){          
        if(form_validate.element("#cidade_input")==false){
            $a("#cidade").removeClass("control-group").addClass("control-group error");         
            mandar = false;
        }           
        else{
            $a("#cidade").removeClass("control-group error").addClass("control-group");
            mandar = true;
        }
            
    });
        
    $a("#estado_input").blur(function(){          
        if(form_validate.element("#estado_input")==false){
            $a("#estado").removeClass("control-group").addClass("control-group error");    
            mandar = false;
        }
        else{               
            $a("#estado").removeClass("control-group error").addClass("control-group");
            mandar = true;
        }
            
    });
        
    $a("#telefone_input").blur(function(){          
        if(form_validate.element("#telefone_input")==false){
            $a("#telefone").removeClass("control-group").addClass("control-group error");   
            mandar = false;
        }       
        else{
            $a("#telefone").removeClass("control-group error").addClass("control-group");
        }
            
    });
        
    $a("#email_input").blur(function(){          
        if(form_validate.element("#email_input")==false){
            $a("#email").removeClass("control-group").addClass("control-group error");       
            mandar = false;
        }      
        else{
            $a("#email").removeClass("control-group error").addClass("control-group");
            mandar = true;
        }
            
    });
        
    /*-----------------------------------------------*/        
    /* Mudança da CSS dos campos quando clicar no SALVAR*/
        
    $a(".submit-pessoa").click(function(){                       
                     
        if(form_validate.element("#nome_input")==false){
            $a("#nome").removeClass("control-group").addClass("control-group error");          
            mandar = false;
        }                  
        else{
            $a("#nome").removeClass("control-group error").addClass("control-group");
            mandar = true;
        }           
             
      
        if(form_validate.element("#endereco_input")==false){
            $a("#endereco").removeClass("control-group").addClass("control-group error");    
            mandar = false;
        }           
        else{
            $a("#endereco").removeClass("control-group error").addClass("control-group");
            mandar = true;
        }          
                    
        if(form_validate.element("#cidade_input")==false){
            $a("#cidade").removeClass("control-group").addClass("control-group error");         
            mandar = false;
        }           
        else{
            $a("#cidade").removeClass("control-group error").addClass("control-group");
            mandar = true;
        }           
                     
        if(form_validate.element("#estado_input")==false){
            $a("#estado").removeClass("control-group").addClass("control-group error");    
            mandar = false;
        }
        else{               
            $a("#estado").removeClass("control-group error").addClass("control-group");
            mandar = true;
        }          
                   
                    
        if(form_validate.element("#telefone_input")==false){
            $a("#telefone").removeClass("control-group").addClass("control-group error");   
            mandar = false;
        }       
        else{
            $a("#telefone").removeClass("control-group error").addClass("control-group");
        }        
               
        if(form_validate.element("#email_input")==false){
            $a("#email").removeClass("control-group").addClass("control-group error");       
            mandar = false;
        }      
        else{
            $a("#email").removeClass("control-group error").addClass("control-group");
            mandar = true;
        }   
        
        if(mandar ==true){
            pessoaAjax();
        }
    });    
    
}

//Função de JQUERY
$a(document).ready(function(){   
    
    validaFormPessoaJS();
   
   
    
  
   		
});

