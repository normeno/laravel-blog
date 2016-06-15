<?php
/**
 * Created by Nicolas Ormeno.
 * User: normeno
 * Date: 08-06-2016
 * Time: 20:04
 */

function bfSimpleInput($type, $field, $name, $class = '', $value = null)
{
    $html = "<div class='form-group'>" .
                Form::label($name) .
                Form::$type(
                    $field,
                    $value,
                    [
                        'class' => 'form-control '.$class.'',
                        'placeholder' => trans('site.enter_', ['enter' => $name] )
                    ]
                ) .
            "</div>";
    return $html;
}

function bfPassword($field, $name)
{
    $html = "<div class='form-group'>" .
                Form::label($name) .
                Form::password(
                    $field,
                    [
                        'class' => 'form-control',
                        'placeholder' => trans('site.enter_', ['enter' => $name] )
                    ]
                ) .
            "</div>";
    return $html;
}

function bfFile($field, $name)
{
    $html = "<div class='form-group'>" .
        Form::label($name) .
        Form::file(
            $field,
            [
                'class' => 'form-control',
                'placeholder' => trans('site.enter_', ['enter' => $name] )
            ]
        ) .
        "</div>";
    return $html;
}

function bfDropDown($field, $data, $name)
{
    $html = "<div class='form-group'>" .
                Form::label($name) .
                Form::select(
                    $field,
                    $data,
                    null,
                    [
                        'class' => 'form-control'
                    ]
                ) .
            "</div>";
    return $html;
}

function bfWithPre($field, $name, $pre)
{
    $html = "<div class='form-group'>" .
                Form::label($name) .
                "<div class='input-group'>" .
                    "<span class='input-group-addon'>$pre</span>" .
                    Form::text(
                        $field,
                        null,
                        [
                            'class' => 'form-control',
                            'placeholder' => trans('site.enter_', ['enter' => $name] )
                        ]
                    ) .
                "</div>" .
            "</div>";

    return $html;
}

function bfSubmit($value)
{
    $html = "<div class='form-group'>"
                .Form::submit($value, ['class' => 'btn btn-primary']).
            "</div>";


    return $html;
}