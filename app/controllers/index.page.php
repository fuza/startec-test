<?php
/**	\file
 * 	\brief Sample controller for the main page.
 *
 *  \copyright  ₢ 2020  Luciano Fuza
 *  \author     Luciano Fuza - luciano@fuza.com.br
 *  \ingroup    controllers
 */
use Springy\Controller;

class Index_Controller extends Controller
{
    /**
     *  \brief Método principal (default).
     *
     *  Este método é executado se nenhum outro método for definido na URI para ser chamado, quando essa controladora é chamada.
     */
    public function _default()
    {
        $tpl = $this->_template();
        $tpl->display();
    }
}
