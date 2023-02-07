<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ExerciceXP 1 afficher sans variable   </h1>
<h3>
    <?php 
            class Phrase {
                
                 public function welcome() 
                 {
                  echo 'MyClass class has initialized !'."\n";
                }
               }

              $phrase = new Phrase();
              $phrase->welcome();

    ?>
</h3>
<hr>
<h1>ExercieXP 2 afficher avec une variable </h1>

    <?php
        class FactorialOfANumber
        {
            // Méthode pour calculer la factorielle d'un nombre
            public function calculateFactorial($number) {
                if ($number < 0) {
                  return "Impossible de calculer la factorielle d'un nombre négatif.";
                }
                // Initialisation du résultat
                $result = 1;
                // Boucle pour multiplier les nombres de 1 à n
                for ($i = 1; $i <= $number; $i++) {
                  $result *= $i;
                }
                // Renvoi du résultat
                return $result;
              }
            }
             // creation d'un objet calcul
            $calcul = new FactorialOfANumber;

            // Appel de la méthode factorielle pour calculer la factorielle de 6
            $fact = $calcul->calculateFactorial(6);

              // Affichage du résultat
            echo "La factorielle de 6 est. $fact";
        
    ?><hr>

   <h1>ExercieXP 3  Concatener deux variables </h1>
<h1>
<?php
    
    class ArraySort
        {
            // Propriété privée qui contiendra le tableau à trier
            private $tableau;
            
            // Constructeur qui initialise la propriété tableau
            public function __construct(array $tableau)
            {
                $this->tableau = $tableau;
            }
            
            // Méthode pour trier le tableau en ordre croissant
            public function trieTableau()
            {
                $content = $this->tableau;
                sort($content);

                // Renvoi du résultat
                return $content;
            }
        }
             // creation d'un objet sortarray 
    $sortarray = new ArraySort(array(11, -2, 4, 35, 0, 8, -9));
        ////afficher apres le trie
    print_r($sortarray->trieTableau())."\n";
?>
</h1><hr>
   


   <h1>ExercieXP 4  Inverser une chaine </h1>
    <h3>
        <?php 


        class CalculDates{

        //// Méthode pour calculer la différence entre deux dates
            public function differenceDate(){
                $date1 = new DateTime("1981-11-03");
                $date2 = new DateTime("2013-09-04");
                $difference = $date1->diff($date2);
                //Affichage du résultat
                echo "Difference : " . $difference->y . " years, " . $difference->m." months, ".$difference->d." days ";
        
            }

        }

        $diff = new CalculDates();

        $diff->differenceDate();
        ?>
   </h3>
   <hr>

</body>
</html>