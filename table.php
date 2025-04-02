<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tbody>
            <?php
            $num = 5;
            for ($i = 1; $i <= 10; $i++) {
                echo '<tr>
                <td>' . $num . '</td>
                <td>x</td>
                <td>' . $i . '</td>
                <td>=</td>
                <td>' . ($num * $i) . '</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>