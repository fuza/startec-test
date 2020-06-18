<?php
/**	\file
 * 	\brief Test controller.
 *
 *  \copyright  ₢ 2020 Luciano Fuza.
 *  \author     Luciano Fuza - luciano@fuza.com.br
 *  \ingroup    controllers
 */
use Springy\Controller;
use Springy\Model;

class Test_Controller extends Controller
{
    public function _default()
    {
        $test = new Test();
        $tests = $test->getAll();

        $tpl = $this->_template();
        $tpl->assign('tests', $tests);
        $tpl->display();
    }
}
