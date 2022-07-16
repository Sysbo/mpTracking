<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Track;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','date_start','date_end'];

    /**
     * Get the track that owns the event.
     */
    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    /**
     * Get the attributions for the event.
     */
    public function attributions()
    {
        return $this->hasMany(Attribution::class);
    }
    
}
