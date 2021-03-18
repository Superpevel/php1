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
        .brd {
            border: 4px solid black;
            background: #fc3;
            padding: 10px;
        }
    </style>
</head>

<body>
<table>

    <?php For ($f=1; $f<=9; $f++) : ?>
        <tr class="brd">
            <?php For ($r=1; $r<=9; $r++) : ?>
                <td>
                    <?php echo $r; ?> <?php echo '*' ?> <?php echo $f; ?> <?php echo '=' ?> <?php echo $f*$r ?>
                </td>

            <?php EndFor; ?>
        </tr>
    <?php EndFor; ?>





</table>
</body>
</html>