<?php
// index.php file

$search_done = false;

if (isset( $_GET['word'] )) {
	search($_GET['word']);
}

function search($word) {
	$containers = [];

	$file = file_get_contents('dict.json');
	$dict = json_decode($file, true); // decode the JSON into an associative array

	// finding such words
	foreach ($dict as $key => $value) {
		if ( startsWith($key, $word) ) {
		// if ( contains($key, $word) ) {
			// $containers[$key] = $value;
			echo '<hr>' . $key . ': ' . $value;
		}
	}

	$search_done = true;
}

function startsWith ($haystack, $needle) {
	return stripos($haystack, $needle, 0) === 0;
}

function contains ($haystack, $needle) {
	return strpos($haystack, $needle) != false;
}

?>

<html>
<head>
	<title>Dictionary Search</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<style type="text/css">
body {
	margin: 10%;
}
</style>
</head>
<body>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Awwla Dictionary</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="word">Search</label>  
  <div class="col-md-4">
  <input id="word" name="word" type="text" placeholder="Keyword" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="brn"></label>
  <div class="col-md-4">
    <button id="brn" class="btn btn-default">Search</button>
  </div>
</div>

</fieldset>
</form>

<?php
	// if ($search_done) {
	// 	echo '<pre>';
	// 	foreach ($containers as $key => $value) {
	// 		echo $key . ': ' . $value . '<br>';
	// 	}
	// 	echo '</pre>';
	// 	$search_done = false;
	// }
?>

</body>
</html>