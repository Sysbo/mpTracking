<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\MarshalPost;

class Track extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','lat','long'];

    /**
     * Get the events for the track.
     */
    public function events()
    {
        return $this->hasMany(Event::class);
    }

    /**
     * Get the marshal posts for the track.
     */
    public function marshalPosts()
    {
        return $this->hasMany(MarshalPost::class);
    }
}
