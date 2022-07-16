<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use App\Models\Team;
use App\Models\MarshalPost;

class Attribution extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['marshal_post_id','team_id','event_id','day'];

    /**
     * Get the event that owns the attribution.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Get the team that owns the attribution.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the marshal post that owns the attribution.
     */
    public function marshalPosts()
    {
        return $this->belongsTo(MarshalPost::class);
    }
}
