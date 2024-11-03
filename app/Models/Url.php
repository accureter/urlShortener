<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;

class Url extends Model
{
    use Prunable;
    protected $guarded = [];

    public function getShortenUrl(): string
    {
        return request()->root().'/'.$this->code;
    }

    public function resolveRouteBinding($value, $field = null)
    {
        $url = null;
        if (!cache()->has('url:'.$value)){
            $url = $this->where($field,$value)->firstOrFail();
        }
        return cache()->rememberForever('url:'.$value, function () use ($url){
            return $url;
        });
    }

    public function prunable()
    {
        return static::where('expires_at', '<', now())->whereNotNull('expires_at');
    }
}
