<?php

namespace App\Admin\Repositories;

use App\Models\Blog\Post as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class BlogPost extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
