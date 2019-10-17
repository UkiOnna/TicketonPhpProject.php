<?php

namespace Controllers\Customer;


use Core\Abstracts\Controller;
use Klein\Request;
use Models\Tables\Tickets;

class CustomerController extends Controller
{
    function show()
    {
        return $this->render("customer/customer");
    }

}