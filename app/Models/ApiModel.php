<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ApiModel extends Model
{
    protected $primaryKey = 'slug';
    private $slug;
    /**
     *  generates a URL friendly "slug" from the given string
     *
     * @param String $unformedSlug
     * @return mixed
     */
    public function slugIt(String $unformedSlug)
    {
        $this->slug = Str::slug($unformedSlug);
        return $this;
    }
}
