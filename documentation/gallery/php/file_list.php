<?php
    if ($dir = opendir($_POST['path'])) {
        while (false !== ($file = readdir($dir))) {
            $len=strlen($file);
            if($len > 0){
                if (preg_match("/.(jpg|png)$/i", $file)) {
				    echo "$file;";
				}
            }
        }
    }
?>