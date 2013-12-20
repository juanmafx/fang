<!doctype html>
<head>
<title>Fang</title>
<meta charset="utf-8">
<link href="http://sargiotto.com/dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
<div class="row">
<h1>Aliens Adbucted Me- Report and Abduction</h1>
<h2>Share your story of akien abduction:</h2>
<form method="post" action="report.php">
<div class="col-md-3">

<label for=firstname>First Name:</label><br>
<label for="lastname">Last name</label><br>
<label for="email">What is your email adress?</label><br>
<label for="whenithappened"> When did it happen?</label><br>
<label for="howlong">How long were you gone</label><br>
<label for="hownmany">How many did you see?</label><br>
<label for="aliendescription">Describe them:</label><br>
<label for="whattheydidi">What the did to you?</label><br>
<label for="fangspotted">Have you see my dog Fang?</label><br>
<label for="other">Anything else you want to add?</label><br>
</div>
<div class="col-md-9">
<input type="text" id="firstname" name="firstname"><br>
<input type="text" id="lastname" name="lastname"><br>
<input type="text" id="email" name="email"><br>
<input type="text" id="whenithappened" name="whenithappened"><br>
<input type="text" id="howlong" name="howlong"><br>
<input type="text" id="hownmany" name="hownmany"><br>
<input type="text" id="aliendescription" name="aliendescription" size="32"><br>
<input type="text" id="whattheydidi" name="whattheydid" size="32"><br>
Yes<input class="fangspotted" name="fangspotted" type="radio" value="yes">
No <input class="fangspotted" name="fangspotted" type="radio" value="no"><br>
<textarea id="other" name="other"></textarea><br>
<input type="submit" value="Report Abduction" name="submit">
</div>
</form>



</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://sargiotto.com/dist/js/bootstrap.js"></script>
</body>
</html>
