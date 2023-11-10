<?php

$arraySelectors = [
  "*" => 'Tous les éléments de la page html',
  "div" => "tous les éléments div",
  "div,p" => "tous les éléments div et p",
  "div p" => "tous les éléments p qui sont dans un élément div",
  "div > p" => "tous les éléments p qui sont directement dans un élément div",
  "div + p" => "tous les éléments p qui sont directement après un élément div",
  "div ~ p" => "tous les éléments p qui sont après un élément div",
  ".nomDeClasse" => "tous les éléments qui ont la classe nomDeClasse",
  "div.nomDeClasse" => "tous les éléments div qui ont la classe nomDeClasse",
  "#nomId" => "l'élément qui a l'id nomId",
  "div#nomId" => "l'élément div qui a l'id nomId",
  "div:first-child" => "le premier élément div",
  "div:last-child" => "le dernier élément div",
  "div:nth-child(2)" => "le deuxième élément div (index commence à 1)",
  "div:nth-child(2n)" => "les éléments div d'index pair",
  "div:nth-child(2n+1)" => "les éléments div d'index impair",
  "div:nth-child(2n+3)" => "les éléments div d'index 3, 5, 7, 9, etc.",
];


$arrayPseudoClass = [
  "a:link" => "tous les liens non visités",
  "a:visited" => "tous les liens visités",
  "a:hover" => "tous les liens survolés",
  "a:active" => "tous les liens activés",
  "p:first-letter" => "la première lettre de tous les éléments p",
  "p:first-line" => "la première ligne de tous les éléments p",
  "p:first-of-type" => "le premier élément p",
  "p:last-of-type" => "le dernier élément p",
  "p:only-of-type" => "les éléments p qui sont les seuls éléments p de leur parent",
  "p:only-child" => "les éléments p qui sont les seuls éléments enfants de leur parent",

];


$arrayFlexboxValues = [
  "align-content" => "alignement du contenu d'un conteneur flex",
  "align-items" => "alignement des items d'un conteneur flex",
  "align-self" => "alignement d'un item d'un conteneur flex",
  "all" => "réinitialise toutes les propriétés",
];

$arrayAnimationValues = [
  "animation" => "définit une animation",
  "animation-delay" => "définit un délai avant le démarrage d'une animation",
  "animation-direction" => "définit le sens d'une animation",
  "animation-duration" => "définit la durée d'une animation",
  "animation-fill-mode" => "définit le style d'une animation avant et après son exécution",
  "animation-iteration-count" => "définit le nombre de fois qu'une animation doit être exécutée",
  "animation-name" => "définit le nom d'une animation",
  "animation-play-state" => "définit l'état de lecture d'une animation",
  "animation-timing-function" => "définit la vitesse de progression d'une animation",
  "backface-visibility" => "définit si le verso d'un élément est visible lorsqu'il est tourné",

];

$arrayBackgroundValues = [
  "background" => "définit une couleur et/ou une image d'arrière-plan",
  "background-attachment" => "définit si l'image d'arrière-plan est fixe ou se déplace avec le reste de la page",
  "background-blend-mode" => "définit le mode de fusion des images d'arrière-plan",
  "background-clip" => "définit la zone d'affichage de l'image d'arrière-plan",
  "background-color" => "définit la couleur d'arrière-plan",
  "background-image" => "définit l'image d'arrière-plan",
  "background-origin" => "définit la position initiale de l'image d'arrière-plan",
  "background-position" => "définit la position de l'image d'arrière-plan",
  "background-repeat" => "définit comment répéter (ou pas) une image d'arrière-plan",
  "background-size" => "définit la taille de l'image d'arrière-plan",
];

$arrayBorderValues = [
  "border" => "définit une bordure",
  "border-bottom" => "définit une bordure inférieure",
  "border-bottom-color" => "définit la couleur de la bordure inférieure",
  "border-bottom-left-radius" => "définit le rayon de l'angle inférieur gauche de la bordure",
  "border-bottom-right-radius" => "définit le rayon de l'angle inférieur droit de la bordure",
  "border-bottom-style" => "définit le style de la bordure inférieure",
  "border-bottom-width" => "définit la largeur de la bordure inférieure",
  "border-collapse" => "définit si les bordures de tableau doivent être collées ou séparées",
  "border-color" => "définit la couleur des quatre bordures",
  "border-image" => "définit une image comme bordure",
  "border-image-outset" => "définit la taille de la bordure-image",
  "border-image-repeat" => "définit comment répéter (ou pas) une image de bordure",
  "border-image-slice" => "définit comment découper l'image de bordure",
  "border-image-source" => "définit le chemin de l'image à utiliser comme bordure",
  "border-image-width" => "définit la largeur de la bordure-image",
  "border-left" => "définit une bordure gauche",
  "border-left-color" => "définit la couleur de la bordure gauche",
  "border-left-style" => "définit le style de la bordure gauche",
  "border-left-width" => "définit la largeur de la bordure gauche",
  "border-radius" => "définit le rayon des angles d'une bordure",
  "border-right" => "définit une bordure droite",
  "border-right-color" => "définit la couleur de la bordure droite",
  "border-right-style" => "définit le style de la bordure droite",
  "border-right-width" => "définit la largeur de la bordure droite",
  "border-spacing" => "définit l'espacement entre les cellules de tableau",
  "border-style" => "définit le style des quatre bordures",
  "border-top" => "définit une bordure supérieure",
  "border-top-color" => "définit la couleur de la bordure supérieure",
  "border-top-left-radius" => "définit le rayon de l'angle supérieur gauche de la bordure",
  "border-top-right-radius" => "définit le rayon de l'angle supérieur droit de la bordure",
  "border-top-style" => "définit le style de la bordure supérieure",
  "border-top-width" => "définit la largeur de la bordure supérieure",
  "border-width" => "définit la largeur des quatre bordures"

];

$arrayTextValues = [
  "color" => "définit la couleur du texte",
  "direction" => "définit la direction du texte",
  "letter-spacing" => "définit l'espacement entre les caractères",
  "line-height" => "définit la hauteur de ligne",
  "text-align" => "définit l'alignement horizontal du texte",
  "text-align-last" => "définit l'alignement horizontal du dernier bloc de texte d'une ligne",
  "text-decoration" => "définit la décoration du texte",
  "text-decoration-color" => "définit la couleur de la décoration du texte",
  "text-decoration-line" => "définit le type de décoration du texte",
  "text-decoration-style" => "définit le style de la décoration du texte",
  "text-indent" => "définit l'indentation de la première ligne d'un texte",
  "text-justify" => "définit la justification du texte",
  "text-overflow" => "définit le comportement d'un texte qui déborde de son conteneur",
  "text-shadow" => "définit l'ombre d'un texte",
  "text-transform" => "définit la casse du texte",
  "unicode-bidi" => "définit le niveau de prise en charge des caractères Unicode",
];
