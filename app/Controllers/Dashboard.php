<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        // Datos dinámicos para el dashboard
        $data = [
            'title' => 'Dashboard - Admin Panel',
            'app_name' => 'Mi Aplicación',
            'stats' => [
                'total_users' => $this->getTotalUsers(),
                'avg_time' => $this->getAverageTime(),
                'total_males' => $this->getTotalMales(),
                'total_females' => $this->getTotalFemales(),
            ],
            'recent_activities' => $this->getRecentActivities()
        ];

        return view('admin/dashboard', $data);
    }

    private function getTotalUsers()
    {
        // Lógica para obtener usuarios totales de la base de datos
        return 2500; // Ejemplo
    }

    private function getAverageTime()
    {
        // Lógica para obtener tiempo promedio
        return '123.50'; // Ejemplo
    }

    private function getTotalMales()
    {
        // Lógica para obtener total de hombres
        return '2,500'; // Ejemplo
    }

    private function getTotalFemales()
    {
        // Lógica para obtener total de mujeres
        return '4,567'; // Ejemplo
    } 

    private function getRecentActivities()
    {
        // Lógica para obtener actividades recientes
        return [
            [
                'title' => 'New User Registration',
                'time_ago' => '13 hours ago',
                'user' => 'Jane Smith',
                'description' => 'A new user has registered in the system.'
            ],
            [
                'title' => 'Order Completed',
                'time_ago' => '2 hours ago',
                'user' => 'John Doe',
                'description' => 'An order has been successfully completed.'
            ]
        ];
    }
}
