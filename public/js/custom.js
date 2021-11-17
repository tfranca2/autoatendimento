
$(document).ready(function(){

	Parsley.addMessages('pt-br', {
	  defaultMessage: "Este valor parece ser inválido.",
	  type: {
	    email:        "Este campo deve ser um email válido.",
	    url:          "Este campo deve ser um URL válida.",
	    number:       "Este campo deve ser um número válido.",
	    integer:      "Este campo deve ser um inteiro válido.",
	    digits:       "Este campo deve conter apenas dígitos.",
	    alphanum:     "Este campo deve ser alfa numérico."
	  },
	  notblank:       "Este campo não pode ficar vazio.",
	  required:       "Este campo é obrigatório.",
	  pattern:        "Este campo parece estar inválido.",
	  min:            "Este campo deve ser maior ou igual a %s.",
	  max:            "Este campo deve ser menor ou igual a %s.",
	  range:          "Este campo deve estar entre %s e %s.",
	  minlength:      "Este campo é pequeno demais. Ele deveria ter %s caracteres ou mais.",
	  maxlength:      "Este campo é grande demais. Ele deveria ter %s caracteres ou menos.",
	  length:         "O tamanho deste campo é inválido. Ele deveria ter entre %s e %s caracteres.",
	  mincheck:       "Você deve escolher pelo menos %s opções.",
	  maxcheck:       "Você deve escolher %s opções ou mais",
	  check:          "Você deve escolher entre %s e %s opções.",
	  equalto:        "Este valor deveria ser igual."
	});
	Parsley.setLocale('pt-br');
	$('form').parsley();

	$('.select2').select2({language: "pt-BR"});

	$('body').on('focus', 'input[name=cpf]', function(){ $(this).mask('999.999.999-99') });
	$('body').on('focus', 'input[name=cnpj]', function(){ $(this).mask('99.999.999/9999-99') });
	$('body').on('keydown', 'input[name=cpf_cnpj]', function(){ 
	    try {
	        $(this).unmask();
	    } catch (e) {}

	    if($(this).val().length < 11){
	        $(this).mask("999.999.999-99");
	    } else {
	        $(this).mask("99.999.999/9999-99");
	    }
	    var elem = this;
	    setTimeout(function(){
	        elem.selectionStart = elem.selectionEnd = 10000;
	    }, 0);
	    var currentValue = $(this).val();
	    $(this).val('');
	    $(this).val(currentValue);
	});

});

function validarCPF(cpf) {  
    cpf = cpf.replace(/[^\d]+/g,'');    
    if(cpf == '') return false; 
    // Elimina CPFs invalidos conhecidos    
    if (cpf.length != 11 || 
        cpf == "00000000000" || 
        cpf == "11111111111" || 
        cpf == "22222222222" || 
        cpf == "33333333333" || 
        cpf == "44444444444" || 
        cpf == "55555555555" || 
        cpf == "66666666666" || 
        cpf == "77777777777" || 
        cpf == "88888888888" || 
        cpf == "99999999999")
            return false;       
    // Valida 1o digito 
    add = 0;    
    for (i=0; i < 9; i ++)      
        add += parseInt(cpf.charAt(i)) * (10 - i);  
        rev = 11 - (add % 11);  
        if (rev == 10 || rev == 11)     
            rev = 0;    
        if (rev != parseInt(cpf.charAt(9)))     
            return false;       
    // Valida 2o digito 
    add = 0;    
    for (i = 0; i < 10; i ++)       
        add += parseInt(cpf.charAt(i)) * (11 - i);  
    rev = 11 - (add % 11);  
    if (rev == 10 || rev == 11) 
        rev = 0;    
    if (rev != parseInt(cpf.charAt(10)))
        return false;       
    return true;   
}

function validarCNPJ(cnpj) {
 
    cnpj = cnpj.replace(/[^\d]+/g,'');
 
    if(cnpj == '') return false;
     
    if (cnpj.length != 14)
        return false;
 
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" || 
        cnpj == "11111111111111" || 
        cnpj == "22222222222222" || 
        cnpj == "33333333333333" || 
        cnpj == "44444444444444" || 
        cnpj == "55555555555555" || 
        cnpj == "66666666666666" || 
        cnpj == "77777777777777" || 
        cnpj == "88888888888888" || 
        cnpj == "99999999999999")
        return false;
         
    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;
         
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
          return false;
           
    return true;
    
}

window.ParsleyValidator.addValidator('cpf', function (value, requirement) {
    return validarCPF(value);
}, 32).addMessage('pt-br', 'cpf', 'CPF inválido.');

window.ParsleyValidator.addValidator('cnpj', function (value, requirement) {
    return validarCNPJ(value);
}, 32).addMessage('pt-br', 'cnpj', 'CNPJ inválido.');

window.ParsleyValidator.addValidator('cpf_cnpj', function (value, requirement) {
    if( value.length == 14 )
        return validarCPF(value);
    else
        return validarCNPJ(value);
}, 32).addMessage('pt-br', 'cnpj', 'CNPJ inválido.');


function oneMinuteToReturnFor( return_to ){
    var idleTime = 0;

    var idleInterval = setInterval(timerIncrement, 60000);
    $('html').mousemove(function (e) {
        idleTime = 0;
        clearInterval(idleInterval);
        idleInterval = setInterval(timerIncrement, 60000);
    });
    $('html').keypress(function (e) {
        idleTime = 0;
        clearInterval(idleInterval);
        idleInterval = setInterval(timerIncrement, 60000);
    });

    function timerIncrement(){
        idleTime = idleTime + 1;
        if (idleTime > 0) { // minute
            if( return_to )
                window.location.href = return_to;
            else
                window.history.back();
        }
    }
}