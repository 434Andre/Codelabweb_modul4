<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller
{
    use responseFormatter;
    public function __construct()
    {
        $this->controllerName = "Get all product";

        $this->controllerMethod = "GET";
    }

    public function getAllProduct()
    {
        $dummydata = [
            "Air Mineral",
            "Kebab",
            "amsm",
            "wdwd",
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "product" => $dummydata
        ];
        return $this->responseFormatter(200, "Succes", $response);
}
}
?>