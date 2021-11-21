<html>
	<head>
		<title>Тема 10.Меню</title>
		<style>
			body{
				background-image: url('1.png');
				background-size: 10%;
				background-repeat: no-repeat;
				background-position: center 60%;
				background-attachment: fixed;
			}
			
			#menu{
				background-color: black;
				padding: 20px 50px;
				border-radius: 20px;
				box-shadow: 0px 0px 20px blue;
			}
			
			#menu>a{
				text-decoration: none;
				margin-right: 15px;
				padding: 7px;
				border-radius: 6px;
			}
			#active{	border:2px solid white; color: white; }
			#notActive{ border:2px solid gray; color: gray; }
			
			h1{ font-size:3.5rem;}
			
			#buy{
				text-decoration: none;
				background: blue;
				color: white;
				padding: 7px;
				border-radius: 6px;
				}
			
		</style>
	</head>
	
	<body>	
	
		
		
		<p id="menu">
		<a href="z1.html" id="notActive">IPHONE</a>
		<a href="z2.html" id="active">IPAD</a>
		<a href="z3.html" id="active">APlLE WATH</a>
		<a href="z4.html" id="active">MAKBOOK</a>
		</p>
		
		<h1 align="center">APlLE WATH </h1>
		
		<p>
			<img src="ipad.png" width="500px" align="center">
			<a href="" id="buy">КУПИТИ</a>
		</p>
		
	</body>
</html>		