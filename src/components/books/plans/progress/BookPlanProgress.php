<?php
namespace extas\components\books\plans\progress;

use extas\components\plans\progress\PlanProgress;
use extas\interfaces\books\plans\IBookPlanRepository;
use extas\interfaces\books\plans\progress\IBookPlanProgress;

/**
 * Class BookPlanProgress
 *
 * @package extas\components\books\plans\progress
 * @author jeyroik@gmail.com
 */
class BookPlanProgress extends PlanProgress implements IBookPlanProgress
{
    protected $planRepo = IBookPlanRepository::class;
}
