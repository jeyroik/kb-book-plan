<?php
namespace extas\interfaces\books\plans\progress;

use extas\interfaces\books\authors\IHasAuthors;
use extas\interfaces\books\IHasBook;
use extas\interfaces\plans\progress\IPlanProgress;

/**
 * Interface IBookPlanProgress
 *
 * @package extas\interfaces\books\plans\progress
 * @author jeyroik@gmail.com
 */
interface IBookPlanProgress extends IPlanProgress, IHasBook, IHasAuthors
{

}
