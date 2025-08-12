<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content): Content
    {
        return $content
            ->header('数据看板')
            ->body(function (Row $row) {
                $row->column(12, new Examples\NewUsers());
            });
    }
}
