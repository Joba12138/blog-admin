<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //

    /**
     * 获取分页大小
     *
     * @param int $default
     * @return int
     */
    public function pageSize(int $default = 10): int
    {
        return intval(request()->input('pageSize', $default));
    }
}
