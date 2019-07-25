<?php
namespace extas\components\books\plans;

use extas\components\books\plans\progress\BookPlanProgress;
use extas\components\plans\Plan;
use extas\interfaces\books\plans\IBookPlan;
use extas\interfaces\books\plans\progress\IBookPlanProgressRepository;
use extas\interfaces\plans\progress\IPlanProgress;

/**
 * Class BookPlan
 *
 * @package extas\components\books\plans
 * @author jeyroik@gmail.com
 */
class BookPlan extends Plan implements IBookPlan
{
    protected $planProgressRepo = IBookPlanProgressRepository::class;

    /**
     * @override_it
     *
     * @return string
     */
    protected function getPlanSubject()
    {
        return 'kb.book.plan';
    }

    /**
     * @override_it
     *
     * @param array $data
     *
     * @return IPlanProgress
     */
    protected function getPlanProgress($data)
    {
        return new BookPlanProgress($data);
    }
}
