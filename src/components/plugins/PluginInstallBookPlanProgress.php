<?php
namespace extas\components\plugins;

use extas\components\books\plans\progress\BookPlanProgress;
use extas\interfaces\books\plans\progress\IBookPlanProgressRepository;

/**
 * Class PluginInstallBookPlanProgress
 *
 * @package extas\components\plugins
 * @author jeyroik@gmail.com
 */
class PluginInstallBookPlanProgress extends PluginInstallDefault
{
    protected $selfItemClass = BookPlanProgress::class;
    protected $selfName = 'book plan progress';
    protected $selfSection = 'book_plan_progress';
    protected $selfUID = BookPlanProgress::FIELD__ID;
    protected $selfRepositoryClass = IBookPlanProgressRepository::class;
}
