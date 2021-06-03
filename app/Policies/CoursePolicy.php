<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function enrolled(User $user, Course $course){

        return $course->students->contains($user->id);
    }
//proteger ruta
    public function published(?User $user, Course $course){
      
        if ($course->status==3){
            return true;
        }else{
           return false;
        }
    }

}
