<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="container  mx-auto min-h-screen bg-gray-50">
        <form action="{{ route('translate.prefix') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-4 mt-56">
                <div class="">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div>
                                <label for="about" class="block text-sm font-medium text-gray-700">
                                    Code <span class="font-bold">avec</span> prefix
                                </label>
                                <div class="mt-1">
                                    <textarea id="about" name="code"  rows="15" class="shadow-sm focus:ring-green-500 focus:border-green-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="<div ...">{{ $code ?? null }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div>
                                <label for="about" class="block text-sm font-medium text-gray-700">
                                    Code <span class="font-bold">sans</span> prefix
                                </label>
                                <div class="mt-1">
                                    <textarea readonly rows="15" class="shadow-sm focus:ring-green-500 focus:border-green-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md">{{ $formatedCode ?? null }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 text-center flex">
                    <div class="mx-auto">
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <div class="relative flex items-stretch flex-grow focus-within:z-10">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                                    </svg>
                                </div>
                                <input type="text" name="prefix" id="email" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none rounded-l-md pl-10 sm:text-sm border-gray-300" value="tw-">
                            </div>
                            <button type="submit"  class="-ml-px relative inline-flex items-center space-x-2 px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                                <span>Transformer</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
