$(document).ready(function () {

    $("#btncalcular").click(function () {
        $("#valor4").show();
        var ampli = $("input[name='valor1']").val();
        var dist = $("input[name='valor2']").val();

        var result = Math.log10(ampli) + 3*Math.log10(8*dist) - 2.92;

        if(result > 8){
            var classi = "Enorme Terremoto";
        }else if(result >= 7){
            var classi = "Grande Terremoto";
        }else if(result >= 6.1){
            var classi = "Terremoto destrutivo (raio 100 km)";
        }else if(result >= 5.5){
            var classi = "Causa pequenos danos a predios";
        }else if(result >= 3.5){
            var classi = "Raramente causa danos";
        }else{
            var classi = "Geralmente nao sentido";
        }


        $("input[name='valor3']").val(result);
        $("input[name='valor4']").val(classi);

    })
})