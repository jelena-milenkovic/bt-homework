<?php
/**
 * @param $users $searchContent
 * return array
 */

function search_users($users, $searchContent = " "): array {
    foreach ($users as $user) {
        foreach ($user as $key => $value) {
            if (strpos($value, 'ic') != false){
                print_r(array_filter($users));
                echo "<br>";
            }
            else if (array_search('Pera', $user)!= false) {
                print_r($user);
                echo "<br>";
            }
            else 
                return[];       
        }
    } 
}

$users = [
    [
        'name' => 'Pera',
        'last_name' => 'Miric',
        'img' => '...'
    ],
    [
        'name' => 'Mitar',
        'last-name' => 'Miric',
        'img' => '...'
    ]
];

print_r(search_users($users, 'Pera'));


?>