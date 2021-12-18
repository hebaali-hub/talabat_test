<?php

namespace App\Exceptions;
use Exception;

class NotAuthorized extends Exception
{
    public function render()
    {
        return response()->json(['message' => ' Not Authorized User'], 401);

    }
}
