<?php

namespace App\Models\Blog;

use App\Models\Attachment;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @methtod static \Illuminate\Database\Eloquent\Builder<static>|Post whereSeoTitle($value)
 * @property int $id
 * @property int|null $blog_author_id
 * @property int|null $blog_category_id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $published_at
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $summary 文章摘要
 * @property int|null $main_image_id 文章主图
 * @property-read \App\Models\Blog\Author|null $author
 * @property-read \App\Models\Blog\Category|null $category
 * @property-read Attachment|null $mainImage 文章主图
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereBlogAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereBlogCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereMainImageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereSummary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Post extends Model
{
    use HasDateTimeFormatter;

    protected $connection = 'db_blog';

    /**
     * @var string[]
     */
    protected $fillable = [
        'blog_author_id',
        'blog_category_id',
        'title',
        'slug',
        'content',
        'published_at',
        'seo_title',
        'seo_description',
        'summary',
        'main_image_id',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'date',
    ];

    /** @return BelongsTo<Author,self> */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'blog_author_id');
    }

    /** @return BelongsTo<Category,self> */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'blog_category_id');
    }

    /**
     * @comment 文章主图
     * @return BelongsTo
     */
    public function mainImage(): BelongsTo
    {
        return $this->belongsTo(Attachment::class, 'main_image_id');
    }
}
