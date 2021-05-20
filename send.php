<?php
include 'connection/connection.php';

date_default_timezone_set("Asia/Bangkok");
$name = $_POST['name'];
$msg = $_POST['msg'];
$time = date("Y-m-d  H:i:s");
$room = "iklimaderry";
// $data['name'] = $name;
// $data['message'] = $msg;
// $data['time'] = $time;

if(isset($name) && isset($msg)){
    $refresh = "<button type='button' class='btn btn-outline-dark btn-ref' onclick='location.reload();'><small><i class='fas fa-sync-alt'></i> Refresh</small></button>";
    $query = "INSERT INTO `message`(`name`,`msg`,`roomName`) VALUES ('$name','$msg','$room')";
    $result = mysqli_query($con,$query) or trigger_error(mysqli_error($con));
    if ($result){
        echo "<div>Pesan terkirim!<i class='fas fa-check-circle'></i></div>".$refresh;
        //$pusher->trigger('kahfiart', 'herlinhelmi', $data);
    } else {
        echo "<div>Pesan tidak terkirim!<i class='fas fa-times-circle'></i></div>".$refresh;
    }
} else {
    echo "Error";
}

mysqli_close($con);