<?php

namespace App\Observers;

use App\Repositories\Abstracts\CalendarRepositoryInterface;

class CalendarObserver
{
    private $calendar;

    public function __construct(CalendarRepositoryInterface $calendar)
    {
        $this->calendar = $calendar;
    }

    /**
     * Handle the calendar "created" event.
     *
     * @param CalendarRepositoryInterface $calendar
     * @return void
     */
    public function created(CalendarRepositoryInterface $calendar)
    {
        //
    }

    /**
     * Handle the calendar "updated" event.
     *
     * @param CalendarRepositoryInterface $calendar
     * @return void
     */
    public function updated(CalendarRepositoryInterface $calendar)
    {
        //
    }

    /**
     * Handle the calendar "deleted" event.
     *
     * @param CalendarRepositoryInterface $calendar
     * @return void
     */
    public function deleted(CalendarRepositoryInterface $calendar)
    {
        //
    }

    /**
     * Handle the calendar "restored" event.
     *
     * @param CalendarRepositoryInterface $calendar
     * @return void
     */
    public function restored(CalendarRepositoryInterface $calendar)
    {
        //
    }

    /**
     * Handle the calendar "force deleted" event.
     *
     * @param CalendarRepositoryInterface $calendar
     * @return void
     */
    public function forceDeleted(CalendarRepositoryInterface $calendar)
    {
        //
    }
}
