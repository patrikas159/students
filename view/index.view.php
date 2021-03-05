<!doctype html>
<html lang="lt">
<head>
    <title>Students</title>
    <style>
        table {
            width: 100%;
        }

        table, th {
            padding: 15px;
            border: 2px solid black;
            border-collapse:collapse ;
        }

        }

    </style>
</head>
<body>
<?php
use ProductsApp\Students;
$student1 = new Students("5b", rand(1,100), "Augustas", "Augustavicius", rand(1,10), date('Y-m-d H:i:s'));
?>
<table class="table">
    <tr>
        <th>Klase</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Kontroliniu darbu vidurkis</th>
        <th>Duomenu formavimo data</th>
    </tr>


    <?php foreach($student1->showStudents() as $students):?>


        <th><?=$students;?></th>
    <?php endforeach;?>

</table>
</body>
</html>