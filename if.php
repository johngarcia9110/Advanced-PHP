<?php 
    define( "TITLE", "If, Else &amp; Elseif Statements");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo TITLE;?></title>
        <link rel="stylesheet" type="text/css" href="/style.css">
        
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>

            <?php 
            //IF expression is True, do something
            //IF expression is FALSE, don't do anything
            
                $foo = 99;
                $bar = 79;
            
                if( $foo > $bar){
                 //code to execute if true
                    echo '$foo is greater than $bar'."<br>";
                    //double quotes will allow value of variable to be output
                    //single quotes will output just text 
                }
                //else
                $currentlyListeningTo = "Barenaked Ladies";
            
                if ($currentlyListingTo == "The Tragically Hip"){
                    //if true
                    echo "You are listening to $currentlyListeningTo";
                }else {
                    //if false
                    echo "Just a wild guess but you are probably listening to $currentlyListeningTo </br>";
                }
            
                //elseif
                $favColor = "green";
                if ($favColor == "blue"){
                    //original expression = true
                    echo "Your favorite color is $favColor.";
                }elseif ($favColor == "green"){
                    //original expression = false. elseif expression = true
                    echo "the color $favColor is a bad choice.";
                }else{
                    //both if and elseif =false
                    echo "$favColor is the best color of them all!";
                }
            
            
            ?>
        </div>
    
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>    
    </body>
</html>