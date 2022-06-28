<?php
/**
 * @param $users $searchContent
 * return array
 */

function search_users($users, $searchContent = " "): array {
   $filteredUsers = $users;
   if($searchContent != " ") {
       $filteredUsers = [];
       foreach ($users as $key => $user) {
           if(str_contains($user, $searchContent)) {
               $filteredUsers[] = $user;
           }
       }
   }
   return $filteredUsers;
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