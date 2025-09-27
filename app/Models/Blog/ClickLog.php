<?php

namespace App\Models\Blog;

use App\Enums\ClickLogSource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @property int $id
 * @property ClickLogSource $source -1=未计入页面,0=home,1=new,2=detail
 * @property string|null $open_url
 * @property string|null $ip
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder<static>|ClickLog newModelQuery()
 * @method static Builder<static>|ClickLog newQuery()
 * @method static Builder<static>|ClickLog query()
 * @method static Builder<static>|ClickLog whereCreatedAt($value)
 * @method static Builder<static>|ClickLog whereId($value)
 * @method static Builder<static>|ClickLog whereIp($value)
 * @method static Builder<static>|ClickLog whereOpenUrl($value)
 * @method static Builder<static>|ClickLog whereSource($value)
 * @method static Builder<static>|ClickLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ClickLog extends Model
{
    protected $connection = 'db_blog';

    protected $fillable = [
        'ip',
        'open_url',
        'source',
    ];
    protected $casts  = [
        'source' => ClickLogSource::class,
    ];
}
