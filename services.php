<?php
 header("Content-type: text/xml");
 header("Connection: close");
 header("Expires: -1");
?> 

<CiscoIPPhoneMenu>
<Title>Доступные сервисы</Title>
<Prompt></Prompt>
<MenuItem>
<Name>Телефонный справочник</Name>
<URL>http://dsgate/cisco/phone.php</URL>
</MenuItem>
<MenuItem>
<Name>Такси</Name>
<URL>http://dsgate/cisco/taxi.php</URL>
</MenuItem>
<MenuItem>
<Name>Погода</Name>
<URL>http://dsgate/cisco/pogoda.php</URL>
</MenuItem>
<MenuItem>
<Name>Последние вызовы</Name>
<URL>http://dsgate/cisco/ast-calls.php</URL>
</MenuItem>
<MenuItem>
<Name>Тест Asterisk</Name>
<URL>http://dsgate/cisco/megatest.php</URL>
</MenuItem>



</CiscoIPPhoneMenu>

