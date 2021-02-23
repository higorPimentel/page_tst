<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

          
     <link  rel='stylesheet' href='css/frmt.css'>    
    <title>Document</title>
</head>
<body>
    
<header id='header'>
    
        <div id='container-img'>
            <img src="img/logo.jpg" alt="">
        </div>


        <div id='lista_opcoes'>
            <ul>
                <li id='primary_item'>Produtos<div class='simbolo_seta'>&rsaquo;</div></li>
                <li>Serviços e consultoria<div class='simbolo_seta'>&rsaquo;</div></li>
                <li>Tire suas dúvidas<div class='simbolo_seta'>&rsaquo;</div></li>
                <li>Explore mais<div class='simbolo_seta'>&rsaquo;</div></li>
            </ul>

        </div>

</header>



<div id='container_conteudo'>

    <div id='containter_submenu'>

    <div class='lista_sub_menu'>
                   <p  class='tit_sub_menu'>Principais produtos</p> 
                     <ul>
                        <li><a href='https://www.ibm.com/br-pt/products/?lnk=fdi'>Indústrias</a></li>
                        <li><a href=''>Inteligência Artificial</a></li>
                        <li><a href=''>Automation</a></li>
                        <li><a href=''>Blockchain</a></li>
                        <li><a href=''>Busines operations</a></li>
                        <li><a href=''>Cloud computing</a></li>
                        <li><a href=''>Data & Analytics</a></li>
                        <li><a href=''>Infraestrutura de TI</a></li>
                        <li><a href=''>Security</a></li>
                        <li><a href=''>Supply chain</a></li>
                        <li><a href=''>Financiamento</a></li>
                        <li><a href=''>Produtos</a></li>

                     </ul>
            </div> 

    
    </div>

    <h1> Portal do Candidato</h1>

        <p>Seja Bem vindo ao nosso portal de candidato. Preencha as informações nos campos abaixo, em seguida
            selecione o seu currículo para prosseguir.
        </p>
        <p>
        Utilize seu cadastro do Linkedin para imprtar seus dados e vincular em um novo cadastro, ou acesse a página inicial.
        </p>
        <form id="frm_registro">
                    
                    <div class="row">	
                            <div class="grupo_cxs col-6" id="grupo_cx_id">
                                <label class='lb_text'>Nome Completo</label>
                                <input class="cx_text" type="text" id="cx_nome" autofocus>											
                            </div>	
                    </div>

                    <div class="row">	
                            <div class="grupo_cxs col-3" id="grupo_cx_id">
                                <label class='lb_text'>Data de Nascimento</label>
                                <input class="cx_text" type="date" id="cx_dt_nascim" >											
                            </div>	

                            <div class="grupo_cxs col-3" id="grupo_cx_id">
                                <label class='lb_text'>Sexo</label>
                                   <select class="cx_text" id='cmb_sexo'>
                                      <option value="1">Masculino</option>
                                      <option value="2">Feminino</option>		
                                   </select>    									
                            </div>	
                    </div>

                    <div class="row">	
                            <div class="grupo_cxs col-3" id="grupo_cx_id">
                                <label class='lb_text'>Celular</label>
                                <input class="cx_text" type="text" id="cx_celular" >											
                            </div>	

                            <div class="grupo_cxs col-3" id="grupo_cx_id">
                                <label class='lb_text'>Email</label>
                                <input class="cx_text" type="text" id="cx_email" >											
                            </div>	
                    </div>

                    <div class="row">	
                            <div class="grupo_cxs col-3" id="grupo_cx_id">
                                <label class='lb_text'>Currículo (* DOC / DOCX / PDF)</label>
                                <input class="cx_text" type="file" id="cx_curriculo" >											
                            </div>	
                            
                    </div>

                    <div class="row">	
                            <div class="grupo_cxs col-3" id="grupo_cx_id">
                                   <input  type="button" id="btn_cadastra" value='Cadastrar' >											
                            </div>	
                            
                    </div>


        </form>


        <footer id='foot'>

               
            <div id='primary_list_foot' class='lista_foot'>
                   <p  class='tit_foot'>Saiba Mais</p> 
                     <ul>
                        <li><a href='https://www.ibm.com/br-pt/products/?lnk=fdi'>Produtos</a></li>
                        <li><a href='https://www.ibm.com/br-pt/products/trials?lnk=fdi_brpt'>Testes de software</a></li>
                        <li><a href='https://www.ibm.com/br-pt/services?lnk=fdi'>Serviços</a></li>
                        <li><a href='https://www.ibm.com/br-pt/industries?lnk=fdi_brpt'>Indústrias</a></li>
                        <li><a href='https://www.ibm.com/case-studies/search?search&lnk=fdi_brpt'>Estudos de Caso (US)</a></li>
                        <li><a href='https://www.ibm.com/thought-leadership/?lnk=fdi_brpt'>Dentro da IBM (US)</a></li>
                        <li><a href='https://www.ibm.com/br-pt/financing'>Financiamento</a></li>
                     </ul>
            </div> 

            <div class='lista_foot list_menor'>
                   <p class='tit_foot'>Informações para...</p> 
                     <ul>
                        <li><a href='https://developer.ibm.com/br/'>Desenvolvedores</li>
                        <li><a href='https://www.ibm.com/br-pt/products/partneratibm?lnk=hmmpr_brpt&lnk2=learn'>Parceiros Comerciais</li>
                        <li class='frmt_vazio'>.</li>
                        <li class='frmt_vazio'>.</li>
                        <li class='frmt_vazio'>.</li>
                        <li class='frmt_vazio'>.</li>
                    </ul>
            </div> 

            <div class='lista_foot list_menor'>
                   <p class='tit_foot'>Conecte-se conosco</p> 
                     <ul>
                        <li><a href='https://www.ibm.com/support/br/pt/?lnk=fcw_brpt'>Suporte</a></li>
                        <li><a href='https://www.ibm.com/partnerworld/bpdirectory/'>Localize um Parceiro de Negócios</a></li>
                        <li class='frmt_vazio'>.</li>
                        <li class='frmt_vazio'>.</li>
                        <li class='frmt_vazio'>.</li>
                        <li class='frmt_vazio'>.</li>
                     
                     </ul>
            </div> 

            <div class='lista_foot'>
                   <p class='tit_foot'>Sobre a IBM</p> 
                     <ul>
                        <li><a href='https://www.ibm.com/br-pt/employment/?lnk=fab'>Carreiras</a></li>
                        <li><a href='https://www.ibm.com/blogs/ibm-comunica/?lnk=fab'>Notícias mais recentes</a></li>
                        <li><a href='https://www.ibm.com/investor'>Relação com investidores</a></li>
                        <li><a href='https://www.ibm.com/ibm/responsibility/br-pt/?lnk=fab'>Responsabilidade corporativa</a></li>
                        <li><a href='https://www.ibm.com/br-pt/about?lnk=fab'>Sobre a IBM</a></li>
                        <li><a href='https://www.ibm.com/br-pt/about/ibm-brasil-100?lnk=fab'>100 anos IBM Brasil</a></li>
                     </ul>
            </div> 

        </footer>

        <div id='container_msg'>...</div>


</div>


    <script src='js/jquery-3.4.1.min.js'></script>
    <script src='js/frmt.js'></script>


</body>
</html>