<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PRUEBA</title>
</head>
<body>
	<?php include('includes/header.php');
    include('includes/menu.php'); ?>
	<h1 class="flex-grow mt-0 flex flex-col ml-5" style="font-weight: bold; font-size: 30px; font-family: 'Courier New';">Programas...</h1>

<div class="w-full flex justify-center mt-5">
    <div class="w-[100%] lg:w-[95%] bg-gray-100 border rounded-lg shadow p-4 flex gap-4 items-start">
        <img src="img/js.png" class="w-20 h-20">
        <div class="flex-grow max-w-[75%]">
            <h2 class="text-lg font-bold font-[Courier_New]">Enunciado del problema:</h2>
            <p class="mt-1 leading-5">
                Enunciado muy largoooooooooooooooooooooooooooooooooooo...
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Doloremque ratione assumenda aspernatur cum quae.
            </p>
        </div>
        <button onclick="cargarPrograma('JavaScript_basicos/programa_6.html')"
                class="bg-blue-400 hover:bg-blue-500 text-white px-5 py-2 rounded-lg self-center">
            Ejecutar
        </button>
    </div>
</div>

<div class="w-full flex justify-center mt-5">
    <div class="w-[100%] lg:w-[95%] bg-gray-100 border rounded-lg shadow p-4 flex gap-4 items-start">
        <img src="img/js.png" class="w-20 h-20">
        <div class="flex-grow max-w-[75%]">
            <h2 class="text-lg font-bold font-[Courier_New]">Enunciado del problema:</h2>
            <p class="mt-1 leading-5">
                Enunciado muy largoooooooooooooooooooooooooooooooooooo...
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Doloremque ratione assumenda aspernatur cum quae.
            </p>
        </div>
        <button onclick="cargarPrograma('JavaScript_basicos/programa_6.html')"
                class="bg-blue-400 hover:bg-blue-500 text-white px-5 py-2 rounded-lg self-center">
            Ejecutar
        </button>
    </div>
</div>


</body>
<!-- Funcion para cargar los htmls -->
<div id="viewer" class="w-full flex justify-center mt-10 hidden">
    <iframe id="visor" src="" class="w-[90%] h-[600px] border rounded-lg shadow"></iframe>
</div>

<script>
function cargarPrograma(ruta) {
    document.getElementById('visor').src = ruta;
    document.getElementById('viewer').classList.remove('hidden');
}
</script>

</html>