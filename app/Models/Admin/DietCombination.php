<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dietcombination extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'dietcombinations';

     /**
     * The dietcombintion that belong to the user.
     */

    public function users()
    {
        return $this->belongsToMany(User::class, 'dietcombination_user');
    }

    public function dietchart()
    {
        return $this->hasOne(Dietchart::class);
    }
}
