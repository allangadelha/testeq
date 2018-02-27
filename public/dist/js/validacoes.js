//Formulário de Cadastro de Médico
$(document).ready(function (){
	$( "#aquivaioformulario" ).validate({
    debug: true,
    rules: {
      nome: {
        required: true
      },
      
      registro: {
        required: true
      },
      
      telefone: {
        required: true
      },
      
      especialidade: {
        required: true
      }
      
    },
    messages:{
        
        nome: {
            required: "O campo NOME é obrigatório"
        },
        
        registro: {
            required: "O campo CRM é obrigatório"
        },
        
        telefone: {
            required: "O campo TELEFONE é obrigatório"
        },
        
        especialidade: {
            required: "O campo ESPECILIDADE é obrigatório"
        }
        
    }
  }); 
 
 });