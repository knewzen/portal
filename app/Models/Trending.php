<?php

namespace App\Models;

use Illuminate\Support\Facades\Redis;

class Trending
{
    /**
     * @return array
     */
    public function get()
    {
        return array_map('json_decode', Redis::zrevrange($this->cacheKey(), 0, 4));
    }

    /**
     * @param $thread
     */
    public function push($thread)
    {
        Redis::zincrby($this->cacheKey(), 1, json_encode([
            'title' => $thread->title,
            'path'  => $thread->path(),
        ]));
    }

    /**
     * @return string
     */
    public function cacheKey()
    {
        return app()->environment('testing')
            ? 'testing_trending_threads'
            : 'trending_threads';
    }

    /**
     *  Reset.
     */
    public function reset()
    {
        Redis::del($this->cacheKey());
    }
}
