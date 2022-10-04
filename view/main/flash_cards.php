<div class="flashcards">
  <?php
    $cards = null;
    for($multiplier = 1; $multiplier < 11; $multiplier++) {
      $result = $number * $multiplier;
      $cards .= "<div class='card> tabindex='0'
                  aria-label='$number multiplied by $multiplier equals $result'>
                  <div class='card-front'
                    aria-label='$number multiplied by $multiplier equals $result'>
                    $number X $multiplier
                  </div>
                  <div class='card-back'
                    aria-label='$number multiplier by $multiplier equals $result'>
                      $result
                  </div>
                </div>";
    }
    echo $cards;
  ?>
</div>