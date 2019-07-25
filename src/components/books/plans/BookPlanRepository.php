<?php
namespace extas\components\books\plans;

use extas\components\plans\PlanRepository;
use extas\interfaces\books\plans\IBookPlanRepository;

/**
 * Class BookPlanRepository
 *
 * @package extas\components\books\plans
 * @author jeyroik@gmail.com
 */
class BookPlanRepository extends PlanRepository implements IBookPlanRepository
{
    protected $name = 'books_plans';
    protected $itemClass = BookPlan::class;
}
