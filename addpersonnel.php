<!DOCTYPE html>
<html>
	<head>
		<title>Add Personnel</title>
	</head>
	<body>
		
		<form action="mysqli_connect.php/personneladded.php" method="post">
		    
		    <b>PTS PROFILE FORM</b>
		    
		    <p>USERNAME:
		    <input type="text" name="username" size="30" value="" placeholder="FULL USERNAME" /></p>
		    
		    <p>RANK:
		    <input type="text" name="rank" size="30" value="" placeholder="FULL RANK" /></p>
		    
		    <p>MOTTO:
		    <input type="text" name="motto" size="30" value="" placeholder="[BRANCH] RANK/OFFICE {ADTs}" /></p>
		    
		    <p>DATE OF ENLISTMENT:
		    <input type="text" name="date_joined" size="30" value="" placeholder="YY/MM/DD" /></p>
		    
		    <p>
		        <input type="submit" name="submit" value="SEND" />
		    </p>
		</form>
		
	</body>
</html>
