<?php
namespace extas\components\books\plans\progress;

use extas\components\books\authors\THasAuthors;
use extas\components\books\THasBook;
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
    use THasBook;
    use THasAuthors;

    protected $planRepo = IBookPlanRepository::class;
}
