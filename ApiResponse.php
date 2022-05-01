<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    /**
     * The request was succesfully processed
     *
     * @param array $data
     * @param string $message
     * @return JsonResponse
     */
    protected function successResponse(array $data = [], string $message = ''): JsonResponse
    {
        return response()->json(array_merge(['message' => $message], $data), 200);
    }

    /**
     * The resource was succesfully created
     *
     * @param array $data
     * @param string $message
     * @return JsonResponse
     */
    protected function createdResponse(array $data = [], string $message = ''): JsonResponse
    {
        return response()->json(array_merge(['message' => $message], $data), 201);
    }

    /**
     * The request is accepted but the result is not available yet.
     *
     * @param array $data
     * @param string $message
     * @return JsonResponse
     */
    protected function acceptedResponse(array $data = [], string $message = ''): JsonResponse
    {
        return response()->json(array_merge(['message' => $message], $data), 202);
    }

    /**
     * Successfully processed the request and is not returning any content
     *
     * @param string $message
     * @return JsonResponse
     */
    protected function noContentResponse(string $message = ''): JsonResponse
    {
        return response()->json(['message' => $message], 204);
    }

    /**
     * Cannot process the request
     *
     * @param array $errors
     * @param string $message
     * @return JsonResponse
     */
    protected function badRequestResponse(array $errors = [], string $message = ''): JsonResponse
    {
        return response()->json(['errors' => $errors, 'message' => $message], 400);
    }

    /**
     * The request could not be authenticated
     *
     * @param array $errors
     * @param string $message
     * @return JsonResponse
     */
    protected function unauthorisedResponse(array $errors = [], string $message = ''): JsonResponse
    {
        return response()->json(['errors' => $errors, 'message' => $message], 401);
    }

    /**
     * The request was authenticated but is not authorized to access the resource
     *
     * @param array $errors
     * @param string $message
     * @return JsonResponse
     */
    protected function forbiddenResponse(array $errors = [], string $message = ''): JsonResponse
    {
        return response()->json(['errors' => $errors, 'message' => $message], 403);
    }

    /**
     * The resource was not found
     *
     * @param array $errors
     * @param string $message
     * @return JsonResponse
     */
    protected function notFoundResponse(array $errors = [], string $message = ''): JsonResponse
    {
        return response()->json(['errors' => $errors, 'message' => $message], 404);
    }

    /**
     * Method not allowed on resource
     *
     * @param array $errors
     * @param string $message
     * @return JsonResponse
     */
    protected function notAllowedResponse(array $errors = [], string $message = ''): JsonResponse
    {
        return response()->json(['errors' => $errors, 'message' => $message], 405);
    }

    /**
     * The request timed out before a response was received
     *
     * @param array $errors
     * @param string $message
     * @return JsonResponse
     */
    protected function requestTimeoutResponse(array $errors = [], string $message = ''): JsonResponse
    {
        return response()->json(['errors' => $errors, 'message' => $message], 408);
    }

    /**
     * The request tried to to create a resource with a client-generated ID that already exists
     *
     * @param array $errors
     * @param string $message
     * @return JsonResponse
     */
    protected function conflictResponse(array $errors = [], string $message = ''): JsonResponse
    {
        return response()->json(['errors' => $errors, 'message' => $message], 409);
    }

    /**
     * Refused to accept the request because the content type specified in the request is not supported by the server
     *
     * @param array $errors
     * @param string $message
     * @return JsonResponse
     */
    protected function unsupportedMediaTypeResponse(array $errors = [], string $message = ''): JsonResponse
    {
        return response()->json(['errors' => $errors, 'message' => $message], 415);
    }

    /**
     * An internal server error.
     *
     * @param array $errors
     * @param string $message
     * @return JsonResponse
     */
    protected function internalServerErrorResponse(array $errors = [], string $message = ''): JsonResponse
    {
        return response()->json(['errors' => $errors, 'message' => $message], 500);
    }

    /**
     * The request method is not supported by the server and cannot be handled for any resource
     *
     * @param array $errors
     * @param string $message
     * @return JsonResponse
     */
    protected function methodNotImplementedResponse(array $errors = [], string $message = ''): JsonResponse
    {
        return response()->json(['errors' => $errors, 'message' => $message], 501);
    }
}
