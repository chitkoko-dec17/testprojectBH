<?php

namespace App\GraphQL\Mutations\Employee;

use App\Employee;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;

class DeleteEmployeeMutation extends Mutation
{
    protected $attributes = [
        'name' => 'deleteEmployee',
        'description' => 'delete a employee'
    ];

    public function type(): Type
    {
        return Type::boolean();
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ]
        ];
    }

    public function resolve($root, $args)
    {
        $employee = Employee::findOrFail($args['id']);

        return  $employee->delete() ? true : false;
    }
}