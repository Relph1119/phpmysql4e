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
 * Time: 11:12
 */
    $dir = dir(str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../../')).'/uploads/');

    echo '<p>Handle is '.$dir->handle.'</p>';
    echo '<p>Upload directory is '.$dir->path.'</p>';
    echo '<p>Directory Listing:</p><ul>';

    while (false !== ($file = $dir->read())) {
        // strip out the two entries of . and ..
        if ($file != "." && $file != "..") {
            echo '<li>'.$file.'</li>';
        }
    }
    echo '</ul>';
    $dir->close();
?>
</body>
</html>
