<?php
namespace App\Http\View\composer;
use Illuminate\View\View;
use App\Models\channel;
class channelComposer{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('channelaaaaaa', channel::all());
    }
}