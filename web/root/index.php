<?php

function app_render() {

  mud_render_head();

    tag_text( 'h1', 'Hello, World!' );

  mud_render_foot();

}

require_once __DIR__ . '/../../run/run-web.php';
