<?php

namespace App\Http\Controllers\Logic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPHtmlParser\Dom;

class TranslateWithPrefixController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $code = $request->input('code');
        $prefix = $request->input('prefix');
        $classes = collect(config('values.class'))->sortByDesc(function($string) {
            return strlen($string);
        });

        $hashClasses = [];
        foreach ($classes as $class) {
            $hashClasses[$class] = hashid_encode($class, 'base62');
        }

        foreach ($hashClasses as $key => $value) {
            $code = str_replace($key, $value, $code);
        }

        foreach ($hashClasses as $key => $value) {
            $code = str_replace($value, $prefix . $key, $code);
        }

        return view('welcome')->with([
            'code' => $request->input('code'),
            'formatedCode' => $code
        ]);
    }
}
