$(document).ready(function () {

    $("grupo4").hide();

    $("#calcular").click(function () {
        var peso = $("input[name='valor1']").val();
        var altura = $("input[name='valor2']").val();
        altura = Math.pow(altura,2);
        var IMC = peso / altura;
        $("input[name='IMC']").val(IMC);

        if(IMC > 40 ){
            var classi = "Obesidade grau3";
        }else if(IMC >= 35 ){
            var classi = "Obesidade grau2";
        }else if(IMC >= 30 ){
            var classi = "Obesidade grau1";
        }else if(IMC >= 25 ){
            var classi = "Sobrepeso";
        }else if(IMC >= 18.5 ){
            var classi = "Peso Saudavel";
        }else if(IMC < 18.5  ){
            var classi = "Subnutrição";
        }
        $("input[name='classi']").val(classi);

        var imcideal = altura *18.5;
        $("input[name='peso1']").val(imcideal);

        var imcideal = altura *24.999;
        $("input[name='peso2']").val(imcideal);
    })

});