<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear invitación</title>
</head>

<body>
<form method="post" action="{{ route('invitations.generate', ['token' => $course->token]) }}" class="space-y-4">
  <h1 class="text-2xl font-bold">Las leyendas de {{ $course->name }}</h1>
  @csrf
  <div class="flex flex-col">
    <label for="name" class="font-medium mb-1">Nombre:</label>
    <input type="text" id="name" name="name" class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
  </div>
  <div class="flex flex-col">
    <label for="email" class="font-medium mb-1">Email:</label>
    <input type="text" id="email" name="email" class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500">
  </div>
  <input type="hidden" name="id_course" value="{{ $course->id }}">
  <button type="submit" class="btn bg-gray-200 dark:bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md shadow-sm">Guardar</button>
</form>

</body>

</html>
