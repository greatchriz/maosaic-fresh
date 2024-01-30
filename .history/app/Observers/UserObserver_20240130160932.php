<?php

namespace App\Observers;

use App\Models\User;
use Illuminate\Support\Str;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {

$string = "1234567890";  // Initial string
$id = "ab";              // Example ID value

// Calculate the required number of characters to remove from the end of $string
$charactersToRemove = min(Str::length($id), Str::length($string));

// Remove the necessary characters from the end of $string
$string = substr($string, 0, -$charactersToRemove);

// Append the $id value to the modified $string
$string .= $id;

// Ensure the final string has exactly 10 characters
$string = Str::substr($string, 0, 10);  // Truncate if necessary

echo $string;  // Output: 123456ab
        dd($user);
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
