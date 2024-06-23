

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Teacher</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('teachers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Name:</strong>
                                    {{ $teacher->user->name }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $teacher->user->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Name Institution:</strong>
                                    {{ $teacher->institution->name }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

