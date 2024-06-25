

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Teacher</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('teachers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="row padding-1 p-1">
                                <div class="col-md-12">
                                    
                                    <div class="form-group mb-2 mb20">
                                        <label for="id_user" class="form-label" style="color: ">{{ __('Users') }}</label>
                                        <select class="form-select" name="id_user" id="inputUsuario" required >
                                            <option value="">Seleccione una opción</option>
                                            @foreach($users as $user)
                                            <option value="{{$user->id}}">{{ $user->name }} ({{ $user->email }})</option>
                                            @endforeach
                                        </select>
                                
                                        {!! $errors->first('id_user', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                        <input type="hidden" name="id_institution" class="form-control @error('id_institution') is-invalid @enderror" value="{{ $institutionId }}" id="id_institution" placeholder="Id Institution">
                            
                                </div>
                                <div class="col-md-12 mt20 mt-2">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

