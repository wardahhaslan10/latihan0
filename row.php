<?php
$row = "";
$column = "";

if (isset($_POST['hantar'])) {
    $row = $_POST['row'];
    $column = $_POST['column'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah row dan kolumn</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Masukkan Jumlah Kotak</h1>

    <form method="POST">
        <div class="mb-3" style="width:300px;">
            <input type="number" class="form-control" name="row" placeholder="Masukkan row" required>
        </div>

        <div class="mb-3" style="width:300px;">
            <input type="number" class="form-control" name="column" placeholder="Masukkan column" required>
        </div>

        <button type="submit" name="hantar" class="btn btn-success">
            Hantar
        </button>
    </form>

    <br>

    <?php
    if (isset($_POST['hantar'])) {

        echo "<table class='table table-bordered' style='width:auto;'>";

        for ($i = 1; $i <= $row; $i++) {

            echo "<tr>";

            for ($j = 1; $j <= $column; $j++) {

                echo "<td style='width:60px;height:60px;'></td>";

            }

            echo "</tr>";

        }

        echo "</table>";

    }
    ?>

</div>

</body>
</html>