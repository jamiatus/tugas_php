<html>
	<head>
		<title>Praktik Individu</title>
        <style>
            th, td{
                padding:5px;
            }
        </style>
	</head>
	<body>
        <table border=1; cellspacing=0;>
            <tr style='background-color:lightblue; padding:5px'>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
            <?php
            for ($i=1; $i<=10; $i++){
                if ($i % 2 == 0){
                    echo "<tr>";
                } else {
                    echo "<tr style='background-color: lightgray'>";
                }
                echo "<td>$i</td>";
                echo "<td>Nama ke $i</td>";
                echo "<td>Kelas " . 10 - $i + 1 . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
	</body>
</html>