<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Block extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getTextAttribute($value)
    {
        if ($this->type == 'html') return $value;
        if ($this->type == 'json') return $this->parseConfig($value);
    }

    private function parseConfig($text)
    {
        $config = json_decode($this->config);
        if (!$config) return false;

        foreach ($config as $item) {
            $find[] = '{'.$item->name.'}';
            $replace[] = $item->data;
        }

        return str_replace($find, $replace, $text);
    }
}

// Example config array
// [
//     [
//         'name' => 'image-1',
//         'type' => 'file',
//         'data' => '/img/client/dreamsingles.png'
//     ],