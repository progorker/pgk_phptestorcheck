<?php
/*
 * Copyright (c) 2026 Dinh Thoai Tran <zinospetrel@sdf.org>
 * All rights reserved.
 *
 * + Source URL: https://github.com/progorker/pgk_phptestorcheck/
 *
 * + License: GPL-2.0
 */

function test_strings( $p_token, $p_suite_id ) {
  $v_case_code = 'test_strings';
  $v_case_id = -1;
  \phptestor\api_testor_case( $p_token, $v_case_id, $p_suite_id, $v_case_code );

  /* -------------------------------------------- */

  $v_test_code = 'same.1';
  $v_test_id = -1;
  $v_str_a = 'Hello world!';
  $v_str_b = 'Hello world!';
  \phptestor\api_testor_same( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_str_a, $v_str_b );

  $v_test_code = 'same.2';
  $v_test_id = -1;
  $v_str_a = 'Hello world!';
  $v_str_b = 'Hello community!';
  \phptestor\api_testor_same( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_str_a, $v_str_b );

  $v_test_code = 'not_same.1';
  $v_test_id = -1;
  $v_str_a = 'Hello world!';
  $v_str_b = 'Hello world!';
  \phptestor\api_testor_not_same( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_str_a, $v_str_b );

  $v_test_code = 'not_same.2';
  $v_test_id = -1;
  $v_str_a = 'Hello world!';
  $v_str_b = 'Hello community!';
  \phptestor\api_testor_not_same( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_str_a, $v_str_b );

  /* -------------------------------------------- */

  $v_test_code = 'contains.1';
  $v_test_id = -1;
  $v_str_a = 'Hello world!';
  $v_str_b = 'world';
  \phptestor\api_testor_contains( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_str_a, $v_str_b );

  $v_test_code = 'contains.2';
  $v_test_id = -1;
  $v_str_a = 'Hello world!';
  $v_str_b = 'community';
  \phptestor\api_testor_contains( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_str_a, $v_str_b );

  $v_test_code = 'not_contains.1';
  $v_test_id = -1;
  $v_str_a = 'Hello world!';
  $v_str_b = 'world';
  \phptestor\api_testor_not_contains( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_str_a, $v_str_b );

  $v_test_code = 'not_contains.2';
  $v_test_id = -1;
  $v_str_a = 'Hello world!';
  $v_str_b = 'community';
  \phptestor\api_testor_not_contains( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_str_a, $v_str_b );

}
?>