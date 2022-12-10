<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * Description of User
 *
 * @author juanp
 */
class User extends Eloquent{
    //put your code here
    public $name;
    protected $fillable = ['username','email'];
    public $timestamps = ['created_at','updated_at'];
}
