<?php

use Core\Database;

include "vendor/autoload.php";

$db=new Database();

$db->drop("roles");
$db->drop("users");
$db->drop("statuses");
$db->drop("tickets");

$db->create("roles", [
    "id" => [
        "INT(11)",
        "NOT NULL",
        "AUTO_INCREMENT",
        "PRIMARY KEY"
    ],
    "name" => [
        "VARCHAR(255)",
        "NOT NULL"
    ]
]);

$db->create("users", [
    "id" => [
        "INT(11)",
        "NOT NULL",
        "AUTO_INCREMENT",
        "PRIMARY KEY"
    ],
    "username" => [
        "VARCHAR(255)",
        "NOT NULL"
    ],
    "password" => [
        "VARCHAR(255)",
        "NOT NULL"
    ],
    "role_id"=>[
        "INT(11)",
        "NOT NULL"
    ]
]);

$db->create("statuses", [
    "id" => [
        "INT(11)",
        "NOT NULL",
        "AUTO_INCREMENT",
        "PRIMARY KEY"
    ],
    "name" => [
        "VARCHAR(255)",
        "NOT NULL"
    ]
]);

$db->create("tickets", [
    "id" => [
        "INT(11)",
        "NOT NULL",
        "AUTO_INCREMENT",
        "PRIMARY KEY"
    ],
    "employee_id"=>[
        "INT(11)",
        "NOT NULL"
    ],
    "customer_id"=>[
        "INT(11)",
        "NOT NULL"
    ],
    "status_id"=>[
        "INT(11)",
        "NOT NULL"
    ],
    "title" => [
        "VARCHAR(255)",
        "NOT NULL"
    ],
    "description" => [
        "TEXT",
        "NOT NULL"
    ]

]);


$db->query("ALTER TABLE users ADD CONSTRAINT roles
                  FOREIGN KEY (role_id) 
                  REFERENCES roles(id);
                  ")->execute();

$db->query("ALTER TABLE tickets ADD CONSTRAINT users_employee_fk
                  FOREIGN KEY (employee_id) 
                  REFERENCES users(id);
                  ALTER TABLE tickets ADD CONSTRAINT users_customer_fk
                  FOREIGN KEY (customer_id) 
                  REFERENCES users(id);
                  ALTER TABLE tickets ADD CONSTRAINT statuses
                  FOREIGN KEY (status_id) 
                  REFERENCES statuses(id);")->execute();

$db->insert("statuses", [
    "id" => 1,
    "name" => "ordered"
]);
$db->insert("statuses", [
    "id" => 2,
    "name" => "order_cancelled"
]);
$db->insert("statuses", [
    "id" => 3,
    "name" => "work_cancelled"
]);
$db->insert("statuses", [
    "id" => 4,
    "name" => "check"
]);
$db->insert("statuses", [
    "id" => 5,
    "name" => "complete"
]);
$db->insert("statuses", [
    "id" => 6,
    "name" => "work"
]);


$db->insert("roles", [
    "id" => 1,
    "name" => "admin"
]);
$db->insert("roles", [
    "id" => 2,
    "name" => "manager"
]);
$db->insert("roles", [
    "id" => 3,
    "name" => "customer"
]);
$db->insert("roles", [
    "id" => 4,
    "name" => "employee"
]);