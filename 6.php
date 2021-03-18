<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test document</title>
    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
        }
        .color {
            height: 10px;
            width: 10px;

        }
    </style>
</head>

<body>
<table>
    <tr>
        <?php For ($r=0; $r<256; $r++) : ?>

            <td><div class="color" style="background-color: rgb(<?php echo $r; ?>, 0, 0"></div></td>

        <?php EndFor; ?>
    </tr>
    <tr>
        <?php For ($r=0; $r<256; $r++) : ?>

            <td> <div class="color" style="background-color: rgb(0, <?php echo $r; ?>, 0"></div></td>

        <?php EndFor; ?>
    </tr>
    <tr>
        <?php For ($r=0; $r<256; $r++) : ?>

            <td> <div class="color" style="background-color: rgb(0, 0, <?php echo $r; ?>"></div></td>

        <?php EndFor; ?>
    </tr>
</table>
</body>
</html>