<?php

namespace App\Http\Controllers;

class Documentation extends Controller
{
    /**
    * @OA\Info
    * (
    *   title="Laravel Start Template",
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
     *     path="/",
     *     description="Home page",
     *     @OA\Response(response="default", description="Welcome page")
     * )
     */

}
