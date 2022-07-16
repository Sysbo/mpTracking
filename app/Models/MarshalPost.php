<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarshalPost extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['track_id','number','lat','long'];

    /**
     * Get the track that owns the marshal post.
     */
    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    /**
     * Get the attributions for the marshal post.
     */
    public function attributions()
    {
        return $this->hasMany(Attribution::class);
    }
}
