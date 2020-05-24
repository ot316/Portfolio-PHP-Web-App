﻿
<?php
	$commands = array(
		'whoami',
		'git reset --hard HEAD',
		'git pull origin master',
		'git status',
	);
	// Run the commands for output
	$output = '';
	foreach($commands AS $command){
		// Run it
		$tmp = exec($command);
		// Output
		$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
		$output .= htmlentities(trim($tmp)) . "\n";
	}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Git Deployment Page</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
<?php echo $output; ?>
</pre>
</body>
</html>