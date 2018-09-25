<?php

namespace Swingtree\PhpUtils\Tests\Api;

use Swingtree\PhpUtils\Api\Response\ApiExceptionResponse;
use Swingtree\PhpUtils\Api\Response\ApiResponse;

/**
 * Trait ApiStructure
 *
 * This trait will provide tests to validate a response structure
 *
 * @package Swingtree\PhpUtils\Tests\Api
 */
trait ApiStructure {

  /**
   * Validate a success with custom data
   * @param array $content The custom data, will be convert to structure too
   *
   * @return array
   */
  public function successApiStructure( $content = []){
    return $this->__structureResponse(ApiResponse::create($content));
  }

  /**
   * Validate an exception
   *
   * @return mixed
   */
  public function exceptionApiStructure(){
    return $this->__structureResponse(ApiExceptionResponse::create(418, ''));
  }

  /**
   * Internal function to convert an array to a hierarchy keys
   * @param array $array
   *
   * @return array
   */
  private function __structureResponse( array $array) : array {
    foreach ($array as $key => $value) {
      if (is_array($value)) {
        $index[$key] = $this->__structureResponse($value);
      }
      else {
        $index [] = $key;
      }
    }

    return $index ?? [];
  }
}