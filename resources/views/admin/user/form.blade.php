{!! csrf_field() !!}

{!! bfSimpleInput('text', 'name', trans('adminlte_lang::message.fullname')) !!}

{!! bfSimpleInput('email', 'email', trans('adminlte_lang::message.email')) !!}

{!! bfPassword('password', trans('adminlte_lang::message.password'))  !!}

{!! bfPassword('password_confirmation', trans('site.password_confirm'))  !!}

{!! bfDropDown('role', Config::get('enums.roles'), trans('site.role'))  !!}

{!! bfFile('avatar', trans('site.avatar'))  !!}

{!! bfWithPre('web', trans('site.webpage'), 'http://')  !!}

{!! bfWithPre('twitter', trans('site.twitter'), '<i class="fa fa-twitter"></i>')  !!}

{!! bfWithPre('facebook', trans('site.facebook'), '<i class="fa fa-facebook"></i>')  !!}

{!! bfSimpleInput('textArea', 'biography', trans('site.bio'), 'tinymce') !!}

{!! bfSubmit(trans('site.register')) !!}