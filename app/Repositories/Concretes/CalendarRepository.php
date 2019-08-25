<?php


namespace App\Repositories\Concretes;


use App\Calendar;
use App\Http\Requests\CalendarRequest;
use Illuminate\Http\Response;
use App\Repositories\Abstracts\CalendarRepositoryInterface;

class CalendarRepository implements CalendarRepositoryInterface
{
    protected $calendar;
    /**
     * CalendarRepositoryInterface constructor.
     * @param Calendar $calendar
     */
    public function __construct(Calendar $calendar)
    {
        $this->calendar = $calendar;
    }

    /**
     * Creates pagination for the object and adds the ability to orderby, sort and the items per page
     * @param string $orderBy
     * @param string $sort
     * @param int $itemsPerPage
     * @return Response
     */
    public function paginate(string $orderBy = 'id', string $sort = 'desc', int $itemsPerPage = 15): Response
    {
        return Calendar::orderBy($orderBy, $sort)->paginate($itemsPerPage);
    }

    /**
     * Creates an abstract layer for updating the model
     *
     * @param CalendarRequest $request
     * @param Calendar $calendar
     * @return Response
     */
    public function update(CalendarRequest $request, Calendar $calendar): Response
    {
        return Calendar::update($request);
    }

    /**
     * Creates an abstract layer for creating the model
     *
     * @param CalendarRequest $request
     * @return Response
     */
    public function generate(CalendarRequest $request): Response
    {
        // TODO: Implement generate() method.
    }

    /**
     * Creates an abstract layer for destroying the model
     *
     * @param Calendar $calendar
     * @return Response
     */
    public function delete(Calendar $calendar): Response
    {
        // TODO: Implement delete() method.
    }
}
