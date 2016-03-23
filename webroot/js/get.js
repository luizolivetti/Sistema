/**
* Classe de controle de comboboxes
*/
var Get = {
    /**
     * load 
     * Carrega e/ou recarrega o combobox indicado com o metodo indicado 
     * @param string $path                : endereço para consumo do metodo de impressão do combobox
     * @param array string $object        : id do objeto desejado
     * @param array string $selectedItens : valor selecionado em objeto com nome do campo a ser relacionado
     * @returns json
     *      EXEMPLO
     *      Get.load('select','/Canal/getCanal','canal',[['eps_id',this.value], ['canal_id',0]])
     */
    load:function(type, path, object, selectedItens){
        // proteção para identificar se os parametros são arrays
        if (!(selectedItens instanceof Array)){
            return 0;
        }
        // preparação dos dados para submit 
        var dados = '';
        jQuery.each(selectedItens, function (i, arrayItem){
                dados += arrayItem[0] + '=' + arrayItem[1] + '&';
        });
        console.log(dados);

        // post para metodo 
        jQuery.ajax({
            type: "POST",
            url: path,
            data: dados,
            dataType: "json",
            success: function (data) {
                // montagem do combobox
            },
            complete: function (data){
                switch(type){
                    case "select" :
                        var options = "<option value=''>Selecione uma opção</option>";
                        $.each(data.responseJSON, function(key, value){
                           options += '<option value="' + key + '">' + value + '</option>';
                        });
                        $("#"+object).html(options);                                                
                    break;    
                    case "input" :
                        $.each(data.responseJSON, function(key, value){
                           $("#"+object).val(key);                         
                        });
                    break;    
                } 
            }
        });
    }
};