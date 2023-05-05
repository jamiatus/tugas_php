<!DOCTYPE html>
<html>
	<head>
		<title>Tugas JSON</title>
        <style>
            h3{
                margin-left:10px;
                margin-top:5px;
                margin-bottom:5px;
            }
            .isi table{
                margin-top:50px;
                border-color: #f4f4f4;
            }
            .isi table tr:nth-child(even){
                background-color:#f2f2f2;
            }
            .isi table tr th, td{
                padding:8px;
                padding-right:16px;
            }
        </style>
	</head>

	<body>
        <table bgcolor="#FFC720" cellspacing=0; width=100%>
            <tr>
                <td>
                    <h3>Daftar Nilai</h3>
                </td>
            </tr>
        </table>
        <div class="isi">
            <table border=1px align="center" cellspacing=0;>
                <tr style="text-align:left">
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Nilai</th>
                    <th>Hasil</th>
                </tr>

                <?php
                    $json_string = file_get_contents('data.json');
                    $json= json_decode($json_string, true);

                    function hitung_umur($tanggal_lahir){
                        $lahir = new DateTime ($tanggal_lahir);
                        $today = new DateTime ();
                        $umur = $today -> diff($lahir);
                        return $umur -> y;
                    }
                    
                    function konversi_nilai($nilai){
                        if ($nilai >= 88) {
                            return "A";
                        } elseif($nilai >= 77){
                            return "B";
                        } elseif($nilai >= 66){
                            return "C";
                        } elseif($nilai >= 55){
                            return "D";
                        } else {
                            return "E";
                        }
                    }

                    $no=1; 

                    foreach($json as $data){
                ?>
                    <tr>
                        <td><?php echo $no++ ."."?></td>
                        <td><?php echo $data['nama']?></td>
                        <td><?php echo date ('d F Y', strtotime($data['tanggal_lahir']));?></td>
                        <td><?php echo hitung_umur($data['tanggal_lahir'])?> tahun</td>
                        <td><?php echo $data['alamat']?></td>
                        <td><?php echo $data['kelas']?></td>
                        <td><?php echo $data['nilai']?></td>
                        <td><?php echo konversi_nilai($data['nilai'])?><?php ?></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
	</body>
</html>