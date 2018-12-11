<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

if (!function_exists("rspns_ok")) {
	/**
	 * Response OK 200
	 * @param  array  $data 
	 */
	function rspns_ok($data = []): JsonResponse
	{
		$response = [ "status" => "success", "data" => $data ];
		return response()->json($response, Response::HTTP_OK);
	}
}	

if (!function_exists("rspns_created")) {
	/**
	 * Response CREATED 201
	 * @param  array  $data 
	 */
	function rspns_created($data = []): JsonResponse
	{
		$response = [ "status" => "success", "data" => $data ];
		return response()->json($response, Response::HTTP_CREATED);
	}
}	

if (!function_exists("rspns_accepted")) {
	/**
	 * Response ACCEPTED 202
	 * @param  array  $data 
	 */
	function rspns_accepted($data = []): JsonResponse
	{
		$response = [ "status" => "success", "data" => $data ];
		return response()->json($response, Response::HTTP_ACCEPTED);
	}
}	

if (!function_exists("rspns_no_content")) {
	/**
	 * Response NO_CONTENT 204
	 * @param  array  $data
	 */
	function rspns_no_content($data = []): JsonResponse
	{
		$response = [ "status" => "success", "data" => $data ];
		return response()->json($response, Response::HTTP_NO_CONTENT);
	}
}	

if (!function_exists("rspns_bad_request")) {
	/**
	 * Response BAD_REQUEST 400
	 * @param  array  $data
	 * @param  string $message
	 */
	function rspns_bad_request($data = [], $message = ""): JsonResponse
	{
		$response = [ "status" => "error", "data" => $data, "message" => $message ];
		return response()->json($response, Response::HTTP_BAD_REQUEST);
	}
}	

if (!function_exists("rspns_unauthorized")) {
	/**
	 * Response UNAUTHORIZED 401
	 * @param  array  $data
	 * @param  string $message
	 */
	function rspns_unauthorized($data = [], $message = ""): JsonResponse
	{
		$response = [ "status" => "error", "data" => $data, "message" => $message ];
		return response()->json($response, Response::HTTP_UNAUTHORIZED);
	}
}	

if (!function_exists("rspns_not_found")) {
	/**
	 * Response NOT_FOUND 404
	 * @param  array  $data
	 * @param  string $message
	 */
	function rspns_not_found($data = [], $message = ""): JsonResponse
	{
		$response = [ "status" => "error", "data" => $data, "message" => $message ];
		return response()->json($response, Response::HTTP_NOT_FOUND);
	}
}	

if (!function_exists("rspns_method_not_allowed")) {
	/**
	 * Response METHOD_NOT_ALLOWED 405
	 * @param  array  $data 
	 * @param  string $message 
	 */
	function rspns_method_not_allowed($data = [], $message = ""): JsonResponse
	{
		$response = [ "status" => "error", "data" => $data, "message" => $message ];
		return response()->json($response, Response::HTTP_METHOD_NOT_ALLOWED);
	}
}	

if (!function_exists("rspns_internal_server_error")) {
	/**
	 * Response INTERNAL_SERVER_ERROR 500
	 * @param  array  $data 
	 * @param  string $message 
	 */
	function rspns_internal_server_error($data = [], $message = ""): JsonResponse
	{
		$response = [ "status" => "error", "data" => $data, "message" => $message ];
		return response()->json($response, Response::HTTP_INTERNAL_SERVER_ERROR);
	}
}

if (!function_exists("rspns_not_implemented")) {
	/**
	 * Response NOT_IMPLEMENTED 501
	 * @param  array  $data 
	 * @param  string $message 
	 */
	function rspns_not_implemented($data = [], $message = ""): JsonResponse
	{
		$response = [ "status" => "error", "data" => $data, "message" => $message ];
		return response()->json($response, Response::HTTP_NOT_IMPLEMENTED);
	}
}

if (!function_exists("rspns_bad_gateway")) {
	/**
	 * Response BAD_GATEWAY 502
	 * @param  array  $data 
	 * @param  string $message 
	 */
	function rspns_bad_gateway($data = [], $message = ""): JsonResponse
	{
		$response = [ "status" => "error", "data" => $data, "message" => $message ];
		return response()->json($response, Response::HTTP_BAD_GATEWAY);
	}
}