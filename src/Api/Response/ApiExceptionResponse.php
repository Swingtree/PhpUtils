<?php

namespace Swingtree\PhpUtils\Api\Response;


/**
 * Create a uniform api exception response
 * Class ApiExceptionResponse
 *
 * @package Swingtree\PhpUtils\Api\Response
 */
class ApiExceptionResponse {

  /**
   * Create a structured error
   * @param $status
   * @param $message
   * @param array $susbstitutes
   *
   * @return array
   */
  public static function create($status, $message, $susbstitutes = []) {
    return [
      'error' => ApiResponse::info($status, $message, $susbstitutes),
    ];
  }

}