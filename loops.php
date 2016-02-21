<?php 
    define( "TITLE", "Loops");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo TITLE;?></title>
        
        
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
            //while loop
                $startingNum = 50;
            
                while( $startingNum <= 100 ){
                    echo "$startingNum &nbsp;";
                    
                    //increment by 1 so as not to cause an infinite loop
                    $startingNum++;
                }
            //for loop
                for($a = 30; $a <= 40; $a++){
                    echo "Number $a <br>";
                }
            //for each
                $friends = array( "jim", "kyle", "sandra", "cassandra");
                foreach( $friends as $friend) {
                    //output each individual value in the array
                    echo "$friend is my friend! <br>";
                }
            //dowhile loop
                $foo = 10;
                do {
                    echo "Numero $foo <br>";
                    $foo++;
                }while( $foo <= 10 );
            ?>
        </div>
    <!--jQuery -->
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>    
    </body>
</html>