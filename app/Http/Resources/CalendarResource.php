<?php

namespace App\Http\Resources;


use Illuminate\Http\Request;

class CalendarResource extends HalResource
{

    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @param $url
     * @param $pagination
     * @param null $embedded
     * @return array
     */
    public function toArray($request, $url, $pagination, $embedded = null) : array
    {
        $response = [
            'links' => ['rel' => 'self',
                        'uri' =>  $this->setLinks(['self' => $url])
                        ],
            'data' => parent::toArray($request),
        ];
         $embedded === null ?: $response['embedded'] =$this->toArray(...$embedded);
         $response['pagination'] = $pagination;

         return $response;
    }
    /**
     * @return array
     */
    public function getState(): array
    {
        return $this->state;
    }

    /**
     * @param array $state
     */
    public function setState(array $state): void
    {
        $this->state = $state;
    }

    /**
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @param array $links
     */
    public function setLinks(array $links): void
    {
        $this->links = $links;
    }

    /**
     * @return array
     */
    public function getEmbedded(): array
    {
        return $this->embedded;
    }

    /**
     * @param array $embedded
     */
    public function setEmbedded(array $embedded): void
    {
        $this->embedded = $embedded;
    }

}
