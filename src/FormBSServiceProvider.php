<?php

namespace n1c\FormBS;

use Form;
use Illuminate\Support\ServiceProvider;

class FormBSServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Form::component('alert', 'components.form.alert', [
            'key',
            'strong' => null,
            'message' => null,
            'status' => 'success',
        ]);

        Form::component('bsCheckbox', 'components.form.checkbox', [
            'name',
            'value' => true,
            'default' => false,
            'attributes' => [],
        ]);

        Form::component('bsSelect', 'components.form.select', [
            'name',
            'options' => [],
            'value' => null,
            'attributes' => [],
        ]);

        Form::component('bsText', 'components.form.text', [ 'name', 'value' => null, 'attributes' => [], ]);
        Form::component('bsNumber', 'components.form.number', [ 'name', 'value' => null, 'attributes' => [], ]);
        Form::component('bsTextarea', 'components.form.textarea', [ 'name', 'value' => null, 'attributes' => [], ]);
        Form::component('bsUrl', 'components.form.url', [ 'name', 'value' => null, 'attributes' => [], ]);
        Form::component('bsImage', 'components.form.image', [ 'name', 'attributes' => [], ]);
        Form::component('error', 'components.form.error', [ 'name', ]);
        Form::component('errors', 'components.form.errors', []);
    }

    public function register()
    {
    }
}
