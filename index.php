<?php
spl_autoload_register(function ($class_name) {
	require 'classes/'. $class_name . '.php';
});
$realisateur = new Realisateur('soufiane','elmaarouf','Masculin','20.08.1980','jurasic parc', 'sf');
$type = new Type('Horreur');

$filme1 = new Filme("Iron Man",'15.11.2020',2,"Un filme de haute qualité", $realisateur, $type);

$filme2 = new Filme('Star Wars','02.02.1980',3,"Exelent filme",$realisateur,$type);
echo $filme1->getRealisateur();
echo $realisateur->getDateDeNaissance()->format('d.M.Y') ;
echo $realisateur->getSex();
 