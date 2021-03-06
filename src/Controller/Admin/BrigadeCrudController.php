<?php

namespace App\Controller\Admin;

use App\Entity\Brigade;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class BrigadeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Brigade::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('workShift'),
            IntegerField::new('type'),
            IntegerField::new('status'),
        ];
    }
}
