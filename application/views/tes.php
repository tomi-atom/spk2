<?php
    $host    = "localhost";
    $uname   = "root";
    $pass    = "";
    $db_name = "wp-guru";

    $conn = mysqli_connect($host,$uname,$pass,$db_name);

    $sql = "SELECT * FROM kriteria K Right Join nilai_kriteria N on (K.id_kriteria = N.id_kriteria)";

    $crot = mysqli_query($conn,$sql);
    $banyak = mysqli_num_rows($crot);
    $c = 0;
    $d = 0.0;
    $x = 1;
    while ($data = mysqli_fetch_array($crot)) {
?>
  
  <tr>	
        
            <td><?php echo $data['NamaKriteria']; ?></td>
            <?php
            $c++;
                for($k=$c;$k<=$c;$k++)
                {?><td><?php echo $data['nilai']; ?></td>
                    <?php
                    $d = $d + $data['nilai'];
                }
                echo $data['Bobot']."\n";
                ?>
                <?php
                echo pow($data['nilai'],$data['Bobot']);
                $x = $x*pow($data['nilai'],$data['Bobot']);
            ?>

        	
    </tr>
    <?php
    }

    echo $x;

?>