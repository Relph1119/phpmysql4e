<?php
/**
 * Created by PhpStorm.
 * User: Hurf
 * Date: 2018/7/22
 * Time: 16:39
 */

chdir(str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../../')).'/uploads/');

// exec version
echo '<h1>Using exec()</h1>';
echo '<pre>';

// unix
exec('ls -la', $result);

// windows
// exec('dir', $result);

foreach ($result as $line) {
    echo $line.PHP_EOL;
}

echo '</pre>';
echo '<hr />';

// passthru version
echo '<h1>Using passthru()</h1>';
echo '<pre>';

// unix
passthru('ls -la');

// windows
// passthru('dir');

echo '</pre>';
echo '<hr />';

// system version
echo '<hl>Using system()</hl>';
echo '<pre>';

// unix
$result = system('ls -la');

// windows
// $result = system('dir');
echo '</pre>';
echo '<hr />';

// backticks version
echo '<hl>Using Backticks</hl>';
echo '<pre>';

// unix
$result = `ls -la`;

// windows
// $result = 'dir';

echo $result;
echo '</pre>';
?>