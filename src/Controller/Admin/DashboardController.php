<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Paciente;
use App\Entity\ObraSocial;
use App\Entity\HistoriaClinica;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
        return $this->render('admin/my_dashboard.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Application');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Paciente', 'fa fa-home', Paciente::class);
        yield MenuItem::linkToCrud('Obra Social', 'fa fa-home', ObraSocial::class);
        yield MenuItem::linkToCrud('Historia Clinica', 'fa fa-home', HistoriaClinica::class);
        yield MenuItem::linkToCrud('Usuario', 'fa fa-home', User::class
    );
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
