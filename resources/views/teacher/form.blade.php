<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_user" class="form-label" style="color: ">{{ __('id_User') }}</label>
            <input type="text" name="id_user" class="form-control @error('id_user') is-invalid @enderror" value="{{ old('id_user', $teacher?->id_user) }}" id="id_user" placeholder="Id User">
            {!! $errors->first('id_user', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
            <input type="hidden" name="id_institution" class="form-control @error('id_institution') is-invalid @enderror" value="{{ $institutionId }}" id="id_institution" placeholder="Id Institution">

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>