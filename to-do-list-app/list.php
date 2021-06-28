<?php
admin();

if (isset($_POST['jobid'])) {
    $jobid = $_POST['jobid'];
    $sql = mysqli_connect("localhost", "root", "password", "mixas");
    $deleteid = "DELETE FROM jobs WHERE jobid=$jobid";
    $sql->query($deleteid);
    $sql->close();
}
function admin(){
    echo "<br><br><br><hr>";
    $sql = mysqli_connect("localhost", "root", "password", "mixas");
    $checkServer = "SELECT * FROM jobs;";
    $result = mysqli_query($sql, $checkServer);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<center><div class="list"><hr>';
            echo $row['jobid']." ".$row['job']." ".$row['time'];
            echo "<hr></div></center>";
        }
    }
    mysqli_close($sql);
}
?>
<html><body >
    <style>
        .list{
            color:whitesmoke;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css"><br><br>
        <form method = "POST">
            <div class="login">
                Job id <br> <input class="inp" type="number" name = "jobid" autocomplete="off" required="on"><br><br>
            </div>
            <button class="btn btn-danger" type= "submit">Delete job</button>
        </form>
</body></html>