<?php
namespace extas\components\books\plans\progress;

use extas\components\plans\progress\PlanProgressRepository;
use extas\interfaces\books\plans\progress\IBookPlanProgressRepository;

/**
 * Class BookPlanProgressRepository
 *
 * @package extas\components\books\plans\progress
 * @author jeyroik@gmail.com
 */
class BookPlanProgressRepository extends PlanProgressRepository implements IBookPlanProgressRepository
{
    protected $itemClass = BookPlanProgress::class;
    protected $name = 'books_plans_progress';
}
