<?php
namespace extas\interfaces\books\plans\facts;

use extas\interfaces\books\authors\IHasAuthors;
use extas\interfaces\books\IHasBook;
use extas\interfaces\plans\facts\IPlanFact;

/**
 * Interface IBookPlanFact
 *
 * @package extas\interfaces\books\plans\facts
 * @author jeyroik@gmail.com
 */
interface IBookPlanFact extends IPlanFact, IHasBook, IHasAuthors
{

}
