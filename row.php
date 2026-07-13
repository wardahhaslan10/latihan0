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
    <title>Jumlah Row dan Column</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Masukkan Jumlah Kotak</h2>

    <form method="POST" class="w-50 mx-auto">

        <div class="mb-3">
            <label class="form-label">Row</label>
            <input type="number" name="row" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Column</label>
            <input type="number" name="column" class="form-control" required>
        </div>

        <button type="submit" name="hantar" class="btn btn-primary">
            Hantar
        </button>

    </form>

    <br>

    <?php if (isset($_POST['hantar'])) { ?>

    <table class="table table-bordered text-center w-auto mx-auto">

        <?php for ($i = 1; $i <= $row; $i++) { ?>

        <tr>

            <?php for ($j = 1; $j <= $column; $j++) { ?>

            <td class="p-4"></td>

            <?php } ?>

        </tr>

        <?php } ?>

    </table>

    <?php } ?>

</div>

</body>
</html>