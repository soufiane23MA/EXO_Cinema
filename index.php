<?php
spl_autoload_register(function ($class_name) {
	require 'classes/' . $class_name . '.php';
});

/**
 * l'index permet de collecter tous les info sur les instancs crées 
 * c'est là ou tu crée les nouvelles classes.
 */

$realisateur1 = new Realisateur(' Tarantino', 'Quentin', 'Masculin', '20.08.1980');
$realisateur2 = new Realisateur('john', 'samm', 'Masculin', '25.02.1988');

$type1 = new Type('Horreur');
$type2 = new Type('Science fiction');
$type3 = new Type('Thriller');
$type4 = new Type('Comédie');

$role1 = new Role('james Bond');
$role2 = new Role('Dumbeldour');
$role3 = new Role('le policier');

$acteur1= new Acteur('Matt','Damen','Masculin','30.05.1987');
$acteur2 = new Acteur ('Samuel','Jackson', 'masculin','25.03.1965');
$acteur3 = new Acteur('Robert','Dinnero','Masculin','28.06.1953');

$filme1 = new Filme("Iron Man", '15.11.2020', 120, "Un filme de haute qualité", $realisateur2, $type1);
$filme2 = new Filme('Star Wars', '02.02.1980',120, "Exelent filme", $realisateur2, $type2);
$filme3 = new Filme('Kill Bill ','20.08.2003',180,'mort de rire',$realisateur1,$type4);
$filme4 = new Filme('Inglourious Basterda','01.01.2010',180,'blablablabla',$realisateur1,$type3);

$casting1= new Casting($filme1, $acteur1,$role1);
$casting2 = new Casting( $filme3,$acteur1,$role2);
$casting3 = new Casting($filme2, $acteur2, $role3);
$casting4 = new Casting($filme3, $acteur3, $role1);





/*echo "<h3>L'affichage de</h3>";
echo $filme1->getRealisateur();*/

echo" <h3>Liste des filmes par Type : </h3>";  //ok
echo $type1 ->affichType(). '<br>';//ok
echo$type2->affichType().'<br>';//ok
echo"----------------------------------------------------------------------------";

echo "<h2>L'affichage du Casting d'un filme</h2>";//ok
echo $filme3->affichCasting().'<br>';//ok
echo$filme1->affichCasting() . '<br>';//ok
echo"--------------------------------------------------------------------------------";
  
echo "<h2>L'affichage de la filmographie d'un acteur</h2>";//ok
echo $acteur2-> affichfilms() . '<br>';// ok
echo $acteur1->affichFilms() . '<br>';// ok

echo"----------------------------------------------------------------------------------";

echo "<h3>L'afficheage des Roles incarné par un Acteur</h3>";
echo $role1->affichActeur() . '<br>';//ok
echo$role3->affichActeur() . '<br>';

echo "----------------------------------------------------------------------------------";
echo "<h2>L'affichage de la filmographie d'un realisateur</h2>"; //ok


echo $realisateur1->afficheFilmographie() . '<br>'; //ok
echo $realisateur2->afficheFilmographie() . '<br>'; //ok
echo "-----------------------------------------------------------------------------------------";

