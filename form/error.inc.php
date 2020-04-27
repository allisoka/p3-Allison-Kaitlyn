<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
}


  nav ul li{
    display:inline;
  }

  nav a{
    text-decoration: none;
    color:white;
    background:#eeb461;
    padding:5px 20px;
    font-family: 'Roboto', sans-serif;
  }

  nav a:hover{
    text-decoration: none;
    color:white;
    background:#4664af;
    padding:5px 20px;
    font-family: 'Roboto', sans-serif;
  }

  header{
    margin:20px 0px;
  }
  </style>


<header>
  <nav>
    <ul>
      <li><a href="index.html">home</a></li>
      <li><a href="index.html">services</a></li>
      <li><a href="index.html">work</a></li>
      <li><a href="index.html">about</a></li>
    </ul>
  </nav>
</header>

<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
