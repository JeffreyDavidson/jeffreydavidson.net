<?php

namespace App\Http\Widgets;

use Carbon\Carbon;

class Numbers extends Widget
{
    /** @var $title */
    public $title = 'Numbers';

    /** @var $startDate */
    private $startDate;

    /** @var $weeksSinceStarted */
    private $weeksSinceStarted;

    /**
     * Create a new numbers widget instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->startDate = new Carbon('2000-01-01');
        $this->weeksSinceStarted = $this->startDate->diffInWeeks(now());
    }

    /**
     * Calculate the number of lines
     * written since start date.
     *
     * @return integer
     */
    public function linesOfCodeWritten()
    {
        return 150 * 5 * $this->weeksSinceStarted;
    }

    /**
     * Calculate the number of sleep hours
     * lost since start date.
     *
     * @return integer
     */
    public function sleepHoursLost()
    {
        return 2.5 * 5 * $this->weeksSinceStarted;
    }

    /**
     * Calculate the number of coffee cups
     * drank since start date.
     *
     * @return integer
     */
    public function coffeeCups()
    {
        return 3 * 5 * $this->weeksSinceStarted;
    }
}
