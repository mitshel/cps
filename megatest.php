<?php
 header("Content-type: text/xml");
 header("Connection: close");
 header("Expires: -1");

 $log = "/home/www/cisco/megatest.log";
 $cmd = "/usr/local/bin/megatest.www > ".$log;

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

