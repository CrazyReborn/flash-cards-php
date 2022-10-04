<?php
  $number_input = $GET['number'];
  $number_sanitized = htmlspecialchars($number_input);
  echo empty($number_sanitized);
  if(!empty($number_sanitized)) {
    include('./view/main/number_form.php');
  } else {
    include('./view/main/flash_cards.php');
  }
?>

