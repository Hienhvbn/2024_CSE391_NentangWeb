<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data'];
    file_put_contents('data.json', $data);
    echo 'Data saved successfully';
} else {
    echo 'Invalid request method';
}
?>
