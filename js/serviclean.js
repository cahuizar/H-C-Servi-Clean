/*
 Filename: final.js					
 Written by: Carlos Huizar									
 Purpose: Javascript script used for final.html
 Date: 		4/12/16						
 Modification History:	Original Build						
 4/12/16: Created the file and added all the components (CH)	

*/


$ (document).ready(function(){
	
	
	$( "button" ).button();
	$( "#button-icon" ).button({
		icon: "ui-icon-gear",
		showLabel: false
	});
	
	
	
	$( "#radioset" ).buttonset();
	
	
	
	$( "#controlgroup" ).controlgroup();
	
	
	
	$( "#tabs" ).tabs();
	
	
	
	
	$( "#slider" ).slider({
		range: true,
		values: [ 17, 67 ]
	});
	
	
	
	$( "#progressbar" ).progressbar({
		value: 20
	});
	
	
	
	$( "#spinner" ).spinner({min: 0, max: 7});
	
	
	
	$( "#menu" ).menu();
	
	
	
	$( "#tooltip" ).tooltip();
	
	
	
	$( "#selectmenu" ).selectmenu();
	
	
		
});