<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'title',
        'description',
    ];
    public function user(): BelongsTo

   {
        return $this->belongsTo(User::class);
        $posts = Post::all(); // Fetch all posts
        return view('jobs.list', compact('posts'));
    }
}
