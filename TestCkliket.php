<?php
 /*$is_Ath=false;
 if($is_Ath){
     echo 'Welcome!'; 
 }else{
     echo'You are not ath to access this page'
 }*/

    //Simulim i perdorimit te deklarates if elseif else
   /* $d=date("D");
    if($d=='Fri'){
        echo "Urime kjo eshte dita e fundit e javes se punes, ju uroj nje vikend te mire";

    }else($d=='Sum'){
        echo 'Kalofshi nje te Diele te Bukur';
    }else{
        echo 'Ju uroj nje jave te mire pune';
    }*/

   /* for($i=0; $i<=5; $i++){
        echo "Numri eshte ".$i."<br>";
    }*/

    $studenti = array('Besa', 'Agim', 'Drilona');

   /* foreach($studenti as $elem){
        echo $elm."<br>";
    }


    $studenti = array{
                    'Studenti'=>'Besa Sopa',
                    'Dept' => 'SHKI',
                    'Viti' => 2,
                    'Lenda' => 'Inxhinieria e Uebit'

    };

    //
    foreach($studenti as $key=>$vlera){
        echo $key." : ".$vlera."<br>";
    }


    $tek = array('HTML5', 'CSS3', 'JavaScrip', 'PHP');

    $gjatesinVargut=count($tek);
    echo "Ne vargun tone jane :".$gjatesinVargut."<br>";

    for($i=0; $i<=$gjatesinVargut=1;$i++){
        echo $tek[$i].'<br>';
    }*/

    $vetura=[
          ['Audi',25000,6],
          ['BMW',32000,7]

    ];

    for($i=0; $i<2;$i++){
        echo "<p>ReshtiL: $i<p/>";
        echo "<ul>";
              for ($kolona=0; $kolona<3;$kolona++){
                    echo "<li>".$vetura[$i][$kolona]."</li>";
                
                }
     echo "</ul>";
    }



?>