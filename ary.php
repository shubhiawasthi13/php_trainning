<?php
// indexed array
$users = ["anil","karan","aman","peter"];
echo $users[3];

// 1st way to use foreach loop
echo "<br>";
foreach ($users as $user){
    echo $user,"<br>";
}
// 2nd way to use foreach loop
echo "<br>";
foreach ($users as $user):
    echo $user,"<br>";
endforeach;   


// Associative Array
$usersDetails = [
    "name"=>"anil",
    "age"=>"27",
    "Loaction"=>"Kanpur"
]; 

echo "<br>";
echo $usersDetails["age"] ,"<br>";
// print_r ($usersDetails);  // print_r is use to print arrays

foreach($usersDetails as $key => $value){
    echo $key." = ".$value,"<br>";
}


// Multidemsional Array
$users = [
    [1,"anil","noida","27"],
    [2,"karan","lucknow","23"],
    [3,"aman","kanpur","25"]
];
// echo "<pre>";
// print_r($users);
// echo "<pre>";
echo "<br>";
foreach($users as $user){
     echo "<br>";
    foreach($user as $item){
        echo $item,"<br>";
    }
}


//Multidemsional Associative Array
echo "<br>";
$users = [
    [
        "name"=>"anil",
        "age"=> 29,
        "Location"=>"Kanpur"
    ],
    [
        "name"=>"aman",
        "age"=> 25,
        "Location"=>"Agra"
    ]
];
foreach($users as $user){
        echo "<br>";
    foreach($user as $key=>$value){
        echo $key." =".$value,"<br>";
    }

}

add Remove and element in array
echo "<br>";
$users = ["anil","rajat","Priya","Karan"];
array_push($users,"radha","kriti"); //add value in last
foreach($users as $user){
    echo $user,"<br>";
}

echo "<br>";
array_pop($users); // remove last one value
foreach($users as $user){
    echo $user,"<br>";
}

echo "<br>";
array_splice($users,-3); // remove multiple values
foreach($users as $user){
    echo $user,"<br>";
}

?>
