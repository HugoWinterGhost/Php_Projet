<?php

if (!isset($_SESSION['user'])) {
  session_start();
}

$menuUser = "";
$menuAdmin = "";

if (isset($_SESSION['user'])) {
  $menuUser = true;
  $menuAdmin = false;
}

elseif (!isset($_SESSION['user'])) {
  $menuUser = false;
  $menuAdmin = false;
}

if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') {
  $menuUser = false;
  $menuAdmin = true;
}
