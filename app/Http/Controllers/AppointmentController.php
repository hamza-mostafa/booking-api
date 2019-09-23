<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use App\Repositories\Abstracts\AppointmentRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppointmentController extends Controller
{
    protected $appointment;

    public function __construct(AppointmentRepositoryInterface $appointment)
    {
        $this->appointment = $appointment;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->appointment->paginate(
            $request->orderBy ?? 'id',
            $request->sort ?? 'desc',
            $request->itemsPerPage ?? '15'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(AppointmentRequest $request): Response
    {
        return $this->appointment->generate($request);
    }

    /**
     * Display the specified resource.
     *
     * @param Appointment $appointment
     * @return Response
     */
    public function show(Appointment $appointment)
    {
        return $this->appointment->fetch($appointment)->paginate($request->orderBy?? null, $request->sort?? null);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AppointmentRequest $request
     * @param Appointment $appointment
     * @return Response
     */
    public function update(AppointmentRequest $request,Appointment $appointment) : Response
    {
        return $this->appointment->update($request, $appointment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Appointment $appointment
     * @return Response
     */
    public function destroy(Appointment $appointment) : Response
    {
        try{
            $this->calendar->delete($appointment);
        }
        catch (Exception $e){
            fail(11 ,$e, 'AppointmentException');
        }
        return $this->appointment->success();
    }
}
