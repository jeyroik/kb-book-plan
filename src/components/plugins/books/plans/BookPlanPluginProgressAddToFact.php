<?php
namespace extas\components\plugins\books\plans;

use df\components\plugins\plans\PlanPluginProgressAddToFact;
use extas\components\books\plans\facts\BookPlanFact;
use extas\interfaces\books\plans\facts\IBookPlanFactRepository;
use extas\interfaces\plans\facts\IPlanFact;

/**
 * Class BookPlanPluginProgressAddToFact
 *
 * @package extas\components\plugins\books\plans
 * @author jeyroik@gmail.com
 */
class BookPlanPluginProgressAddToFact extends PlanPluginProgressAddToFact
{
    protected $factRepo = IBookPlanFactRepository::class;

    /**
     * @override_it
     *
     * @return string
     */
    protected function getPlanFactSubject()
    {
        return 'kb.book.plan.fact';
    }

    /**
     * @override_it
     *
     * @param $factData
     *
     * @return IPlanFact
     */
    protected function getPlanFact($factData)
    {
        return new BookPlanFact($factData);
    }
}
