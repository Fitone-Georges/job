<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

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
        // $posts = Post::all(); // Fetch all posts
        return $this->belongsTo(User::class);
    }
}
