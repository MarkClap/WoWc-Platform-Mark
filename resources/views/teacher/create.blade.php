<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create Teacher</title>
</head>
<body>
    <div class="bg-black">
        <div class="bg-white text-black p-2 flex">
            <h1 class="text-xl font-semibold leading-7 text-gray-900">Create Teachers</h1>
        </div>
        <div class=" bg-white">
            <form method="POST" action="{{ route('teachers.store') }}" role="form" enctype="multipart/form-data">
                @csrf
    
                <div class="row padding-1 p-1">
                    <div class="col-md-12">
    
                        <div class="form-group mb-2 mb20">
                            <label for="id_user" class="block text-black">{{ __('Users') }}</label>
                            <select class="hover:select-all text-black" name="id_user" id="inputUsuario" required>
                                <option value="">Seleccione una opción</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})</option>
                                @endforeach
                            </select>
                            {!! $errors->first('id_user', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                        </div>
                        <input type="hidden" name="id_institution"
                            class="form-control @error('id_institution') is-invalid @enderror" value="{{ $institutionId }}"
                            id="id_institution" placeholder="Id Institution">
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-success">{{ __('Submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
