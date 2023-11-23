 <?php
    include_once 'MyFrameworks/DBQuery.php';

    if (isset($_POST["IDSubmit"])) {
        $username = strtoupper($_POST["usernametbx"]);
        $password = strtoupper($_POST["passwordtbx"]);
        $command = mysqli_query(DBConnection::getdbconnection(), "Select * from admin where email='" . $username . "' AND password='" . $password . "'");
        $row = mysqli_fetch_array($command);
        if ($username == $row["email"] && $password  == $row["password"]) {
            session_start();
            $_SESSION["Account-Login"] = ''; ///// ito yung gagamitin natin para pag hindi nag login di makakapasok sa system
            $_SESSION["LoginFirst"] = $username;
            echo '<script>window.location.href="dashboard.php?Home";</script>';
        } else {
            echo '<script>window.location.href="index.php?Error"</script>';
        }
    }
    ?>        