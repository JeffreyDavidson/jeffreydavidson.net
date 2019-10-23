<?php

namespace App\Http\Widgets;

use App\Models\Testimonial;

class Testimonials extends Widget
{
    /** @var $title */
    public $title = 'My Testimonials';

    /**
     * Retrieve a collection of testimonials.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function testimonials()
    {
        return Testimonial::all();
    }
}
