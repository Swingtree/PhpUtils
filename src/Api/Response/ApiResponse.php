<?php

namespace Swingtree\PhpUtils\Api\Response;

/**
 * Class ApiResponse
 * uniform response
 *
 * @package Swingtree\PhpUtils\Api\Response
 */
class ApiResponse {

  /**
   * Create a structured response
   * @param $content
   * @param int $status
   * @param string $message
   * @param array $susbstitutes
   *
   * @return array
   */
  public static function create( $content, $status = 200, $message = 'api.message.success', $susbstitutes = []){
    return [
      'info' => self::info($status, $message, $susbstitutes),
      'content' => $content,
    ];
  }

  /**
   * Create a structure response information
   * @param $status
   * @param $message
   * @param array $susbstitutes
   *
   * @return array
   */
  public static function info($status, $message, $susbstitutes = []){
    return [
      'status' => $status,
      'message' => $message,
      'substitutes' => $susbstitutes,
    ];
  }
}