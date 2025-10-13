<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $name 名
 * @property string $email 邮箱
 * @property string|null $phone 手机号
 * @property string|null $demand 诉求
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $source 客户来源
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereDemand($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Customer extends Model
{
    protected $connection = 'db_renwu';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'demand',
        'source',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
        'updated_at' => 'datetime:Y-m-d H:i:s',
    ];
}
