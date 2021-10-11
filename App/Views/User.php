<?php

if (!isset($_SESSION['user'])) { ?>
  <script>
    location.href = "login";
  </script>;
<?php }

include "App/templates/userView.php";