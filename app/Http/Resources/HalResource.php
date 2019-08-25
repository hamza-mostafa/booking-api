<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

abstract class HalResource extends JsonResource
{
    protected $state = [];
    protected $links = [];
    protected $embedded = [];

    public function __construct($request, $state, $links, $embedded)
    {
        parent::__construct($request);
        $this->embedded = $embedded;
        $this->links = $links;
        $this->state = $state;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return parent::toArray($request);
    }

    /**
     * @return array
     */
    abstract public function getState(): array;

    /**
     * @param array $state
     */
    abstract public function setState(array $state): void;

    /**
     * @return array
     */
    abstract public function getLinks(): array;

    /**
     * @param array $links
     */
    abstract public function setLinks(array $links): void;

    /**
     * @return array
     */
    abstract public function getEmbedded(): array;

    /**
     * @param array $embedded
     */
    abstract public function setEmbedded(array $embedded): void;


}
