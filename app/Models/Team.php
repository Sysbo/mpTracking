<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attribution;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','number'];

    /**
     * Get the attributions for the team.
     */
    public function attributions()
    {
        return $this->hasMany(Attribution::class);
    }

}
