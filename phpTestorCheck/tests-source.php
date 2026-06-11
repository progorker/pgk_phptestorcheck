<?php
/*
 * Copyright (c) 2026 Dinh Thoai Tran <zinospetrel@sdf.org>
 * All rights reserved.
 *
 * + Source URL: https://github.com/progorker/phptestorcheck/
 *
 * + License: GPL-2.0
 */

global $g_token, $g_suite_id;

$name = 'pkg_tests-setup';
$data = '/tests-setup.php';
phptestor\api_testor_option( $g_token, $g_suite_id, $data, 'src:' . $name, false );

$name = 'pkg_tests';
$data = '/tests.php';
phptestor\api_testor_option( $g_token, $g_suite_id, $data, 'src:' . $name, false );

$name = 'pkg_tests-config';
$data = '/tests-config.php';
phptestor\api_testor_option( $g_token, $g_suite_id, $data, 'src:' . $name, false );

$name = 'pkg_tests-source';
$data = '/tests-source.php';
phptestor\api_testor_option( $g_token, $g_suite_id, $data, 'src:' . $name, false );

$name = 'test_numbers';
$data = '/tst/test-numbers.php';
phptestor\api_testor_option( $g_token, $g_suite_id, $data, 'src:' . $name, false );

$name = 'test_strings';
$data = '/tst/test-strings.php';
phptestor\api_testor_option( $g_token, $g_suite_id, $data, 'src:' . $name, false );

?>