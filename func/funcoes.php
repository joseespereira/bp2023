<?php
function verifica_email($EMAIL){

list($User, $Domain) = explode("@", $EMAIL);
$result = @checkdnsrr($Domain, 'MX');

return($result);

}
?>