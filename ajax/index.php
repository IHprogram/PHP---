<?php
require_once('data.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
</head>

<body>

    <form>
        <label></label>
        <select name="question">
            <?php foreach ($questions as $q) { ?>
                <option value="<?= $q; ?>"><?= $q; ?></option>
            <?php } ?>
        </select>

        <label></label>
        <select name="answer">
            <?php foreach ($threetimes as $t) { ?>
                <option value="<?= $t; ?>"><?= $t; ?></option>
            <?php } ?>
        </select>
    </form>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="index.js"></script>

</body>

</html>