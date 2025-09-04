<?php

namespace App\Controller\Admin;

use App\Entity\Paciente;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PacienteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Paciente::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            // TextField::new('title'),
            // TextEditorField::new('description'),
        ];
    }
   
}
