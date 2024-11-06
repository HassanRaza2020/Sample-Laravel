<h1>Index Page</h1>



<?php
// Defining variables for demonstration
$user = "User";
$admin = "Admin";
$developer = "Developer";




// Associative array with values
$session = ['Hassan' => $user , 'Yousaf' => $admin, 'Emily' => $developer]; 

// Loop through the array and display each value

foreach($session as $name=>$role){
  echo "$name is a $role <br>";
}


for($i=0; $i<11; $i++){
  for($j=0;$i>=$j;$j++){
    echo "*"." ";
  }
  echo "<br>";
}


?>


