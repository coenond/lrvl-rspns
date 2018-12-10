<?php

namespace coenond\LrvlRspns;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

public class LrvlRspnss
{
	/**
	 * Response OK 200
	 * @param  array  $data 
	 */
	public function ok($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_OK);
	}

	/**
	 * Response CREATED 201
	 * @param  array  $data 
	 */
	public function created($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_CREATED);
	}

	/**
	 * Response ACCEPTED 202
	 * @param  array  $data 
	 */
	public function accepted($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_ACCEPTED);
	}

	/**
	 * Response NO_CONTENT 204
	 * @param  array  $data 
	 */
	public function noContent($data = []): JsonResponse
	{
		$response = [
			"status" => "success",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_NO_CONTENT);
	}

	/**
	 * Response BAD_REQUEST 400
	 * @param  array  $data 
	 */
	public function badRequest($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_BAD_REQUEST);
	}

	/**
	 * Response UNAUTHORIZED 401
	 * @param  array  $data 
	 */
	public function unauthorized($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_UNAUTHORIZED);
	}

	/**
	 * Response NOT_FOUND 404
	 * @param  array  $data 
	 */
	public function notFound($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_NOT_FOUND);
	}

	/**
	 * Response METHOD_NOT_ALLOWED 405
	 * @param  array  $data 
	 */
	public function methodNotAllowed($data = []): JsonResponse
	{
		$response = [
			"status" => "error",
			"data" => $data
		];

		return response()->json($data, Response::HTTP_METHOD_NOT_ALLOWED);
	}
}