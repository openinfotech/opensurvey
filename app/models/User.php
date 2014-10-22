<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;

    protected $fillable = array('First_Name', 'Last_Name', 'Email_Id', 'Phone', 'Username', 'Password', 'Code', 'Active', 'Country_Name', 'City_Name', 'Zip_Code', 'Occupation');
    public $primaryKey = 'Uid';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('Password');

}
