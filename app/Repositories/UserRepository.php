<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends AppBaseRepository{

    public function model()
    {
        return User::class;
    }
}
