<?php


namespace App\Repositories\Abstracts;

use App\Models\Appointment;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Http\Response;

interface AppointmentRepositoryInterface
{

    /**
     * AppointmentRepositoryInterface constructor.
     * @param Appointment $appointment
     */
    public function __construct(Appointment $appointment);

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
     * @param AppointmentRequest $request
     * @param Appointment $appointment
     * @return Response
     */
    public function update(AppointmentRequest $request, Appointment $appointment) : Response;

    /**
     * Creates an abstract layer for creating the model
     *
     * @param AppointmentRequest $request
     * @return Response
     */
    public function generate(AppointmentRequest $request) : Response;

    /**
     * Creates an abstract layer for destroying the model
     *
     * @param Appointment $appointment
     * @return Response
     */
    public function delete(Appointment $appointment) : Response;
}