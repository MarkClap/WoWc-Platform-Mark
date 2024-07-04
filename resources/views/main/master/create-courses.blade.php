@vite(['resources/css/app.css', 'resources/js/app.js'])
<pre>
    {{ $teacher }}
</pre>
<form data-theme="wowc_light" method="POST" action="{{ route('course.store') }}">
    @csrf
    <div>
        <label for="">name</label>
        <input name="name">
    </div>
    <div>
        <label for="">description</label>
        <input name="description">
    </div>
    <input type="type" name="id_institution" value="{{$id_institution->id}}">

    <button class="btn btn-accent" type="submit">Guardar</button>
</form>