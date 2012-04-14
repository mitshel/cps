<?php
 header("Content-type: text/xml");
 header("Connection: close");
 header("Expires: -1");

 $cmd = "/home/www/cisco/ast-calls";
 $log = "/home/www/cisco/ast-calls.log";

 $last_line = system($cmd, $retval);

 $fh = fopen($log,'r') or die($php_errormsg);
 $text = fread($fh,filesize($log));
 fclose($fh) or die($php_errormsg);
?> 

<CiscoIPPhoneText>
<Title>Последние вызовы</Title>
<Text>
<?php
  echo $text;
?>
</Text>
</CiscoIPPhoneText>

