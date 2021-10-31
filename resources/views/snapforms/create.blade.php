<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('business.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body class="w-full h-screen flex justify-center items-center" >
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="flex justify-center">
            <img class="w-50" src="{{ url('images/logo.png') }}" alt="Snap Forms Logo">
        </div>
        <div class="flex justify-center">
            <h1 class="text-xl">{{ config('business.name') }}</h1>
        </div>
        <form method="POST" action="{{ route('form.store') }}">
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                    @csrf
                    <div class="space-y-6 sm:space-y-5">
                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="first_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                First name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md" value="{{ old('first_name') }}">
                                @error('first_name')<span class="text-xs text-red-500">This field is required @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="last_name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Last name
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md" value="{{ old('last_name') }}">
                                @error('last_name')<span class="text-xs text-red-500">This field is required @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Email address
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md" value="{{ old('email') }}">
                                @error('email')<span class="text-xs text-red-500">This field is required @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="address" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Address
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="address" id="address" autocomplete="address" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md" value="{{ old('address') }}">
                                @error('address')<span class="text-xs text-red-500">This field is required @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="suburb" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Suburb
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="suburb" id="suburb" autocomplete="address-level2" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md" value="{{ old('suburb') }}">
                                @error('suburb')<span class="text-xs text-red-500">This field is required @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="state" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                State
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <select id="state" name="state" autocomplete="state-name" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                    <option value=""></option>
                                    <option value="NSW">NSW</option>
                                    <option value="VIC">VIC</option>
                                    <option value="QLD">QLD</option>
                                    <option value="SA">SA</option>
                                    <option value="NT">NT</option>
                                    <option value="WA">WA</option>
                                    <option value="ACT">ACT</option>
                                    <option value="TAS">TAS</option>
                                </select>
                                @error('state')<span class="text-xs text-red-500">This field is required @enderror
                            </div>
                        </div>

                        <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="postcode" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                Postcode
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="postcode" id="postcode" autocomplete="postcode" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md" value="{{ old('postcode') }}">
                                @error('postcode')<span class="text-xs text-red-500">This field is required @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
</body>
</html>
