<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Language {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        $availableLanguages = ['en', 'sr'];

        if (in_array($request->lang, $availableLanguages)) {

            $locale = $request->lang;

            App::setLocale($locale);
        }


        return $next($request);
    }

}
