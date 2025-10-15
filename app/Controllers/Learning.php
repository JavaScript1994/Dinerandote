<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Learning extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Educandote - Admin Panel',
            'app_name' => 'Horus',
        ];

        return view('admin/learning', $data);
    }
}
