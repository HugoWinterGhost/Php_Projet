<?php 

$active = match($_SERVER['REQUEST_URI']) {
  '/chats' => 'chats',
  '/chiens' => 'chiens',
  '/poissons' => 'poissons',
  '/reptiles' => 'reptiles',
  '/' => 'home',
  '/login' => 'login',
  '/register' => 'register',
  '/user' => 'user',
  '/gestion' => 'gestion',
  '/blog' => 'blog',
  default => '',
};

?>
<div class="navbar">
  <img class="logo" width=300px; src="/App/templates/img/logo.png" onclick="redirectHome()"> 
  <div class="nav">  
  <a <?php if($active === "home"): ?> class="active" <?php endif ?> href="/">Accueil</a>
  <a <?php if($active === "chiens"): ?> class="active" <?php endif ?> href="/chiens">Chiens</a>
  <a <?php if($active === "chats"): ?> class="active" <?php endif ?> href="/chats">Chats</a>
  <a <?php if($active === "poissons"): ?> class="active" <?php endif ?> href="/poissons">Poissons</a>
  <a <?php if($active === "reptiles"): ?> class="active" <?php endif ?> href="/reptiles">Reptiles</a>
  <a <?php if($active === "blog"): ?> class="active" <?php endif ?> href="/blog">Blog</a>
  <?php if ($menuUser) { ?>
    <a <?php if($active === "user"): ?> class="active" <?php endif ?> href="/user">Mon compte</a>
  <?php } else if ($menuAdmin) { ?>
    <a <?php if($active === "user"): ?> class="active" <?php endif ?> href="/user">Mon compte</a>
    <a <?php if($active === "gestion"): ?> class="active" <?php endif ?> href="/gestion">Administration</a>
  <?php } else { ?>
    <a <?php if($active === "register"): ?> class="active" <?php endif ?> href="/register">S'enregistrer</a>
    <a <?php if($active === "login"): ?> class="active" <?php endif ?> href="/login">Se connecter</a>
  <?php } ?>
  </div>
</div>

<script>
  function redirectHome(){
    location.href ="home";  
  }
</script>

