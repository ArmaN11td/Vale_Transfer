<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <form action="">
        <input type="number" id="Porelmomento"class="mt-3">
        <input type="number" id="Dia">
        <button onclick="Ejecutar()">Suma</button>
    </form>
    <script>
        function Ejecutar (){
            var Puerta=parseFloat(document.getElementById("Porelmomento").value);
            var Llave=parseFloat(document.getElementById('Dia').value)
            // alert(Llave)
            if (isNaN(Puerta)|isNaN(Llave))
                alert('Ingresa al menos un Dato') 
            else
            if (Puerta>0){
                alert('Si Cumple')
            }else
                alert('No Cumple')
        
            
            
        }





        
    </script>
</body>
</html>