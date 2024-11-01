<?php

namespace App\Observers;

use App\Models\News;
use Illuminate\Support\Facades\Log;
use Str;

class NewsObserver
{
    /**
     * Handle the NewsHidden "created" event.
     */
    public function created(News $news): void
    {
        //
        $news->slug = Str::slug($news->title);
        Log::info('Updating news title' . $news);
    }

    /**
     * Handle the NewsHidden "updated" event.
     */
    public function updated(News $news): void
    {
        //
    }

    /**
     * Handle the NewsHidden "deleted" event.
     */
    public function deleted(News $news): void
    {
        //
    }

    /**
     * Handle the NewsHidden "restored" event.
     */
    public function restored(News $news): void
    {
        //
    }

    /**
     * Handle the NewsHidden "force deleted" event.
     */
    public function forceDeleted(News $news): void
    {
        //
    }
}
