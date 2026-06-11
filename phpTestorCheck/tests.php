<?php
/*
 * Copyright (c) 2026 Dinh Thoai Tran <zinospetrel@sdf.org>
 * All rights reserved.
 *
 * + Source URL: https://github.com/progorker/phptestorcheck/
 *
 * + License: GPL-2.0
 */

global $g_testor_dir, $g_token, $g_suite_id;

require_once __DIR__ . '/tests-config.php';
require_once $g_testor_dir . '/testor.php';

\phptestor\api_testor_startup();
require_once __DIR__ . '/tests-source.php';
require_once __DIR__ . '/tests-setup.php';

function g_run_tests() {
  global $g_token, $g_suite_id;
  test_numbers( $g_token, $g_suite_id );
  test_strings( $g_token, $g_suite_id );
}

g_run_tests();
\phptestor\api_testor_shutdown();
?>