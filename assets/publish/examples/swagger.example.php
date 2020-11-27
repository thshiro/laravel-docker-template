<?php

/**
* @OA\Info
* (
*   title="Laravel API",
*   description="",
*   version="0.0.1"
* )
*
*/

/**
 * @OA\SecurityScheme(
 *     type="http",
 *     securityScheme="bearerAuth",
 *     scheme="bearer",
 *     bearerFormat="JWT"
 * ),
 */

 /**
 * @OA\Get(
 *     tags={Laravel"},
 *     path="/api/route",
 *     description="Get something",
 *     summary="Get something",
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="No data found"
 *     ),
 *     security={{"bearerAuth": {}}}
 * )
 */

 /**
 * @OA\Get(
 *     tags={"Laravel"},
 *     path="/api/route/{id}",
 *     description="Get something by ID",
 *     summary="Get something by ID",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Something ID",
 *         required=true,
 *         @OA\Schema(
 *          type="integer"
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Ok",
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="The requested resource ID was not found"
 *     ),
 *     security={{"bearerAuth": {}}}
 * )
 */

 /**
 * @OA\Post(
 *     tags={"laravel"},
 *     path="/api/route",
 *     description="Create Something",
 *     summary="Create Something",
 *     @OA\Parameter(
 *         name="something_description",
 *         in="query",
 *         description="Something Description",
 *         required=true,
 *         @OA\Schema(
 *          type="string"
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="The resource has been successfully created",
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Validation error"
 *     ),
 *     security={{"bearerAuth": {}}}
 * )
 */

 /**
 * @OA\Patch(
 *     tags={"Laravel"},
 *     path="/api/route/{id}",
 *     description="Update something",
 *     summary="Update something",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Something ID",
 *         required=true,
 *         @OA\Schema(
 *          type="integer"
 *         )
 *     ),
 *     @OA\Parameter(
 *         name="something_description",
 *         in="query",
 *         description="Something Description",
 *         required=true,
 *         @OA\Schema(
 *          type="string"
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="The resource has been successfully updated",
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Validation error"
 *     ),
 *     security={{"bearerAuth": {}}}
 * )
 */

 /**
 * OA\Delete(
 *     tags={"Laravel"},
 *     path="/api/route/{id}",
 *     description="Delete Something by ID",
 *     summary="Delete Something by ID",
 *     OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Something ID",
 *         required=true,
 *         @OA\Schema(
 *          type="integer"
 *         )
 *     ),
 *     OA\Response(
 *         response=204,
 *         description="Deleted successfully",
 *     ),
 *     OA\Response(
 *         response=400,
 *         description="The requested resource ID was not found"
 *     ),
 *     security={{"bearerAuth": {}}}
 * )
 */