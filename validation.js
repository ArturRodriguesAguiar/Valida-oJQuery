$(
    function(){
        $("#formteste").validate({
            debug:true,
            rules:{
                Nome:{
                    required: true
                },
                Idade:{
                    required: true
                }
            },
            messages:{
                Nome:{
                    required: "Insira seu nome"
                },
                Idade:{
                    required: "Insira sua idade"
                }
            }
        });
    }
);