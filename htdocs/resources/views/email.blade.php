<!DOCTYPE HTML>
<html><head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<title>Purdue Hackers Account Created</title>
	<style>
	body {
		background-color: #eeda69;
	}
	
	#header {
		width: 100%;
		padding-top: 10px;
		text-align: center;
	}
	#headerImage {
		width: 80px;
		height: 80px;
	}
	
	.message {
		margin-top: 15px;
		background-color: #EEEEEE;
		border-radius: 30px;
		padding: 20px;
		width: 500px;
		margin-left: auto;
		margin-right: auto;
	}
	
	a {
		color: #0043bb;
		text-decoration: none;
	}
	
	a:hover {
		color: #4485ff;
	}
	
	#footer {
		padding: 5px;
		width: 500px;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
	}
	</style>
</head><body>
	<div id="header">
		<img src="http://www.purduehackers.com/images/logo_white_square_300.png" id="headerImage">
	</div>
	
	@yield('content')
	
	<div id="footer">
		Sent by <a href="http://www.purduehackers.com">Purdue Hackers</a> (<a href="mailto:purduehackers@gmail.com">purduehackers@gmail.com</a>)
	</div>
</body></html>