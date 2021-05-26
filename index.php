<?php
    include('class/classlangue.php');

    $langue = new langue();

    $alllangue = $langue->getAllLangue();

    if(isset($_POST['selec_langue'])){

        $translate = $_POST['selec_langue'];
        $prenom = $_POST['prenom'];
    }else{
        $translate = '';
        $prenom = '';
    };

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
        echo '<form action="index.php" method="post">';
            echo '<select name="selec_langue" id="selec_langue">';
                foreach ($alllangue as $value) {
                    
                    echo '<option value="'.$value['translate'].'">';
                        echo $value['name'];
                    echo '</option>';
                }
           echo '</select>';
                echo '<input type="text" name="prenom" id="prenom">';
                
                echo '<button type="submit" >';
                    echo 'submit';
                echo '</button>';
        echo '</form>';
               echo $translate.' '.$prenom;
               echo '<div id="affiche">';

               echo '</div>';
        ?>  

       
        <script src="jquery.js"></script>

        <script language="javascript">
            $(document).ready(function(){

                // si je clique "langue"
                $('#selec_langue').click('click',function(){
                    
                    //retiré element dans #affiche
                    $('#affiche').empty();

                    // je récupère la valeur "langue"
                    $select_langue = $('#selec_langue').val();
                    
                    // je récupère la valeur "prenom"
                    $select_prenom = $('#prenom').val();
                    
                    // affiché || rajouter
                    $('#affiche').append($select_langue+' '+$select_prenom);


                });


            });
        </script>
    </body>
</html>