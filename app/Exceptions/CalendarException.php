<?php

namespace App\Exceptions;

class CalendarException extends BaseException
{
    protected $message;
    protected $code;

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

}
