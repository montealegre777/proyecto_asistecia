<?php
/**
 * index.php
 * Vista pública principal: Acceso y marcado de empleados.
 * Ubicación: /proyecto/index.php
 */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Asistencias - Inicio</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8fafc;
        color: #1e3a8a;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    /* Barra de navegación superior simple */
    .navbar {
        background-color: #ffffff;
        border-bottom: 1px solid #e2e8f0;
        padding: 1rem 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar-brand {
        font-weight: 700;
        font-size: 1.25rem;
        color: #1e3a8a;
        text-decoration: none;
    }

    .navbar-link {
        color: #2563eb;
        text-decoration: none;
        font-size: 0.95rem;
        font-weight: 500;
    }

    .navbar-link:hover {
        text-decoration: underline;
    }

    /* Contenedor principal */
    .main-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2rem 1rem;
    }

    /* Tarjeta de Marcado (Card) */
    .card {
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        width: 100%;
        max-width: 450px;
        padding: 2.5rem;
        text-align: center;
    }

    .card h1 {
        font-size: 1.6rem;
        margin-bottom: 0.5rem;
        color: #1e3a8a;
    }

    .card p {
        color: #64748b;
        font-size: 0.95rem;
        margin-bottom: 2rem;
    }

    /* Estilos del Formulario */
    .form-group {
        margin-bottom: 1.5rem;
        text-align: left;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        font-size: 0.9rem;
        color: #334155;
    }

    .form-input {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        font-size: 1rem;
        color: #1e293b;
        outline: none;
        transition: border-color 0.2s;
    }

    .form-input:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    /* Botones de acción (Azul) */
    .btn {
        width: 100%;
        background-color: #2563eb;
        color: #ffffff;
        border: none;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .btn:hover {
        background-color: #1d4ed8;
    }
    </style>
</head>

<body>

    <nav class="navbar">
        <a href="index.php" class="navbar-brand">⏱ ControlAsistencias</a>
        <a href="admin/login.php" class="navbar-link">Ingreso Administrador →</a>
    </nav>

    <main class="main-container">
        <div class="card">
            <h1>Registro de Asistencia</h1>
            <p>Introduce tu documento de identidad para marcar tu entrada o salida.</p>

            <form action="" method="POST">
                <div class="form-group">
                    <label class="form-label" for="employee_id">Documento del Empleado</label>
                    <input class="form-input" type="text" id="employee_id" name="employee_id"
                        placeholder="Ej. 1023456789" required autocomplete="off">
                </div>

                <button type="submit" class="btn">Registrar Marcación</button>
            </form>
        </div>
    </main>

    <?php
// LLAMADA CLAVE: Aquí incluimos el componente footer del directorio sugerido
include 'includes/footer.php';
?>