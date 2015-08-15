<?php 
$fn = (isset($_SERVER['HTTP_X_FILENAME']) ? $_SERVER['HTTP_X_FILENAME'] : false);
if ($fn) {
    file_put_contents(
        'uploads/' . $fn,
        file_get_contents('php://input')
    );
    echo "http://localhost/tx/demo/uploads/$fn";
	
    exit();
}
echo $_SERVER['HTTP_X_FILENAME'];
?>
