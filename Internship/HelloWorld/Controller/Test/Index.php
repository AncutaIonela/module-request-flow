<?php
/**
 * Index action for Test controller
 *
 * @category    Internship
 * @package     HelloWorld
 * @author      Ancuta Pantir <ancuta.pantir@evozon.com>
 */
namespace Internship\HelloWorld\Controller\Test;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    /**
     * Execute 'index' action
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     */
    public function execute()
    {
        echo 'Second Hello World!';
        exit;
    }
}