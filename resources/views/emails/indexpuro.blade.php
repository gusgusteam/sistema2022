@extends('layouts.basehome')
@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de contacto</title>

    <link rel="stylesheet" href="{{asset('/correocss/css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('/correocss/css/font-awesome.css')}}">

    <script src="{{asset('/correocss/js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('/correocss/js/script.js')}}"></script>
</head>
<body>

    <section class="form_wrap">

        <section class="cantact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h2>INFORMACION<br>DE CONTACTO</h2>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span> Servidor De Correo Montero</p>
                <p><span class="fa fa-mobile"></span> Materia : TECNOLOGIA WEB</p>
            </section>
        </section>

        <form action="{{asset('/correocss/enviar.php')}}" method="post" class="form_contact">
            <h2>Envia un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names" name="nombre" required>

                <label for="email2">Correo Remitente *</label>
                <input type="text" id="email2" name="correo2">

                <label for="email">Correo destinatario *</label>
                <input type="text" id="email" name="correo" required>

                <label for="email">Asunto *</label>
                <input type="text" id="asunto" name="asunto" required>

                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" required></textarea>

                <input  type="submit" value="Enviar Mensaje" id="btnSend">
          
            </div>
        </form>

    </section>

</body>
</html>



<script>

 // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>
@endsection