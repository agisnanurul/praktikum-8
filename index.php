<?php

require_once "app/Mhsw.php";

$mhsw = new Mhsw();
$rows = $mhsw->tampil();

?>

    <table>
        <tr>
            <tb>NO</tb>
            <tb>NIM</tb>
            <tb>NAMA</tb>
            <tb>ALAMAT</tb>
        </tr>

        <?php foreach ($rows as $row) { ?>

            <tr>
                <td><?php echo $row['mhsw_id']; ?></td>
                <td><?php echo $row['mhsw_nim']; ?></td>
                <td><?php echo $row['mhsw_nama']; ?></td>
                <td><?php echo $row['mhsw_alamat']; ?></td>
            </tr>

        <?php } ?>
    </table>