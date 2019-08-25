<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Class Controller
 *      @OA\Info(
 *       title="Booking assistant",
 *       version="0.1",
 *       description="helping you book your appointments with your teams",
 *     @OA\Contact(
 *       email="info@hamzamostafa.me"
 *     )
 *     )
 *     @OA\Server(
 *       url=HOSTER,
 *     )
 *     )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
