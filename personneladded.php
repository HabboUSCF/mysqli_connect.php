<!DOCTYPE html>
<html>
    <head>
        <title>
            PERSONNEL ADDED
        </title>
    </head>
    <body>
        <?php
if(isset($_POST['submit'])){
    $data_missing = array();
    if(empty($_POST['username'])){
        $data_missing[] = 'USERNAME';
    } else {
        $u_name = trim($POST['username']);
    }
    if(empty($_POST['motto'])){
        $data_missing[] = 'MOTTO';
    } else {
        $motto = trim($POST['motto']);
    }
    if(empty($_POST['rank'])){
        $data_missing[] = 'RANK';
    } else {
        $rank = trim($POST['rank']);
    }
    if(empty($_POST['join_date'])){
        $data_missing[] = 'DATE OF ENLISTMENT';
    } else {
        $join_date = trim($POST['join_date']);
    }
    if(empty($date_missing)){
        require_once('../mysqli_connect.php');
        $query = "INSERT INTO sakila.pts (username, rank, motto, join_date) VALUES (?, ?, ?, NOW())";
        $stmt = mysqli_prepare($dbc, $query);
        i Integers
        d Doubles
        b Blobs
        s Everything Else
        mysqli_stmt_bind_param($stmt, "ssss", $u_name, $rank, $motto, $join_date);
        mysqli_stmt_execute($stmt);
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        if($affected_rows ==1){
            echo 'Personnel Entered';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        } else {
            echo 'Error Occured<br />';
            echo mysqli_error();
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }
    } else {
        echo 'You need to enter the following data<br />';
        foreach($data_missing as $missing){
            echo "$missing<br />";
        }
    }
}
        ?>
        <form action="mysqli_connect.php/personneladded.php" method="post">
            <b>
                PTS PROFILE FORM
            </b>
            <p>
                USERNAME:
                <input type="text" name="username" size="30" value="" placeholder="FULL USERNAME" />
            </p>
            <p>
                RANK:
                <input type="text" name="rank" size="30" value="" placeholder="FULL RANK"/>
            </p>
            <p>
                MOTTO:
                <input type="text" name="motto" size="30" value="" placeholder="[BRANCH] RANK, OFFICE {ADTs}/></p>
<p>DATE OF ENLISTMENT:
<input type="text" name="date_joined" size="30" value="" placeholder="YY/MM/DD"/></p>
<p>
<input type="submit" name="submit" value="SEND" />
</p>
</form>
</body>
</html>
