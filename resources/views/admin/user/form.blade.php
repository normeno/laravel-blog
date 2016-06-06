{!! csrf_field() !!}

<div class="form-group">
    {!! Form::label(trans('adminlte_lang::message.fullname')) !!}
    {!! Form::text( 'name', null, ['class' => 'form-control', 'placeholder' => trans('site.enter_', ['enter' => trans('adminlte_lang::message.fullname')] ) ])!!}
</div>

<div class="form-group">
    {!! Form::label(trans('adminlte_lang::message.email')) !!}
    {!! Form::email( 'email', null, ['class' => 'form-control', 'placeholder' => trans('site.enter_', ['enter' => trans('adminlte_lang::message.email')] ) ])!!}
</div>

<div class="form-group">
    {!!Form::label(trans('adminlte_lang::message.password'))!!}
    {!!Form::password('password', ['class' => 'form-control', 'placeholder' => trans('site.enter_', ['enter' => trans('adminlte_lang::message.password')]) ])!!}
</div>

<div class="form-group">
    {!!Form::label(trans('site.password_confirm'))!!}
    {!!Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => trans('site.password_confirm') ])!!}
</div>

<div class="form-group">
    {!!Form::label(trans('site.role'))!!}
    {!!Form::select('role', Config::get('enums.roles'), null, ['class' => 'form-control', 'role' => trans('site.password_confirm') ])!!}
</div>

<div class="form-group">
    {!! Form::label(trans('site.avatar')) !!}
    {!! Form::file('avatar', ['class' => 'form-control', 'placeholder' => trans('site.enter_', ['enter' => trans('Avatar')]) ])!!}
</div>

<div class="form-group">
    {!!Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
</div>