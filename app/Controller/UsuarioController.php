<?php
namespace MyApp\Controller;

use Winter\Rest\Annotations\Path;

/**
 * @Path("/usuario/v1")
 */
class UsuarioController
{

    public function get()
    {
        return "APP Usuario";
    }
    
    public function post() {
        return "vai caraio!";
    }
}