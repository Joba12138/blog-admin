<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Blog\Post> $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author query()
 * @mixin \Eloquent
 */
class Author extends Model
{
    use HasFactory;

    protected $connection = 'db_blog';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'photo',
        'bio',
        'github_handle',
        'twitter_handle',
    ];

    /**
     * @var string
     */
    protected $table = 'blog_authors';

    /** @return HasMany<Post> */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'blog_author_id');
    }
}
