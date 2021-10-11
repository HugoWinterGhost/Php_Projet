<?php

if (!isset($_SESSION['user'])) {
  session_start();
}

$menuUser = "";

if (isset($_SESSION['user'])) {
  $menuUser = true;
}

elseif (!isset($_SESSION['user'])) {
  $menuUser = false;
}
