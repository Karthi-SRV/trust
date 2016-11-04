<?php
/**
 * Dasboard - Implements a simple Administration Dashboard.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */

namespace App\Controllers\Admin;

use App\Core\BackendController;

use App\Models\Form;

use View;


class Dashboard extends BackendController
{

    public function index()
    {
        $forms = Form::all();
        return $this->getView()
            ->shares('title', __d('system', 'Dashboard'))
            ->with('forms', $forms);
    }

}
