<?php 

$mois = date('m');
$annee = date('Y');

?><!DOCTYPE html>
<html>
<head>

	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<title>Calendrier</title>
	<style>
		body {
    font-family: 'Open Sans', sans-serif;
}

table {
    width: 80%;
    height: 500px;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
}

.case {
    border: 1px solid black;
    text-align: center;
}
.case-aujourd-hui{
	background-color: #6495ed;

}

#content {
    height: 80%;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}

	</style>
</head>
<body>


	<img id="prev" src="images/demo/image.png" height="40px" width="40px" style="float:left;"/>
	<img id="next" src="images/demo/image1.png" height="40px" width="40px" style="float:right;"/>
</div>

<div id="content">
</div>

<script type="text/javascript">
	
jQuery(function($){

	var mois = <?php echo $mois; ?>;
	var annee = <?php echo $annee; ?>;

	$(document).ready(function(){

		$("#content").load("calendrier.php?mois="+mois+"&annee="+annee+"");

	});

	$("#prev").click(function(){

		mois--;

		if (mois < 1) {
			annee--;
			mois = 12;
		}

		$("#content").load("calendrier.php?mois="+mois+"&annee="+annee+"");

	});

	$("#next").click(function(){

		mois++;

		if (mois > 12) {
			annee++;
			mois = 1;
		}

		$("#content").load("calendrier.php?mois="+mois+"&annee="+annee+"");

	});

});

</script>
</body>
</html>