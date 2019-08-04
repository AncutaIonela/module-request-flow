<?php
/**
 * Create 'test' action for Index controller
 *
 * @category    Internship
 * @package     Internship_HelloWorld
 * @author      Ancuta Pantir <ancuta.pantir@evozon.com>
 */
namespace Internship\HelloWorld\Controller\Test;

use Magento\Framework\App\Action\Action;

class Hello extends Action
{
    /**
     * Execute 'hello' action
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     */
    public function execute()
    {
        echo 'Hello World!';
        exit;
    }
}