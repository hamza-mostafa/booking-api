<?php

namespace App\Http\Resources;


use Illuminate\Http\Request;

class TeamResource extends HalResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request) : array
    {
        return parent::toArray($request);
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
