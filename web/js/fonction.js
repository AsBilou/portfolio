function collapse(div,arrow){

	var etat = document.getElementById(div).style.display;
	var div = "#"+div;
	
	if (etat == 'none')
	{
  						$(div).slideDown('slow');
  						document.getElementById(arrow).className='icon-chevron-up';  						
	}
	else
	{			
  						$(div).slideUp('slow');
  						document.getElementById(arrow).className='icon-chevron-down';
	}
	
	if((document.getElementById('content-LM').style.display!='none') && (div == '#content-CV')){
		$('#content-LM').slideUp('slow');
		document.getElementById('arrow-LM').className='icon-chevron-down';
	}
	
	if((document.getElementById('content-CV').style.display!='none') && (div == '#content-LM')){
		$('#content-CV').slideUp('slow');
		document.getElementById('arrow-CV').className='icon-chevron-down';
	}
}