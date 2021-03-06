<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class TaskValidator.
 *
 * @package namespace App\Validators;
 */
class TaskValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name'   => 'required|max:255',
            'description'   => 'required|max:255',
            'priority'  => "required|in:Baixa,baixa,Média,média,Alta,alta,Muito Alta,muito alta",
            'term'  => 'required|date_format:Y-m-d H:i:s',
            'is_completed' => 'required|boolean'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name'   => 'max:255',
            'description'   => 'max:255',
            'priority'  => "in:Baixa,baixa,Média,média,Alta,alta,Muito Alta,muito alta",
            'term'  => 'date_format:Y-m-d H:i:s',
            'is_completed' => 'boolean'
        ]
    ];
}
