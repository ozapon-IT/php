<?php
  $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
  print '私の名前は、 ' . $name . '<br />';
  $desired = htmlspecialchars($_POST['desired'], ENT_QUOTES);
  print '希望の商品は、 ' . $desired . '<br />';
  $orders = htmlspecialchars($_POST['orders'], ENT_QUOTES);
  print '注文数は、 ' . $orders;
?>