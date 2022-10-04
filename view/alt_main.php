<?php
  $number = filter_input(INPUT_GET, 'number', FILTER_SANITIZE_NUMBER_INT);
  if(!$number) {
    include('./view/main/number_form.php');
  } else {
    include('./view/main/flash_cards.php');
  }
?>