<?php
	require_once "PHP Lib/api.php";
	
	$error = false;
	
	try
	{
		Auth::authenticate();
	}
	catch(Exception $ex)
	{
		$error = 'Authentication failed ' . $ex->getMessage();
	}
?>
<html>
<head>
<title>Testing Google login</title>
</head>
<body>
<?php
	if($error)
	{
		echo $error;
	}
	else
	{
		ReportDataHelper::putNewReport(Report::CreateReport(Util::getUser()->getGoogleID(), Display::Table, 
	}
?>
</body>
</html>