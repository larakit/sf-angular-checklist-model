<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-checklist-model')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->ngModule('checklist-model')
    ->jsPackage('checklist-model.min.js');
