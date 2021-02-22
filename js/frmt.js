 frm =  document.querySelector('#frm_registro')
 frm.addEventListener('focus',aplica_foco,true)
 frm.addEventListener('blur',remove_foco,true)


//nome =  document.querySelector('#cx_nome')
//nome.addEventListener('focus',aplica_foco)

 function aplica_foco(){
 	itm = event.srcElement.id
 	$(`#${itm}`).css('borderBottom','solid 2px #3b6caa')

 }

  function remove_foco(){
 	itm = event.srcElement.id
 	$(`#${itm}`).css('borderBottom','solid 2px #B5B5B5')
 }