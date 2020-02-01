<?php



$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);
$arr = [];
for ($N_itr = 0; $N_itr < $N; $N_itr++) {
    fscanf($stdin, "%[^\n]", $firstNameEmailID_temp);
    $firstNameEmailID = explode(' ', $firstNameEmailID_temp);

    $firstName = $firstNameEmailID[0];

    $emailID = $firstNameEmailID[1];

    preg_match_all('/([^\@]*[gmail.com])/',$emailID,$email);
    if($email[0][1] == 'gmail.com'){
        $arr[$N_itr] = $firstName;
    }
}

asort($arr);
foreach($arr as $value){
    echo $value."\n";
}
fclose($stdin);
