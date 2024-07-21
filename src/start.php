<?php

if (function_exists('Jaxon\jaxon')) {
    $di = Jaxon\jaxon()->di();
    // Register the UI builder
    $di->auto(Lagdo\UiBuilder\Bootstrap3\Builder::class);
    $di->alias('ui_builder_bootstrap3', Lagdo\UiBuilder\Bootstrap3\Builder::class);
}
