<?php

namespace Controllers\Customer;


use Core\Abstracts\Controller;

class CustomerController extends Controller
{


    function show()
    {
        return $this->render("customer/customer");
    }
}