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

    public function getHtmlAttribute()
    {
        if ($this->type == 'html') return $this->text;
        if ($this->type == 'json') return $this->parseConfig();
    }

    private function parseConfig()
    {
        $config = json_decode($this->config);
        if (!$config) return false;

        foreach ($config as $item) {
            $find[] = '{'.$item->name.'}';
            $replace[] = $item->data;
        }

        return str_replace($find, $replace, $this->text);
    }
}

// Example config array
// [
//     [
//         'name' => 'image-1',
//         'type' => 'file',
//         'data' => '/img/client/dreamsingles.png'
//     ],