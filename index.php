<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>12 PHP ir JSON</title>
</head>
<body>

<?php
    $klientas1 = array(
        "id"=>1,
        "vardas"=>"Tadas",
        "amzius"=>23,
        "profesija"=>"Studentas"
    );
    $klientas2 = array(
        "id"=>2,
        "vardas"=>"Jonas",
        "amzius"=>33,
        "profesija"=>"Mechanikas"
    );
    $klientas3 = array(
        "id"=>3,
        "vardas"=>"Gabija",
        "amzius"=>27,
        "profesija"=>"Buhalterė"
    );
    $klientas4 = array(
        "id"=>4,
        "vardas"=>"Tomas",
        "amzius"=>48,
        "profesija"=>"Santechnikas"
    );
    $klientas5 = array(
        "id"=>5,
        "vardas"=>"Petras",
        "amzius"=>37,
        "profesija"=>"Vadybininkas"
    );
    $klientas6 = array(
        "id"=>6,
        "vardas"=>"Ieva",
        "amzius"=>21,
        "profesija"=>"Studentė"
    );
    $klientas7 = array(
        "id"=>7,
        "vardas"=>"Kęstutis",
        "amzius"=>30,
        "profesija"=>"Programuotojas"
    );

    $klientai = [$klientas1,$klientas2,$klientas3,$klientas4,$klientas5,$klientas6,$klientas7];
?>

<div class="row ml-1">
    <div class="form col-lg-4 center-block">
        <form method="POST" action="index.php">
            <div class="mb-3">
                <label class="form-label">ID</label>
                <input class="form-control" name="id"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Vardas</label>
                <input class="form-control" name="vardas"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Amžius</label>
                <input class="form-control" name="amzius"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Profesija</label>
                <input class="form-control" name="profesija"/>
            </div>

            <button class="btn btn-info" type="submit" name="patvirtinti">Įrašyti</button>
        </form>
    </div>

    <div class="col-lg-8 center-block">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>Amžius</th>
                <th>Profesija</th>
            </tr>
            <?php
                foreach($klientai as $klientas) {
                    echo "<tr>";
                        echo "<td>".$klientas["id"]."</td>";
                        echo "<td>".$klientas["vardas"]."</td>";
                        echo "<td>".$klientas["amzius"]."</td>";
                        echo "<td>".$klientas["profesija"]."</td>";
                    echo "</tr>";
                };
            ?>
        </table>
    </div>
</div>


</body>
</html>