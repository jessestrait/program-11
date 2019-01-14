<?php
 //session_start();
 header('Content-Type: text/html; charset=iso-8859-1');
 
 	
 
 ?>

 <html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/program-11.css">
		<title>
			ITSE 2302 Program-11: Jesse Strait
		</title>
	</head>

	<body>
		<h1>ITSE 2302 Program-11: Jesse Strait</h1>
		<hr>

		<h2>#1. Divs of various sizes and colors.</h2>

		<section class="dMain">
			<div id="d1">
			  <h3>d1</h3>
			</div>
			<div id="d2">
			  <h3>d2</h3>
			</div>
			<div id="d3">
			  <h3>d3</h3>
			</div>
			<div id="d4">
			  <h3>d4</h3>
			</div>
			<div id="d5">
			  <h3>d5</h3>
			</div>
			<div id="d6">
			  <h3>d6</h3>
			</div>
			<div id="d7">
			  <h3>d7</h3>
			</div>
			<div id="d8">
			  <h3>d8</h3>
			</div>
			<div id="d9">
			  <h3>d9</h3>
			</div>
			<div id="d10">
			  <h3>d10</h3>
			</div>
			<div id="d11">
			  <h3>d11</h3>
			</div>
			<div id="d12">
			  <h3>d12</h3>
			</div>
			<div id="d13">
			  <h3>d13</h3>
			</div>
			<div id="d14">
			  <h3>d14</h3>
			</div>
			<div id="d15">
			  <h3>d15</h3>
			</div>
			<div id="d16">
			  <h3>d16</h3>
			</div>
			<div id="d17">
			  <h3>d17</h3>
			</div>
			<div id="d18">
			  <h3>d18</h3>
			</div>
			<div id="d19">
			  <h3>d19</h3>
			</div>
			<div id="d20">
			  <h3>d20</h3>
			</section>
			<hr>
		<h2>#2. window.location href</h2>

		<p id="winloc"></p>
		<script>
		document.getElementById("winloc").innerHTML = 
		"The full URL of this page is:<br>" + window.location.href;
		</script>
		<div id="buttons">
			<button type="button" onclick="history.back();">BACK</button>
			<button type="button" onclick="history.forward();">FORWARD</button>
		</div>

		<p id="cookies"></p>

			<script>
			document.getElementById("cookies").innerHTML =
			"cookiesEnabled is " + navigator.cookieEnabled;
			</script>

		<p id="java"></p>

			<script>
			document.getElementById("java").innerHTML = "Java Enabled is " +navigator.javaEnabled();
			</script>
		<hr>
		<h2>#3. Change the color of the above DIVS!!</h2>
		<script>
			function changeColors(xml) {
			var xmlDoc = xml.responseXML;
			var colorColor = xmlDoc.getElementsByTagName("div");
			for (var i = 0; i < colorColor.length; i++){
			    var current = colorColor[i].getAttribute('name');
			    var theDiv = document.getElementById(current);
			    theDiv.style.backgroundColor = colorColor[i].childNodes[0].nextSibling.innerHTML;
			}
			}

			function setTheColors(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			    if (xhttp.readyState == 4 && xhttp.status == 200) {
			        changeColors(xhttp);
			    }
			};
			xhttp.open("GET", "divcolors.xml", true);
			xhttp.send();
			}
		</script>
		<div id="changeDiv">
		<input type="button" value="changediv" onclick="setTheColors()">
		</div>
		<hr>
		<h2>#4. Set an interval and change the DIVS colors.</h2>
		<div id="changeIntDiv">
		Time interval mil sec: <input type="number" id="time"><br>
		<input type="button" value="Change DIVS" onclick="getForm()">
		</div>
		<script>
			function getForm() {
				var int = document.getElementById("time").value;
				setInterval(changeColors1, int);
			}
			
			
			function random_bg_color() {
			    var x = Math.floor(Math.random() * 256);
			    var y = Math.floor(Math.random() * 256);
			    var z = Math.floor(Math.random() * 256);
			    var bgColor = "rgb(" + x + "," + y + "," + z + ")";
			  	return bgColor;
			    }

			function changeColors1() {
			var colorColor = document.getElementsByTagName("div");
			for (var i = 0; i < colorColor.length; i++){
				var color = random_bg_color();
				colorColor[i].style.backgroundColor = color;
			 }
			}
		</script>
		<h2>#5. display xml file.</h2>.
		<?php
		$xml=simplexml_load_file("divcolors.xml");
		print_r($xml);
		?>
		<hr>
		<h2>#6. get display size </h2>
		<p id="displaySize"></p>
		<script>
		function myDisplay() {
		    var w = window.innerWidth;
		    var h = window.innerHeight;
		    document.getElementById("displaySize").innerHTML = "Width: " + w + "<br>Height: " + h;
		}
		myDisplay();
		</script>
		<hr>
		<h2>#7. hit button to change URL</h2>
		<script>
			function leaveFun() {
				window.location = "http://www.codeandtheory.com/";
			}
		</script>
		<div id=number7>
		<input type="button" value="Leave Page" onclick="leaveFun()">
		</div>
		<hr>
		<h2>#8. Create and delete cookies</h2>
		<p id="create"></p>
		<p id="delete"></p>
		<script>
			function createCookie() {
				document.getElementById("create").innerHTML = "Cookie is Created";
				document.cookie = "username=John Doe";
			}
			function deleteCookie() {
				document.getElementById("delete").innerHTML = "Cookie is Deleted";
				document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
			}
		</script>
		<div id="cookieD">
		<input type="button" value="Create Cookie" onclick="createCookie()">
		<input type="button" value="Delete Cookie" onclick="deleteCookie()">
		</div>
	</body>
</html>

