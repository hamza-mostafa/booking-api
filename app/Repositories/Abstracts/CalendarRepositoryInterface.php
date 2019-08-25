<?php


namespace App\Repositories\Abstracts;


use App\Calendar;
use App\Http\Requests\CalendarRequest;
use Illuminate\Http\Response;

interface CalendarRepositoryInterface
{

    /**
     * CalendarRepositoryInterface constructor.
     * @param Calendar $calendar
     */
    public function __construct(Calendar $calendar);

    /**
     * Creates pagination for the object and adds the ability to orderby, sort and the items per page
     * @param string $orderBy
     * @param string $sort
     * @param int $itemsPerPage
     * @return Response
     */
    public function paginate(string $orderBy,string $sort,int $itemsPerPage) : Response;

    /**
     * Creates an abstract layer for updating the model
     *
     * @param CalendarRequest $request
     * @param Calendar $calendar
     * @return Response
     */
    public function update(CalendarRequest $request, Calendar $calendar) : Response;

    /**
     * Creates an abstract layer for creating the model
     *
     * @param CalendarRequest $request
     * @return Response
     */
    public function generate(CalendarRequest $request) : Response;

    /**
     * Creates an abstract layer for destroying the model
     *
     * @param Calendar $calendar
     * @return Response
     */
    public function delete(Calendar $calendar) : Response;

}
