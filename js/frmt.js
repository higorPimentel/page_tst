 frm =  document.querySelector('#frm_registro')
 frm.addEventListener('focus',aplica_foco,true)
 frm.addEventListener('blur',remove_foco,true)

 bt_cad =  document.querySelector('#btn_cadastra')
 bt_cad.addEventListener('click',cadastra_cv,true)


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

		alert(cx_nome)		
 }

 function valida_campos() {
	 cx_nome = $('#cx_nome').val() 
	let cx_dt_nascim = $('#cx_dt_nascim').val() 
	let cx_contato = $('#cx_contato').val() 
	let cx_celular = $('#cx_celular').val() 
	let cx_email = $('#cx_email').val() 
	let cx_curriculo = $('#cx_curriculo').val() 
 

		cmpos_valida = true

		if(cx_nome =='' || cx_dt_nascim =='' || cx_contato =='' || cx_dt_nascim ==''
		|| cx_celular =='' || cx_email ==''  || cx_curriculo =='' ) {
			
			$('#container_msg').css('display','block')
			$('#container_msg').html('Preencha todos os campos, para enviar o Currículo')

			cmpos_valida = false
			setTimeout(inibe_msg,3000)

		}




 }

 function inibe_msg() {
	$('#container_msg').css('display','none')
 }