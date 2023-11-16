<?php

namespace App\Controllers;
use App\Models\userModel;
class dashboardController extends BaseController
{
    public function user_dashboard()
    {
        $models = new userModel();
        $users = $models->findAll();

        return view('dashboard/user_dashboard.php',['users' => $users]);
    }
}