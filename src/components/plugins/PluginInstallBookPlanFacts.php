<?php
namespace extas\components\plugins;

use extas\components\books\plans\facts\BookPlanFact;
use extas\interfaces\books\plans\facts\IBookPlanFactRepository;

/**
 * Class PluginInstallBookPlanFacts
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallBookPlanFacts extends PluginInstallDefault
{
    protected $selfRepositoryClass = IBookPlanFactRepository::class;
    protected $selfUID = BookPlanFact::FIELD__ID;
    protected $selfSection = 'book_plan_facts';
    protected $selfName = 'book plan fact';
    protected $selfItemClass = BookPlanFact::class;
}
