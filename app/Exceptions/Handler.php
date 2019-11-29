<?php

namespace App\Exceptions;

use App\Http\Middleware\Authenticate;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use PhpParser\Node\Expr\Variable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }

    // protected function unauthenticated($request, AuthenticationException $exception)
    // {
    //     if ($request->expectsJson()) {
    //         return response()->json(['error' => 'Unauthenticated.'], 401);
    //     }

    //      $guard = array_get($exception->guards(), 0);

    //     switch ($guard) {
    //       case 'admin':
    //         return redirect()->guest(route('admin.login'));
    //         break;

    //       default:
    //         return redirect()->guest(route('login'));
    //         break;
    //     }
    // }

}
