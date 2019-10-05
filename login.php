<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<center>
		<div class="container" style="margin-top:20px">
		<h2>Masukan username dan password anda</h2>
    <div id="frm">
    	<form action="index.php" method="post">
    		<p>
    			<label>username:</label>
                <input type="text" id="user" name="user"/>
            </p>
            <p>
                <label>password:</label>
                <input type="password" id="password" name="pass"/>
            </p>
            <p>
                <input type="submit" id="submit" name="login"/>
            </p>
        </form>
    </div>  
    </center>                      
</html>