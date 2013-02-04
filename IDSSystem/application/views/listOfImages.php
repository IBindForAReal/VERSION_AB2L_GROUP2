<?php
foreach ($images as $entry) {
	header("Content-length: ".$entry['img_size']);
    header("Content-type: ".$entry['img_type']);
    print $entry['img_data'];

	//echo "<img src=\"viewimage.php?id=$row[id]\" width=\"55\" height=\"55\" /> <br/>";
}
?>
