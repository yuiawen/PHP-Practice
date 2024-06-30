	
<?php
$folder = "folder_anda";
$handle = opendir($folder);
echo '<table cellspacing="2" cellpadding="5">';
echo '<tr>';
$i = 1;
$fileGambar = array('png', 'jpg', 'jpeg', 'gif');
while (false !== ($file = readdir($handle))) {
    $fileAndExt = explode('.', $file);
    if (in_array(end($fileAndExt), $fileGambar)) {
        echo '<td style="border:1px solid #000000;" align="center">
			<img src="folder_anda/' . $file . '" width="300" /><br />
			' . $file . '
		</td>';
        if (($i % 4) == 0) {
            echo '</tr><tr>';
        }
        $i++;
    }
}
echo '</tr>';
echo '</table>';
?>

