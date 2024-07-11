<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

//Inicializar una nueva sesion de curl
$ch = curl_init(API_URL);

//Indicar que queremos el resultado de la peticion sin mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Ejecutar la peticion
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

?>

<head>
    <title>La proxima pelicula de marvel</title>
    <!-- Centered viewport --> 
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>
<main>
    
    <section>
        <img src="<?= $data["poster_url"] ?>" alt="" style=border-radius:8px>
    </section>
    <hgroup>
        <h3>Proxima pelicula de marvel: <?=$data["title"]?></h3>
        <p>Quedan <?=$data["days_until"]?> dias</p>
    </hgroup>
    
</main>



<style>
    :root{
        color-scheme: light dark;
    }
    img{
        margin: 0 auto;
    }
    section{
        display: flex;
        justify-content: center;
    }
    hgroup{
        text-align: center;
    }
</style>