<?php 

namespace App\Repositroy;

use App\Models\User;

class UserRepository implements IUserRepository{
    
    public function UserCreate($mail, $password){
        User::create([
            "mail" => $mail,
            "password" => $password,
        ]);
    }
    

}
?>