<?php
namespace extas\components\plugins;

use extas\components\books\plans\BookPlan;
use extas\interfaces\books\plans\IBookPlanRepository;

/**
 * Class PluginInstallBookPlans
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallBookPlans extends PluginInstallDefault
{
    protected $selfItemClass = BookPlan::class;
    protected $selfName = 'book plan';
    protected $selfSection = 'book_plans';
    protected $selfUID = BookPlan::FIELD__ID;
    protected $selfRepositoryClass = IBookPlanRepository::class;
}
