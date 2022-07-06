<?php

namespace App\GraphQL\Mutations\Employee;

use App\Employee;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class UpdateEmployeeMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateEmployee',
        'description' => 'Updates a employee'
    ];

    public function type(): Type
    {
        return GraphQL::type('Employee');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' =>  Type::nonNull(Type::int()),
            ],
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
        $employee = Employee::findOrFail($args['id']);
        $employee->fill($args);
        $employee->save();

        return $employee;
    }
}