<?php

namespace App\Repositories;

use App\Models\User;


class UserRepository
{
    /**
     * @param $name
     * @param $price
     * @param $categoryId
     *
     * @return \App\Models\User
     */
    public function createUser($userDetails)
    {
        return User::create($userDetails);
    }

    /**
     * @param       $UserId
     * @param array $options
     *
     * @return mixed
     */
    public function updateUserById($UserId, array $options)
    {
        $User = User::where('id', $UserId);
        $User->update($options);
        return $User->first();
    }

    /**
     * @param array $UserIds
     *
     * @return mixed
     */
    public function getUsersByIds(array $UserIds)
    {
        $users = User::whereIn('id', $UserIds)->get();
        return $users;
    }

    /**
     * @param array $userEmail
     *
     * @return mixed
     */
    public function getUserByEmail($userEmail)
    {
       return User::where('email', $userEmail)->first();
        
    }

    /**
     * @param $UserId
     */
    public function deleteUserById($UserId)
    {
         User::where('id', $UserId)->delete();
    }

      /**
     * @param $UserId
     */
    public function getUserById($UserId)
    {
        return User::find($UserId);
    }

    /**
     * get all users
     */public function getUsers(){
        return User::all();
    }
}