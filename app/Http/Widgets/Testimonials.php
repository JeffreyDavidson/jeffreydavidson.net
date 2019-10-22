<?php

namespace App\Http\Widgets;

use App\Models\Testimonial;

class Testimonials extends Widget
{
    /** @var $title */
    public $title = 'My Testimonials';

    /**
     * Undocumented function
     *
     * @return void
     */
    public function testimonials()
    {
        return Testimonial::all();
    }
}
