<?php
namespace extas\components\plugins\books\plans;

use extas\components\parameters\Parameter;
use extas\components\plugins\Plugin;
use extas\interfaces\books\plans\facts\IBookPlanFact;
use extas\interfaces\books\plans\progress\IBookPlanProgress;
use extas\interfaces\parameters\IParameter;

/**
 * Class BookPlanFactPluginProgressAdd
 *
 * @package extas\components\plugins\books\plans
 * @author jeyroik@gmail.com
 */
class BookPlanFactPluginProgressAdd extends Plugin
{
    const FIELD__PAGES_COUNT = 'pages_count';
    const FIELD__BOOK_ID = 'book_id';
    const FIELD__AUTHORS_NAMES = 'authors_names';

    /**
     * @param IBookPlanFact $fact
     * @param IBookPlanProgress $progress
     */
    public function __invoke(&$fact, $progress)
    {
        $pagesFact = $fact->getParameter(static::FIELD__PAGES_COUNT, null);
        $pagesProgress = $progress->getParameter(static::FIELD__PAGES_COUNT, new Parameter([
            IParameter::FIELD__NAME => static::FIELD__PAGES_COUNT,
            IParameter::FIELD__VALUE => 0
        ]));

        if (!$pagesFact) {
            $pagesFact = $pagesProgress;
        } else {
            $pagesFact->setValue($pagesFact->getValue() + $pagesProgress->getValue());
        }

        $fact->setParameter(static::FIELD__PAGES_COUNT, $pagesFact);
        $fact->setParameter(
            static::FIELD__BOOK_ID,
            $progress->getParameter(static::FIELD__BOOK_ID, null)
        );
    }
}
