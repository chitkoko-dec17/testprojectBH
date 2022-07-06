<?php

namespace App\GraphQL\Mutations\Employee;

use App\Employee;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;

class CreateEmployeeMutation extends Mutation
{
    protected $attributes = [
        'name' => 'createEmployee',
        'description' => 'Create a employee'
    ];

    public function type(): Type
    {
        return GraphQL::type('Employee');
    }

    public function args(): array
    {
        return [
            'name' => [
                'name' => 'name',
                'type' => Type::nonNull(Type::string()),
            ],
            'age' => [
                'name' => 'age',
                'type' => Type::nonNull(Type::int()),
            ],
            'job' => [
                'name' => 'job',
                'type' => Type::nonNull(Type::string()),
            ],
            'salary' => [
                'name' => 'salary',
                'type' => Type::Null(Type::int()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $employee = new Employee();
        $employee->fill($args);
        $employee->save();

        return $employee;
    }
}