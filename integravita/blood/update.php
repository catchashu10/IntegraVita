<!doctype html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Info</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="styles.css" type="text/css" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	

</head>

<body>
	<section id="body" class="width">
			<aside id="sidebar" class="column-left" style="background-color:crimson">
			<header>
				<img src="images/profile.png" alt="Profile Icon" style="width:70%;height:70%;">
				<a href="#" class="button2">Sign Out</a>
				<a href="#" class="button2">Change Pic</a>	
				<h2>Blood-bank Name</h2><!-- Name of the pharmacy using database-->
				<h2>Mr. User Name</h2><!-- Name of the shopkeeper using database-->
			</header>
			<nav id="mainnav">
  											<ul>
                            		<li><a href="index.php">Profile</a></li>
                           		 <li ><a href="Record.php">Record</a></li>
                           		</ul>
			</nav>
			</aside>
		</section>
		<section id="content" class="column-right">    		
	    <article>
			<h2>Profile Information</h2>
			<div class="article-info">General Information</a></div>
				<h4>Personnal Information</h4>
          <form class="styledlist">
            <div class="input_group">
              <label>First Name:</label><input type="text" name="firstname" required><br>
              <label>Last Name:</label><input type="text" name="lastname" required><br>
              <label>Email:</label><input type="email" name="peremail" required><br>
              <label>Contact:</label><input type="tel" name="percontact" required><br>
            </div>
           </form>  
          <h4>Store Information</h4>
          <form class="styledlist">
            <div class="input_group2">
              <label>Name:</label><input type="text" name="storename" required><br>
              <label>Email:</label><input type="text" name="storeemail" required><br>
              <label>Address:</label><input type="text" name="Address" required><br>
              <label>Contact:</label><input type="text" name="storecontact" required><br>
              <label>Location:</label><button onclick="getLocation()">Find My location</button>
            </div>
          </form>
        
		<a href="#" class="button_reversed">Save</a>
		</article>
		</section>
		<div class="clear"></div>
	</section>
  <script>
  var x = document.getElementById("demo");
  function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
  }
  function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "Longitude: " + position.coords.longitude;
  }
</script>

  </body>
</html>
