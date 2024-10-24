<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $envio = $_POST['envio'];

    if ($envio == 'digital') {
        $cost = 25.00;
        echo "Has seleccionado el formato digital. Te enviaremos el cómic por correo electrónico.<br>";
        echo "El coste es de $" . number_format($cost, 2) . ".";
    } elseif ($envio == 'impreso') {
        $cost = 75.00;
        echo "Has seleccionado el formato impreso. Recibirás el cómic en tu dirección con pasta dura y papel de 100 g.<br>";
        echo "El coste es de $" . number_format($cost, 2) . ".";
    } else {
        echo "Por favor, selecciona una opción válida.";
    }
} else {
    echo "No se ha enviado el formulario correctamente.";
}
?>
