<?php
$perangkatKerasKomputer = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>

<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($perangkatKerasKomputer as $hardware) : ?>
            <li><?= $hardware; ?></li>
        <?php endforeach; ?>
    </ol>

    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php array_unshift($perangkatKerasKomputer, "Card Reader", "Modem"); ?>
        <li><?= $perangkatKerasKomputer[0]; ?></li>
        <li><?= $perangkatKerasKomputer[4]; ?></li>
        <li><?= $perangkatKerasKomputer[1]; ?></li>
        <li><?= $perangkatKerasKomputer[2]; ?></li>
        <li><?= $perangkatKerasKomputer[5]; ?></li>
        <li><?= $perangkatKerasKomputer[3]; ?></li>
        <li><?= $perangkatKerasKomputer[7]; ?></li>
        <li><?= $perangkatKerasKomputer[6]; ?></li>
    </ol>
</body>

</html>