<h2>
  <?php
    $message = "";
    $number = filter_input(INPUT_GET, 'number', FILTER_DEFAULT);
    if(!empty($number)) {
      $message = "Click here to pick another number";
    } else {
      $message = "🚀 🚀 🚀 🚀 🚀 🚀";
    }
    echo $message;
    ?>
</h2>