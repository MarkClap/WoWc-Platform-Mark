<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create Teacher</title>
</head>
<body class="flex h-screen bg-white">
    <div class="bg-white-400 flex w-full justify-center items-center">
        <div class="py-4 flex w-6/12 border-2 border-black flex-col items-center">  
            <h1 class="text-3xl text-black">Create Teachers</h1>

            <form method="POST" class="w-full p-3" action="{{ route('teachers.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 mb-2" for="email">{{ __('Email') }}</label>
                <input type="text" name="email" id="email" class="form-input w-full text-black">
            {!! $errors->first('email', '<div class="text-red-500" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <input type="hidden" name="id_institution" value="{{ $institutionId }}" class="hidden">  <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">
            {{ __('Submit') }}
            </button>
            </form>
        </div>
    </div>
</body>
