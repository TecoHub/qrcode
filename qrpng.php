<?php 

include("phpqrcode/qrlib.php");

  // outputs image directly into browser, as PNG stream

  $bal = $_POST["text"];

  QRcode::png($bal);



?>