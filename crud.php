<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos - Telesecundaria Francisco I. Madero</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script>
        function filtrarAprendizaje() {
            // Obtener el valor del filtro seleccionado
            const filtro = document.getElementById("filtroAprendizaje").value;
            // Obtener todas las filas de la tabla
            const filas = document.querySelectorAll("tbody tr");

            // Iterar sobre cada fila y mostrarla u ocultarla según el filtro
            filas.forEach(fila => {
                const tipoAprendizaje = fila.querySelector("td[data-aprendizaje]").innerText;
                if (filtro === "Todos" || tipoAprendizaje === filtro) {
                    fila.style.display = "";  // Mostrar fila
                } else {
                    fila.style.display = "none";  // Ocultar fila
                }
            });
        }
    </script>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">TELESECUNDARIA FRANCISCO I. MADERO</h1>
        <p class="text-center">3° A - Mtra: Adulfo - Ciclo Escolar 24-25</p>
        
        <!-- Filtro por Tipo de Aprendizaje -->
        <div class="mb-3">
            <label for="filtroAprendizaje" class="form-label">Filtrar por tipo de aprendizaje:</label>
            <select id="filtroAprendizaje" class="form-select" onchange="filtrarAprendizaje()">
                <option value="Todos">Todos</option>
                <option value="Visual">Visual</option>
                <option value="Auditivo">Auditivo</option>
                <option value="Kinestésico">Kinestésico</option>
            </select>
        </div>

        <!-- Tabla de Alumnos -->
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>N°</th>
                    <th>Alumno</th>
                    <th>Tutor 1</th>
                    <th>Teléfono 1</th>
                    <th>Tutor 2</th>
                    <th>Teléfono 2</th>
                    <th>Tipo de Aprendizaje</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: #ADD8E6;">
                    <td>1</td>
                    <td>Ahtziri del Carmen Calderón Alvarado</td>
                    <td>María del Carmen Alvarado Pérez</td>
                    <td>993 522 6166</td>
                    <td>Monserrat Calderón Alvarado</td>
                    <td>993 345 4917</td>
                    <td data-aprendizaje="Visual">Visual</td>
                    <td>
                        <button class="btn btn-success btn-sm me-1">
                            <i class="bi bi-pencil-square"></i> Editar
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Eliminar
                        </button>
                    </td>
                </tr>
                <tr style="background-color: #98FB98;">
                    <td>2</td>
                    <td>Itzel Alejandra Castañeda Palomeque</td>
                    <td>Erika Palomeque Perera</td>
                    <td>961 568 2984</td>
                    <td>José Esteban Castañeda Pérez</td>
                    <td>936 120 8573</td>
                    <td data-aprendizaje="Auditivo">Auditivo</td>
                    <td>
                        <button class="btn btn-success btn-sm me-1">
                            <i class="bi bi-pencil-square"></i> Editar
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Eliminar
                        </button>
                    </td>
                </tr>
                <tr style="background-color: #FFB6C1;">
                    <td>3</td>
                    <td>Ximena Jazmín Chablé Pineda</td>
                    <td>Alejandra Pineda Hernández</td>
                    <td>936 181 0916</td>
                    <td>Kevin Norberto Chablé Pineda</td>
                    <td>936 126 1422</td>
                    <td data-aprendizaje="Kinestésico">Kinestésico</td>
                    <td>
                        <button class="btn btn-success btn-sm me-1">
                            <i class="bi bi-pencil-square"></i> Editar
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Eliminar
                        </button>
                    </td>
                </tr>
                <!-- Añade el resto de los alumnos aquí, asignando el color correspondiente a cada fila -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></scr
