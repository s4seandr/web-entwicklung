
<html>

<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner: Todos (Aktuelles Projekt)</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <header class="jumbotron">
            <center> <h1> Aufgabenplaner: Todos (Aktuelles Projekt)</h1></center>
        </header>

        <div class="row">

            <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="Login.php"> Login </a>
                    </li>

                    <li class="list-group-item">
                        <a href="Projekte.php"> Projekte </a>
                    </li>

                    <li class="list-group-item">
                        <a href="Todos.php"> Aktuelles Projekt </a>
                    </li>

                    <div style="padding-left: 2em">
                        <li class="list-group-item">
                            <a href="Aufgaben.php"> Aufgaben </a>
                        </li>
                    </div>

                    <div style="padding-left: 2em">
                        <li class="list-group-item">
                            <a href="Reiter.php"> Reiter </a>
                        </li>
                    </div>

                    <div style="padding-left: 2em">
                        <li class="list-group-item">
                            <a href="Personen.php"> Personen </a>
                        </li>
                    </div>
                </ul>
            </div>

            <div class="col-md-10">
                <div class="row">

                    <div class="col">
                        <div class="card">
                            <div class="card-header"> ToDo: </div>
                            <ul class="list-group">
                                <li class="list-group-item">HTML-Datei erstellen (Sebastian Andres)</li>
                                <li class="list-group-item">CSS-Datei erstellen  (Janna Bartz)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-header"> Erledigt: </div>
                            <ul class="list-group">
                                <li class="list-group-item">PC-eingeschaltet (Sebastian Andres)</li>
                                <li class="list-group-item">Kaffee trinken   (Janna Bartz)</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-header"> Verschoben: </div>
                            <ul class="list-group">
                                <li class="list-group-item">Für die Uni lernen (Sebastian Andres)</li>
                                <li class="list-group-item">WE-Übung erledigen (Janna Bartz)</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
