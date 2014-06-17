// validacao formulario
jQuery(document).ready(function(){
	jQuery("#formID").validationEngine();
});
function checkHELLO(field, rules, i, options){
	if (field.val() != "HELLO") {
		return options.allrules.validate2fields.alertText;
	}
}

$('#tel').mask('(00) 0000-0000');
$('#cel').mask('(00) 00000-0000');