<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link query()
 * @mixin \Eloquent
 */
class Link extends Model
{
    use HasFactory;

    protected $connection = 'db_blog';


    /** @var string[] */
    public $translatable = [
        'title',
        'description',
    ];

    protected $table = 'blog_links';
}
