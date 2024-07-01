
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="bg-red-300 flex flex-grow h-screen">
    
        <p>start quiz</p>
        <a href="{{ route('indexquiz') }}" class="btn bg-yellow-300 text-black">Try Again</a>
        
    
</body>
</html>