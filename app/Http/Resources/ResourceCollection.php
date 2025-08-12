<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ResourceCollection extends AnonymousResourceCollection
{
    /**
     * Add the pagination information to the response.
     *
     * @param Request $request
     * @param array $paginated
     * @param array $defaulted
     * @return array
     */
    public function paginationInformation(Request $request, array $paginated, array $defaulted): array
    {
        return [
            'total' => $paginated['total'],
        ];
    }
}
