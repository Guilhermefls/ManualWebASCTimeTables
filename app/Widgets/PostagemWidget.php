<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use App\Models\Post;

class PostagemWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Post::count();
        $string = __('Posts');//'Postagens';//trans_choice('voyager::dimmer.user', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-tools',
            'title'  => "{$count} {$string}",
            'text'   => "Tem {$count} {$string} no seu banco de dados. Clique no botão abaixo para ver todas as {$string}",
            'button' => [
                'text' => 'Ver todas as postagens',
                'link' => route('voyager.posts.index'),
            ],
            'image' => asset('assets/images/exemplos/1.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', new \TCG\Voyager\Models\Post());
    }
}
