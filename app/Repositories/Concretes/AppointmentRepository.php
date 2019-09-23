<?php


namespace App\Repositories\Concretes;


use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use App\Repositories\Abstracts\AppointmentRepositoryInterface;
use Illuminate\Http\Response;

class AppointmentRepository implements AppointmentRepositoryInterface
{
    protected $appointment;
    /**
     * AppointmentRepositoryInterface constructor.
     * @param Appointment $appointment
     */
    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
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
        return Appointment::orderBy($orderBy, $sort)->paginate($itemsPerPage);
    }

    /**
     * Creates an abstract layer for updating the model
     *
     * @param AppointmentRequest $request
     * @param Appointment $appointment
     * @return Response
     */
    public function update(AppointmentRequest $request, Appointment $appointment): Response
    {
        return Appointment::update($request);
    }

    /**
     * Creates an abstract layer for creating the model
     *
     * @param AppointmentRequest $request
     * @return Response
     */
    public function generate(AppointmentRequest $request): Response
    {
        // TODO: Implement generate() method.
    }

    /**
     * Creates an abstract layer for destroying the model
     *
     * @param Appointment $appointment
     * @return Response
     */
    public function delete(Appointment $appointment): Response
    {
        // TODO: Implement delete() method.
    }
}
