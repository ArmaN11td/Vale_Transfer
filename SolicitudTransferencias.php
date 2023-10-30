<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="script.js"></script>
    <link href="style.css">
</head>

<body>
    <div class="container-fluid bg-success text-white py-5">
        <h1>Solicitud de Transferencias</h1>
        <!-- <p>Stock Controller</p> -->
    </div>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-3 mb-10">
                <div><strong>Tipo de Solicitud:</strong></div>
                <select name="Tipo de Solicitud" id="Tipo" class="form-control">
                    <option value="0">Selecciona</option>
                    <option value="V">Venta</option>
                    <option value="VP">Venta - Pedido</option>
                    <option value="VS">Venta Segura</option>
                    <option value="R">Resurtido</option>
                    <option value="PD">Pre - Desplazamiento</option>
                    <option value="D">Desplazamiento</option>
                </select>
            </div>
            <div class="col-md-3 mb-10">
                <div><strong>Vendedor:</strong></div>
                <input type="text" id="Solicitante" class="form-control" placeholder="Nombre del Solicitante">
            </div>
            <div class="col-md-2 mb-10">
                <div><strong>N° de Ticket:</strong></div>
                <input type="text" id="TK" class="form-control" placeholder="N° de Ticket">
            </div>
            <div class="col-md-2 mb-10">
                <div><strong>N° de Pedido:</strong></div>
                <input type="text" id="#PD" class="form-control" placeholder="N° de Pedido">
            </div>        
            <div class="col-md-3 mb-10"><br>
                <div><strong>Nombre del Cliente:</strong></div>
                <input type="text" id="Clte" class="form-control" placeholder="Cliente">
            </div>
            <div class="col-md-3 mb-10"><br><br>
            <button class="btn btn-dark" onclick="validarCampos()">Validar</button>
            </div>
        </div>

</body>
</html>

