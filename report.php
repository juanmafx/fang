<!doctype html>
<head>
<title>Aliens Abduced Me - Report an Abduction</title>
<meta charset="utf-8">
<link href="http://sargiotto.com/dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="row">
<h2>Aliens Abduced Me - Report an Abduction</h2>


<?
$when_it_happened = $_POST ['whenithappened'];
$how_long = $_POST ['howlong'];
$how_many = $_POST ['hownmany'];
$alien_description = $_POST ['aliendescription'];
$what_they_did = $_POST ['whattheydid'];
$fang_spoted = $_POST['fangspotted'];
$comments = $_POST['other'];
$email = $_POST ['email'];

echo ' Thanks for submitting the form. <br>';
echo 'You were abducted '. $when_it_happened;
echo ' and were gone for ' . $how_long . '<br>';
echo 'Number of aliens: ' . $how_many . '<br>';
echo 'Describe them: ' . $alien_description  . '<br>';
echo 'The aliens did this: ' . $what_they_did . '<br>';
echo 'Was Fang there? ' . $fang_spoted . '<br>';
echo 'Your email adress is ' . $email;

?>

</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://sargiotto.com/dist/js/bootstrap.js"></script>
</body>
</html>
