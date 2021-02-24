 frm =  document.querySelector('#frm_registro')
 frm.addEventListener('focus',aplica_foco,true)
 frm.addEventListener('blur',remove_foco,true)

 bt_cad =  document.querySelector('#btn_cadastra')
 bt_cad.addEventListener('click',cadastra_cv,true)

 list_opc = document.querySelector('#list_opc')
 list_opc.addEventListener('mousemove',exibe_sub_menu,true)


window.addEventListener('mousemove',desabilita_sub_menu,true)



function exibe_sub_menu (event){
	itm  = event.srcElement.id

		if(itm !== 'list_opc') {

				$(".lista_sub_menu").css('display','none')

				$(`#submenu_${itm}`).css('display','inline-block')
				$(`#submenu_${itm}`).css('transition','2.5s')

				$("#containter_submenu").css('display','inline-block')

				console.log(itm)

			}

}




function desabilita_sub_menu(event) {	
			var y =  event.pageY
			var x = event.pageX

				if (y > 555) {
					$('#containter_submenu').css('display','none')
				}

				if(x > 820 && y < 55 ) {
					$('#containter_submenu').css('display','none')
				}
			
}


 function aplica_foco(event){
 	itm = event.srcElement.id
 	$(`#${itm}`).css('borderBottom','solid 2px #3b6caa')

 }

  function remove_foco(event){
 	itm = event.srcElement.id
 	$(`#${itm}`).css('borderBottom','solid 2px #B5B5B5')
 }




 function cadastra_cv(){
	
	valida_campos()

		if(cmpos_valida == false) {			
			return		
		} 

		
		
			$.ajax({
				method:'POST',
				url:'cadastra_cv.php',
				data:
				{
					cx_nome:cx_nome,
					cx_dt_nascim:cx_dt_nascim,
					cmb_sexo:cmb_sexo,
					cx_celular:cx_celular,
					cx_email:cx_email,
					cx_curriculo:cx_curriculo
				},
				success:function(retorno){
					if(retorno == 1) {
						$("#page_confirmacao").css('display','inline-block')
					} else {
						$('#container_msg').css('display','block')
						$('#container_msg').html('Erro ao enviar currículo. Tente novamente em instantes...')
						setTimeout(inibe_msg,3000)
					}
				}	



			})



 }

 function valida_campos() {
	 cx_nome = $('#cx_nome').val() 
	 cx_dt_nascim = $('#cx_dt_nascim').val() 
	 cmb_sexo = $('#cmb_sexo').val() 
	 cx_celular = $('#cx_celular').val() 
	 cx_email = $('#cx_email').val() 
	 cx_curriculo = $('#cx_curriculo').val() 
 

		cmpos_valida = true

		if(cx_nome =='' || cx_dt_nascim =='' || cmb_sexo =='' || cx_dt_nascim ==''
		|| cx_celular =='' || cx_email ==''  || cx_curriculo =='' ) {
			
			$('#container_msg').css('display','block')
			$('#container_msg').html('Preencha todos os campos, para enviar o Currículo')

			cmpos_valida = false
			setTimeout(inibe_msg,3000)

		}

 }

 function cancela_envio() {
	$('#page_confirmacao').css('display','none')
	limpar_campos()
 }

 function fechar_confirmacao(){
	$('#page_confirmacao').css('display','none')
 }

 function limpar_campos(){

		cx_nome = $('#cx_nome').val('') 
		cx_dt_nascim = $('#cx_dt_nascim').val('') 
		cx_celular = $('#cx_celular').val('') 
		cx_email = $('#cx_email').val('') 
		cx_curriculo = $('#cx_curriculo').val('') 
		cx_nome = $('#cx_nome').focus()
	
 }

 function inibe_msg() {
	$('#container_msg').css('display','none')
 }