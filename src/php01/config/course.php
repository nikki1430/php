<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$set = htmlspecialchars($_POST['set'], ENT_QUOTES);
$mass = htmlentities($_POST['number'], ENT_QUOTES);

print '私の名前は、' . $name . '<br />';
print 'ご希望の商品は、' . $set . '<br />';
print 'ご注文数は、' . $mass > '<br />';
