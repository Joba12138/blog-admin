<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $disk
 * @property string|null $module
 * @property string|null $bucket_name
 * @property string $path
 * @property string|null $url
 * @property string|null $mime_type
 * @property string $type
 * @property string|null $original_name
 * @property int|null $size
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereBucketName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereOriginalName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attachment whereUserId($value)
 * @mixin \Eloquent
 */
class Attachment extends Model
{
    //
    protected $fillable = [
        'disk',
        'module',
        'bucket_name',
        'path',
        'url',
        'mime_type',
        'type',
        'original_name',
        'size',
        'user_id',
    ];
}
