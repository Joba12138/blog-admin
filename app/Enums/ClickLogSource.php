<?php

namespace App\Enums;

enum ClickLogSource:  int
{
    /** @var int 未知页面 */
    case Unknown = -1;

    /** @var int 首页 */
    case Home  = 0;

    /** @var int 搜索结果页 */
    case Search = 1;

    /** @var int 商品详情页 */
    case Detail = 2;
}
