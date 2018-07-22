<!DOCTYPE html>
<html>
<head>
    <title>Uploading...</title>
</head>
<body>
    <h1>Uploading File</h1>

    <?php
    /**
     * Created by PhpStorm.
     * User: Hurf
     * Date: 2018/7/20
     * Time: 23:43
     */
        if ($_FILES['the_file']['error'] > 0){
            echo 'Problem: ';
            switch ($_FILES['the_file']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                    echo 'File exceeded upload max_filesize.';
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    echo 'File exceeded max_file_size.';
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo 'File only partially uploaded';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo 'No file uploaded';
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    echo 'Cannot upload file: No temp directory specified.';
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    echo 'Upload failed: Cannot write to disk.';
                    break;
                case UPLOAD_ERR_EXTENSION:
                    echo 'A PHP extension blocked the file upload.';
                    break;
            }
            exit;
        }

        // Does the file have the right MIME type?
        if ($_FILES['the_file']['type'] != 'image/png') {
            echo 'Problem: file is not a PNG image.';
            exit;
        }

        // put the file where we'd like it
        $uploaded_file = str_replace( '\\' , '/' , realpath(dirname(__FILE__).'/../../')).'/uploads/'.$_FILES['the_file']['name'];

        if (is_uploaded_file($_FILES['the_file']['tmp_name'])){
            if (!move_uploaded_file($_FILES['the_file']['tmp_name'], $uploaded_file)) {
                echo 'Problem: Could not move file to destination directory.';
                exit;
            }
        } else {
            echo 'Problem: Possible file upload attack. Filename: ';
            echo $_FILES['the_file']['name'];
            exit;
        }

        echo 'File uploaded successfully.';

        // show what was uploaded
        echo '<p>You uploaded the following image:<br/>';
        echo '<img src="/uploads/'. $_FILES['the_file']['name']. '">';
    ?>
</body>
</html>

