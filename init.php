<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-checklist-model')
    ->usePackage('larakit/sf-angular')
    ->ngModule('checklist-model')
    ->js('//cdnjs.cloudflare.com/ajax/libs/checklist-model/0.9.0/checklist-model.min.js');
