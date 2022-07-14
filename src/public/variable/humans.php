<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
   	<?php } ?>
    <?php
      $family = array(
        'maman' => 'Mère',
        'sista' => 'Soeur',
        'BP' => 'Beau père',
        'chien1' => 'Lola',
        'chien2' => 'Lilou'
      );
      echo $family['maman'],
           $family['sista'],
           $family['chien2'];
    ?>
    <br/><br/>
    <?php 
        $recipes = array( 'pates carbo', 'lasagne ricotta epinard' , 'jambonneau sauce moutardée', 'hamburger maison frites');
        $recipes[] = 'Lapin sauce chasseur';
        var_dump($recipes)
    ?>
    <?php 
    $me = array(
      'prenom' => 'Steeve',
      'age' => 34,
      'fav_season' => 'Summer',
      'like_soccer' => true,
      'fav_movies' => array('Le seigneur des anneaux', 'V for vendetta' , 'Matrix')
    );
    $bff = array(
      'prenom' => 'Anthony',
      'age' => 32,
      'fav_season' => 'None',
      'like_soccer' => false,
      'fav_movies' => array('Le seigneur des anneaux', 'V for vendetta' , 'Autres vieux films')
    );
    $soulmate = array(
      'prenom' => 'Whatever',
      'age' => '5yo max more than me',
      'fav_season' => 'Whatever',
      'like_soccer' => 'Whatever',
      'fav_movies' => 'Whatever',
      'hobbies' => array('Musique', 'Jeux vidéos' , 'Whatever')
    );
    $me['hobbies'] = ['Musique', 'Coding', 'Design', 'Jeux vidéos', 'Nouvelles technologies'];
    $me['best_friend'] = $bff;
    $bff['hobbies'] = ['Musique', 'Jeux vidéos', 'Livres'];
    $me['hobbies'][] = 'Taxidermy';
    $me['prenom'] = 'Durant';
    $me['soulmate'] = $soulmate;
    echo '<pre>';
    print_r($me);
    echo '</pre>';

    $me_hobbies = array('Musique', 'Coding', 'Design', 'Jeux vidéos', 'Nouvelles technologies');
    $soulmate_hobbies = array('Musique', 'Jeux vidéos' , 'Whatever');

    // perform array operation
    $possible_hobbies_via_intersection = array_intersect($me_hobbies, $soulmate_hobbies);
    $possible_hobbies_via_merge = array_merge($me_hobbies, $soulmate_hobbies);

    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    print_r($possible_hobbies_via_merge);
    echo '</pre>';
    ?>
    <br/><br/>
    <?php 
      echo '<pre>';
      echo count($bff['hobbies']);
      echo '</pre>';
      echo '<pre>';
      echo count($me['hobbies']);
      echo '</pre>';
    ?>
    <p>
      <?php echo count($me['hobbies']); ?> 
      + 
      <?php echo count($bff['hobbies']); ?>
      =
      <?php echo count($me['hobbies']) + count($bff['hobbies']); ?>
    </p>
    <?php
      $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
      $verbs = array (' code', ' codes');
      foreach ($pronouns as $pronoun){
    ?>
        <p>
        <?php if($pronoun == 'He/She'){
            echo $pronoun.$verbs[1];
          } ?>
          <?php if($pronoun != 'He/She'){
            echo $pronoun.$verbs[0];
          }?>
        </p>
    <?php
      };
    ?>
    <?php
      $nb = 1;
      while($nb <= 120){
        print_r($nb.', ');
        $nb++;
      }
    ?>
    <br/><br/>
    <?php
      for($nbs = 1; $nbs <= 120; $nbs++){
        print_r($nbs.', ');
      }
    ?>
    <br/><br/>
    <?php 
      $firstnames = array ('Anais', 'Medhi', 'Miguel','Nicolas', 'Dorian', 'Antoine', 'Dylan', 'Tanguy', 'Mehli', 'Olivier', 'Marlène', 'Quentin', 'Lydia', 'Duc', 'Louis', 'Kevin', 'Henri', 'Semih');
      foreach($firstnames as $firstname){
        print_r($firstname.', ');
      }
    ?>
    <br/><br/>
    <?php 
      
    ?>
  </body>
</html>