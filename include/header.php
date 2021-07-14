<?php
require'../conexion/conexion.php';
?>
<html>
<head>
    <title>Principal</title>
    <link rel="stylesheet" type="text/css" href="../librerias/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../include">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../estudiantes">Alumnos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../cursos">Cursos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../estudiantes/reportes.php">Reportes</a>
            </li>
        </ul>
    </div>
</nav>