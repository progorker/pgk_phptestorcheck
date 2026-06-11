<?php
/*
 * Copyright (c) 2026 Dinh Thoai Tran <zinospetrel@sdf.org>
 * All rights reserved.
 *
 * + Source URL: https://github.com/progorker/pgk_phptestorcheck/
 *
 * + License: GPL-2.0
 */

function test_numbers( $p_token, $p_suite_id ) {
  $v_case_code = 'test_numbers';
  $v_case_id = -1;
  \phptestor\api_testor_case( $p_token, $v_case_id, $p_suite_id, $v_case_code );

  /* -------------------------------------------- */

  $v_test_code = 'equals.1';
  $v_test_id = -1;
  $v_num_a = 30.3;
  $v_num_b = 30.3;
  \phptestor\api_testor_equals( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  $v_test_code = 'equals.2';
  $v_test_id = -1;
  $v_num_a = 30.3;
  $v_num_b = 45.8;
  \phptestor\api_testor_equals( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  $v_test_code = 'not_equals.1';
  $v_test_id = -1;
  $v_num_a = 30.3;
  $v_num_b = 30.3;
  \phptestor\api_testor_not_equals( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  $v_test_code = 'not_equals.2';
  $v_test_id = -1;
  $v_num_a = 30.3;
  $v_num_b = 45.8;
  \phptestor\api_testor_not_equals( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  /* -------------------------------------------- */

  $v_test_code = 'greater_than.1';
  $v_test_id = -1;
  $v_num_a = 43.6;
  $v_num_b = 30.3;
  \phptestor\api_testor_greater_than( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  $v_test_code = 'greater_than.2';
  $v_test_id = -1;
  $v_num_a = 43.6;
  $v_num_b = 60.7;
  \phptestor\api_testor_greater_than( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  $v_test_code = 'not_greater_than.1';
  $v_test_id = -1;
  $v_num_a = 43.6;
  $v_num_b = 30.3;
  \phptestor\api_testor_not_greater_than( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  $v_test_code = 'not_greater_than.2';
  $v_test_id = -1;
  $v_num_a = 43.6;
  $v_num_b = 60.7;
  \phptestor\api_testor_not_greater_than( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  /* -------------------------------------------- */

  $v_test_code = 'less_than.1';
  $v_test_id = -1;
  $v_num_a = 30.5;
  $v_num_b = 40.8;
  \phptestor\api_testor_less_than( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  $v_test_code = 'less_than.2';
  $v_test_id = -1;
  $v_num_a = 50.5;
  $v_num_b = 40.8;
  \phptestor\api_testor_less_than( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  $v_test_code = 'not_less_than.1';
  $v_test_id = -1;
  $v_num_a = 30.5;
  $v_num_b = 40.8;
  \phptestor\api_testor_not_less_than( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

  $v_test_code = 'not_less_than.2';
  $v_test_id = -1;
  $v_num_a = 50.5;
  $v_num_b = 40.8;
  \phptestor\api_testor_not_less_than( $p_token, $v_test_id, $p_suite_id, $v_case_id, $v_test_code, $v_num_a, $v_num_b );

}
?>