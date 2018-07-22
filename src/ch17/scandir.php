<html>
<head>
    <title>Browse Directories</title>
</head>
<body>
<h1>Browsing</h1>
<?php
/**
 * Created by PhpStorm.
 * User: Hurf
 * Date: 2018/7/21
 * Time: 11:27
 */
    $dir = str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../../')).'/uploads/';
    $file1 = scandir($dir);
    $file2 = scandir($dir, 1);

    echo '<p>Upload directory is '.$dir.'</p>';
    echo '<p>Directory Listing in alphabetical order, ascending:</p><ul>';

    foreach ($file1 as $file) {
        if ($file != '.' && $file != "..") {
            echo '<li>'.$file.'</li>';
        }
    }
    echo '</ul>';

    echo '<p>Upload directory is '.$dir.'</p>';
    echo '<p>Directory Listing in alphabetical, descending:</p><ul>';

    foreach ($file2 as $file) {
        if ($file != '.' && $file != "..") {
            echo '<li>'.$file.'</li>';
        }
    }
    echo '</ul>';
?>
</body>
</html>

