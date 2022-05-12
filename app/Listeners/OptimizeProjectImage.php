<?php

namespace App\Listeners;

use App\Models\Project;
use App\Events\ProjectSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class OptimizeProjectImage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ProjectSaved  $event
     * @return void
     */
    public function handle(ProjectSaved $event)
    {
        //
        $image = Image::make(Storage::get($event->project->image))
            ->widen(600)
            ->encode();

        Storage::put($event->project->image, (string) $image);
    }
}
