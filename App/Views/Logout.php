<?php

session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
  $_SESSION['user'] = "";
  session_destroy();
} ?>

<script>
  location.href = "index";
</script>