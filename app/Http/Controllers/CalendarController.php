<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Exceptions\CalendarException;
use App\Http\Requests\CalendarRequest;
use App\Repositories\Abstracts\CalendarRepositoryInterface;
use Illuminate\Http\Request;


class CalendarController extends Controller
{
    /**
     * @var Calendar
     */
    protected $calendar;


    /**
     * CalendarController constructor.
     * @param CalendarRepositoryInterface $calendar
     */
    public function __construct(CalendarRepositoryInterface $calendar)
    {
        $this->calendar = $calendar;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     *
     *     @PathItem(
     *       path="/calendars",
     *       @OA\Get(
     *       path="/calendars",
     *       @OA\Parameter(
     *          name="orderBy",
     *          required=false,
     *          in="query",
     *          allowEmptyValue=true
     *       ),
     *       @OA\Response(
     *       response=200,
     *       description="should recive the full data paginated"
     *     )
     *     )
     *
     */
    public function index(Request $request) : Response
    {
        return $this->calendar->paginate(
            $request->orderBy ?? 'id',
            $request->sort ?? 'desc',
            $request->itemsPerPage ?? '15'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CalendarRequest $request
     * @return Response
     *
     *     @PathItem(
     *       path="/calendars",
     *       @OA\Post(
     *       path="/calendars",
     *       @OA\Response(
     *       response=200,
     *       description="a simple description inside the specific controller"
     *     ),
     *       @OA\Response(
     *       response=404,
     *       description="the route you are seeking is not found"
     *     ),
     *
     *      @OA\Response(
     *       response=403,
     *       description="please review the details you sent"
     *      ),
     *     )
     */
    public function store(CalendarRequest $request): Response
    {
        return $this->calendar->generate($request);
    }

    /**
     * Display the specified resource.
     *
     * @fixme check if calendar request is similar to the actual request object or is this another instance, also if it bears the calendar object
     *
     * @param Request $request
     * @param Calendar $calendar
     * @return Response
     */
    public function show(Request $request,Calendar $calendar): Response
    {
        return $this->calendar->fetch($calendar)->paginate($request->orderBy?? null, $request->sort?? null);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CalendarRequest $request
     * @param Calendar $calendar
     * @return Response
     */
    public function update(CalendarRequest $request, Calendar $calendar): Response
    {
        return $this->calendar->update($request, $calendar);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Calendar $calendar
     * @return Response
     * @throws Exception|CalendarException
     * @todo need to create specific exception to follow up on the errors
     */
    public function destroy(Calendar $calendar): Response
    {
        try{
            $this->calendar->delete($calendar);
        }
        catch (Exception $e){
            fail(11 ,$e, 'CalendarException');
        }
        return $this->calendar->success();
    }
}
