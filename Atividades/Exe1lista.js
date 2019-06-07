$(document).ready(function () {

    var i = 1;
    var cont =0;


    var listanome = new Array();
    var listatempo = new Array();
    var listalargada = new Array();

    var tabela = document.querySelector('#corpotab');
    var thead = document.querySelector('#Thead');
    var theadord = document.querySelector('#Theadord');
    var tabelaorden = document.querySelector('#corpotabord');


    //$(button["name='calculo']")
    $("#salva").click(function(){

        if(cont == 0) {

            var linha = document.createElement("tr");
            var largada = document.createElement("td");
            var competidor = document.createElement("td");
            var tempo = document.createElement("td");

            var texto_largada = document.createTextNode("Largada");
            var texto_competidor = document.createTextNode("Competidor");
            var texto_tempo = document.createTextNode("Tempo");

            largada.appendChild(texto_largada);
            competidor.appendChild(texto_competidor);
            tempo.appendChild(texto_tempo);

            linha.appendChild(largada);
            linha.appendChild(competidor);
            linha.appendChild(tempo);

            thead.appendChild(linha);
            cont = 1;
        }
        if(i<=6) {
            listanome.push($("input[name='valor1']").val());
            listatempo.push($("input[name='valor2']").val());
            console.log("AAA");
            console.log(listanome);
            console.log(listatempo);

            var linha = document.createElement("tr");
            var largada = document.createElement("td");
            var competidor = document.createElement("td");
            var tempo = document.createElement("td");

            var texto_largada = document.createTextNode(i);
            var texto_competidor = document.createTextNode($("input[name='valor1']").val());
            var texto_tempo = document.createTextNode($("input[name='valor2']").val());

            largada.appendChild(texto_largada);
            competidor.appendChild(texto_competidor);
            tempo.appendChild(texto_tempo);

            linha.appendChild(largada);
            linha.appendChild(competidor);
            linha.appendChild(tempo);

            corpotab.appendChild(linha);
            i = 1 + i;
        }

    });

    $("#ordenar").click(function(){

        $("#ordenar").hide();
        listalargada = listanome;

        console.log("largad");
        console.log(listalargada);


        for(i=0;i<listatempo.length;i++){
            for(j=0;j<listatempo.length;j++){
                if(listatempo[j]>listatempo[i]){
                    var aux = listatempo[j];
                    var aux2 = listanome[j];
                    listanome[j] = listanome[i];
                    listatempo[j] = listatempo[i];
                    listanome[i] = aux2;
                    listatempo[i] = aux;

                }
            }
        }

        console.log("nome");
        console.log(listanome);


        var linha = document.createElement("tr");
        var competidor = document.createElement("td");
        var tempo = document.createElement("td");
        var resultado = document.createElement("td");
        var posi = document.createElement("td");


        var texto_posi = document.createTextNode("Posição");
        var texto_competidor = document.createTextNode("Competidor");
        var texto_tempo = document.createTextNode("Tempo");
        var texto_result = document.createTextNode("Resultado");

        posi.appendChild(texto_posi);
        competidor.appendChild(texto_competidor);
        tempo.appendChild(texto_tempo);
        resultado.appendChild(texto_result);

        linha.appendChild(posi);
        linha.appendChild(competidor);
        linha.appendChild(tempo);
        linha.appendChild(resultado);

        theadord.appendChild(linha);

        for(i=0;i<listanome.length;i++) {

            var linha = document.createElement("tr");
            var competidor = document.createElement("td");
            var tempo = document.createElement("td");
            var posi = document.createElement("td");
            var resultado = document.createElement("td");

            if(listatempo[0] == listatempo[i]){
                var vencedor = 'Vencedor';
            }else{
                var vencedor = '';
            }

            if(listatempo[i] == listatempo[i-1]  && i != 0) {
                var posiçao = i-1;
            }else{
                var posiçao = i+1;
            }



            var texto_competidor = document.createTextNode(listanome[i]);
            var texto_tempo = document.createTextNode(listatempo[i]);
            var texto_posi = document.createTextNode(posiçao);
            var texto_resultado = document.createTextNode(vencedor);


            posi.appendChild(texto_posi);

            competidor.appendChild(texto_competidor);
            tempo.appendChild(texto_tempo);
            resultado.appendChild(texto_resultado);

            linha.appendChild(posi);
            linha.appendChild(competidor);
            linha.appendChild(tempo);
            linha.appendChild(resultado);

            corpotabord.appendChild(linha);

        }

    });


    $("#imprimer").click(function(){
        var res = listanome.length-1;
        $("input[name='imprime']").val(listanome[res]);
        $("input[name='imprime2']").val(listatempo[res]);
        console.log("BBB");

    });

});
