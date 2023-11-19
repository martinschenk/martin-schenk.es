<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Web MS SL: Email PRESPUESTO de :contacto', ['contacto' => $email]) }}
    </title>
</head>
<body>
<p>{{ __('Ha recibido un pedido de PRESUPUESTO de:') }} {{ $email }}</p>
<p>Message: {{ $mailBody }}</p>
</body>
</html>
