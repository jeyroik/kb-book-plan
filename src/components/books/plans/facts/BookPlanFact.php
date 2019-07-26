<?php
namespace extas\components\books\plans\facts;

use extas\components\books\authors\THasAuthors;
use extas\components\books\THasBook;
use extas\components\plans\facts\PlanFact;
use extas\interfaces\books\plans\facts\IBookPlanFact;
use extas\interfaces\books\plans\facts\IBookPlanFactRepository;
use extas\interfaces\books\plans\IBookPlanRepository;

/**
 * Class BookPlanFact
 *
 * @package extas\components\books\plans\facts
 * @author jeyroik@gmail.com
 */
class BookPlanFact extends PlanFact implements IBookPlanFact
{
    use THasBook;
    use THasAuthors;

    protected $planRepo = IBookPlanRepository::class;
    protected $factRepo = IBookPlanFactRepository::class;
}
