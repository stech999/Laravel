<?php

namespace App\Admin\Widgets;


use App\Models\News;
use Arrilot\Widgets\AbstractWidget;
use Route;

class NewsWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = News::count();
        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-news',
            'title' => 'Счетник новостей',
            'text' => "Кол-во новостей: {$count}",
            'button' => [
                'text' => 'Перейти к списку',
                'link' => '',
            ],
            'image' => 'storage/news-bg.png',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}