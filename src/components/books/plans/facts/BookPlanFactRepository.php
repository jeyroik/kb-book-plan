<?php
namespace extas\components\books\plans\facts;

use extas\components\plans\facts\PlanFactRepository;
use extas\interfaces\books\plans\facts\IBookPlanFactRepository;

/**
 * Class BookPlanFactRepository
 *
 * @package extas\components\books\plans\facts
 * @author jeyroik@gmail.com
 */
class BookPlanFactRepository extends PlanFactRepository implements IBookPlanFactRepository
{
    protected $itemClass = BookPlanFact::class;
    protected $name = 'books_plans_facts';
}
