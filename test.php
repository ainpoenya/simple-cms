<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
</head>
<body>
<?php
 
//****INCLUDE GLOBALS*******************************************************************

include("sqlStrings.php");
include("settings.php");

foreach($_POST as $key => $value)
{
   echo "$key => $value<br/>\n";
}

?>	
</body>
</html>
