<?php
if (
    $_SERVER['REQUEST_METHOD'] === 'POST'
    && isset($_POST["field1"])
    && isset($_POST["field2"])
	   && isset($_POST["field3"])
	      && isset($_POST["field4"])
	
) {
    $json = json_encode($_POST);
    // Save JSON to file
    file_put_contents("data.json", $json);
    // Return some data back to the AJAX request.
    echo $json;
    // PS it's not wise to send passwords that way. 
}