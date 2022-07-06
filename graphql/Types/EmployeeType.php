<?php

namespace App\GraphQL\Types;

use App\Employee;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class EmployeeType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Employee',
        'description' => 'Collection of employees',
        'model' => Employee::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of employee'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Name of employee'
            ],
            'age' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Employee age'
            ],
            'job' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Employee job'
            ],
            'salary' => [
                'type' => Type::Null(Type::int()),
                'description' => 'Employee salary'
            ],
        ];
    }
}