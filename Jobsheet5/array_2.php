<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili'=> 'Malang',
            'jenis_kelamin'=> 'Perempuan',
        ];
    ?>

    <table>
        <caption>Data Dosen</caption>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <?php
            foreach ($Dosen as $key => $value) {
                echo "<tr>
                        <td>{$key}</td>
                        <td>{$value}</td>
                      </tr>";
            }
        ?>
    </table>

    <style>
        table {
            width: 50%;
            margin: 50px auto;
            border-collapse: collapse;
        }

        caption {
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px 10px;
            text-align: left;
        }
    </style>
</body>
</html>