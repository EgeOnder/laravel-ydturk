<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Http;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Throwable;

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
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if($this->isHttpException($exception)) {
            if($exception->getStatusCode() == 404) {
                $client = new \GuzzleHttp\Client();

                $quote = $client->get('http://movie-quotes-app.herokuapp.com/api/v1/quotes', [
                    'headers' => [
                        'Authorization' => 'Token token=' . config('services.quotes.token'),
                    ],
                ]);

                $quote = json_decode($quote->getBody(), true)[rand(0, 19)]['content'];

                $quote = GoogleTranslate::trans($quote, 'tr', 'en');

                return response()->view('errors.404', [
                    'quote' => $quote,
                ]);
            }
        }

        return parent::render($request, $exception);
    }
}
