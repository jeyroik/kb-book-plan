<?php
namespace extas\interfaces\books\plans;

use extas\interfaces\books\authors\IHasAuthors;
use extas\interfaces\books\IHasBook;
use extas\interfaces\plans\IPlan;

/**
 * Interface IBookPlan
 *
 * @package extas\interfaces\books\plans
 * @author jeyroik@gmail.com
 */
interface IBookPlan extends IPlan, IHasBook, IHasAuthors
{
}
