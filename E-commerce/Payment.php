<?php
require("stripe-php-master/init.php");

$publishkey="pk_test_51MPeZkSEOLKVb1XuilGJKxciHslei3mVabujmxRLvg0PAb10lgHYEHmcDhSSXCA5k0o7IhkntPHy6SHGx969dhiz00UEwi3boi";

$secretkey="sk_test_51MPeZkSEOLKVb1XuaN8kR9tLBMjRgUjQxqcQWqX0SUAl1vsjuzixN1pyagBt2EkItzOFf0dZGjEtTHhtYHlZM3Vb007GWuptwm";

\Stripe\Stripe::setApiKey($secretkey);
?>