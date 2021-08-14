<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    /**
     * The request was succesfully processed
     *
     * @param $data
     * @return JsonResponse
     */
    protected function successResponse($data = null): JsonResponse
    {
        return response()->json($data, 200);
    }

    /**
     * The resource was succesfully created
     *
     * @param $data
     * @return JsonResponse
     */
    protected function createdResponse($data): JsonResponse
    {
        return response()->json($data, 201);
    }

    /**
     * The request is accepted but the result is not available yet.
     *
     * @param $data
     * @return JsonResponse
     */
    protected function acceptedResponse($data): JsonResponse
    {
        return response()->json($data, 202);
    }

    /**
     * Successfully processed the request and is not returning any content
     *
     * @return JsonResponse
     */
    protected function noContentResponse(): JsonResponse
    {
        return response()->json([], 204);
    }

    /**
     * Cannot process the request
     *
     * @param $errors
     * @return JsonResponse
     */
    protected function badRequestResponse($errors = []): JsonResponse
    {
        return response()->json(['errors' => $errors], 400);
    }

    /**
     * The request could not be authenticated
     *
     * @param $errors
     * @return JsonResponse
     */
    protected function unauthorisedResponse($errors = []): JsonResponse
    {
        return response()->json(['errors' => $errors], 401);
    }

    /**
     * The request was authenticated but is not authorised to access the resource
     *
     * @param $errors
     * @return JsonResponse
     */
    protected function forbiddenResponse($errors = []): JsonResponse
    {
        return response()->json(['errors' => $errors], 403);
    }

    /**
     * The resource was not found.
     *
     * @param $errors
     * @return JsonResponse
     */
    protected function notFoundResponse($errors = []): JsonResponse
    {
        return response()->json(['errors' => $errors], 404);
    }

    /**
     * Method not allowed on resource
     *
     * @param $errors
     * @return JsonResponse
     */
    protected function notAllowedResponse($errors = []): JsonResponse
    {
        return response()->json(['errors' => $errors], 405);
    }

    /**
     * The request timed out before a response was received
     *
     * @param $errors
     * @return JsonResponse
     */
    protected function requestTimeoutResponse($errors = []): JsonResponse
    {
        return response()->json(['errors' => $errors], 408);
    }

    /**
     * The request tried to to create a resource with a client-generated ID that already exists
     *
     * @param $errors
     * @return JsonResponse
     */
    protected function conflictResponse($errors = []): JsonResponse
    {
        return response()->json(['errors' => $errors], 409);
    }

    /**
     * Refused to accept the request because the content type specified in the request is not supported by the server
     *
     * @param $errors
     * @return JsonResponse
     */
    protected function unsupportedMediaTypeResponse($errors = []): JsonResponse
    {
        return response()->json(['errors' => $errors], 415);
    }

    /**
     * An internal server error.
     *
     * @param $errors
     * @return JsonResponse
     */
    protected function internalServerErrorResponse($errors = []): JsonResponse
    {
        return response()->json(['errors' => $errors], 500);
    }

    /**
     * The request method is not supported by the server and cannot be handled for any resource
     *
     * @param $errors
     * @return JsonResponse
     */
    protected function methodNotImplementedResponse($errors = []): JsonResponse
    {
        return response()->json(['errors' => $errors], 501);
    }
}
