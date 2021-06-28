<?php
$todo = $_POST["todo"];
$now = date_create()->format('Y-m-d H:i:s');
if(isset($todo)){
    $jobid = rand(1,789997);
    $link = mysqli_connect("localhost", "root", "password", "mixas");
    $createJob = "INSERT INTO jobs (jobid,job,time) VALUES ('$jobid','$todo','$now')";
    mysqli_query($link, $createJob);
    mysqli_close($link);
}
?>
<html><body >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css"><br><br>
        <h3 class="welcome">Create New Job</h3><br>
        <form method = "POST">
            <div class="login">
                <br> <textarea class="inp" name = "todo" autocomplete="off" required="on" rows="10" cols="20"></textarea><br><br>
            </div>
            <button class="btn btn-outline-light" type= "submit"> Create</button>
        </form>
</body></html>