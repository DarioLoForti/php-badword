<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="./ccs/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Inserire Dati</h1>
            </div>
            <div class="col-12">
                <form action="dashboard.php" method="GET">
                    <div class="row">
                        <div class="col-6 py-5">
                            <label for="control-label">Paragrafo</label>
                            <input type="text" id="paragrafo" class="form-control" name="paragrafo" placeholder="inserire paragrafo" required>
                        </div>
                        <div class="col-6 py-5">
                        <label for="control-label">Parola</label>
                            <input type="text" id="parola" class="form-control" name="parola" placeholder="inserire parole da censurare" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-success">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>