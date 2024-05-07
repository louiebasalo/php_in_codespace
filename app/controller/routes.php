
<?php

// var_dump($_SERVER["REQUEST_URI"]);
// // var_dump($_SERVER);
// var_dump($_POST);

match($_POST["submit"]){
    'login' => function() {
        return "alright";
    }
};


?>