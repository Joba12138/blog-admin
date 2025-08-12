<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $photo
 * @property string|null $bio
 * @property string|null $github_handle
 * @property string|null $twitter_handle
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Blog\Post> $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author whereGithubHandle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author whereTwitterHandle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Author whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Author extends Model
{
    use HasFactory;

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
