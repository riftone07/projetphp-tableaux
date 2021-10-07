<?php 
$connexion = new PDO('mysql:host=localhost;dbname=localites;charset=utf8;port=8889','root','root');

$requete = $connexion->query('SELECT * FROM region');

$mesregions = $requete->fetch();



 ?>

<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

        <title>Enregistrer une region!</title>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-10 p-5">
                    <div class="card">
                        <div class="card-header">

                            <h1>Liste des regions</h1>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Libelle</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dakar</td>
                                        <td>La region de dakar</td>
                                    </tr>
                                </tbody>
                            </table>
                         </div>   
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>
