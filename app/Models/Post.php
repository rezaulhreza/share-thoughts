<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    // The fillable property specifies which attributes should be mass-assignable. This can be set at the class or instance level.
    //  class User extends Eloquent { protected $fillable = array('first_name', 'last_name', 'email'); } 


    protected $fillable= [

        'user_id','body','image'
    ];

    //defining the relation between a post and user. A post belongs to user from the User Model. 
    //A belongsTo() relationship matches a related table's 'id' to a 'localKey' field on 'this' model.

    public function user(){
        return $this->belongsTo(User::class);
    }

    //A post has many likes. There is a relation between the post and likes.
    //A post can have one or many likes and calls Like Model Class
    public function likes(){
        return $this->hasMany(Like::class);
    }

    //this will accept a user object
    public function likedBy(User $user){

        //this will return true or false value if the post is liked by this user is already in the list of likes
        return $this->likes->contains('user_id',$user->id);//collection
    }

 
 
}
