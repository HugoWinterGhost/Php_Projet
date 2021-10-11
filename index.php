<?php

require "App/session/session.php";
require "App/Bdd/Bdd.php";
require "App/Bdd/Animaux.php";

require "App/Animaux/Chat.php";
require "App/Animaux/Chien.php";
require "App/Animaux/Poisson.php";
require "App/Animaux/Reptile.php";
require "App/Content/AnimalContent.php";

include "App/templates/head/head.php";
include "App/templates/head/header.php";

$bddAnimaux = Animaux::getAllAnimaux();

switch ($_SERVER['REQUEST_URI']):
    case (preg_match('/\/animal\/(\d+)/', $_SERVER['REQUEST_URI'], $matches) ? true : false) :
        $bddAnimal = Animaux::getAnimal($matches[1]);
        include "App/Views/AnimalProfile.php";
        break;
    case ("/chats") :
        $bddAnimauxByCategorie = Animaux::getAnimauxByCategorie('Chat');
        include "App/Views/Home.php";
        break;
    case ("/chiens") :
        $bddAnimauxByCategorie = Animaux::getAnimauxByCategorie('Chien');
        include "App/Views/Home.php";
        break;
    case ("/poissons") :
        $bddAnimauxByCategorie = Animaux::getAnimauxByCategorie('Poisson');
        include "App/Views/Home.php";
        break;
    case ("/reptiles") :
        $bddAnimauxByCategorie = Animaux::getAnimauxByCategorie('Reptile');
        include "App/Views/Home.php";
        break;
    case ("/register") :
        include "App/Views/Register.php";
        break;
    case ("/login") :
        include "App/Views/Login.php";
        break;
    case ("/logout") :
        include "App/Views/Logout.php";
        break;
    case ("/user") :
        include "App/Views/User.php";
        break;
    case ("/blog") :
        include "App/Views/Blog.php";
        break;
    default:
        $bddAnimauxByCategorie = null;
        include "App/Views/Carousel.php";
        include "App/Views/Intro.php";
        include "App/Views/Home.php";
endswitch;
