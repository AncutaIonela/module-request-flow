<?php
/**
 * Test Redirect controller class
 *
 * @category    Internship
 * @package     Internship_HelloWorld
 * @author      Ancuta Pantir <ancuta.pantir@evozon.com>
 */
namespace Internship\HelloWorld\Controller\Test;

use Magento\Framework\App\Action\Action;

class Redirect extends Action
{
    /**
     * Execute 'redirect' action from Test controller
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     */
    public function execute()
    {
        $this->_redirect('*/');
    }
}