<?php
/**
 * Index controller class
 *
 * @category    Internship
 * @package     Internship_HelloWorld
 * @author      Ancuta Pantir <ancuta.pantir@eozon.com>
 */
namespace Internship\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    /**
     * Execute 'index' action from 'Index' controller
     */
    public function execute()
    {
        echo 'Default Index controller class!';
        exit;
    }
}