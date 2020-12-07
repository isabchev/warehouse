<?php

namespace WarehouseBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ItemRepository extends EntityRepository
{
    public function filterListItemsByParams($params)
    {
        $qb = $this->createQueryBuilder('i');
        
        $textFilters = [
            'name' => 'name_filter',
            'description' => 'description_filter'
        ];
        
        $betweenFilters = ['qty'];
        
        foreach ($textFilters as $columnName => $inputName) {
            if (isset($params[$inputName]) && $params[$inputName] != '') {
                $qb->andWhere($qb->expr()->like('i.' . $columnName, ':' . $columnName))
                        ->setParameter($columnName,'%' . $params[$inputName] . '%');
            }
        }
        
        foreach ($betweenFilters as $betweenFilter) {
            if (!empty($params[$betweenFilter . '_from_filter'])) {
                $qb->andWhere(($qb->expr()->gte('i.' . $betweenFilter, $params[$betweenFilter . '_from_filter'])));
            }
            
            if (!empty($params[$betweenFilter . '_to_filter'])) {
                $qb->andWhere(($qb->expr()->lte('i.' . $betweenFilter, $params[$betweenFilter . '_to_filter'])));
            }
        }
        
        $qb->getQuery();
        
        //Ugly hack
        if(!isset($params['sort']) && !!isset($params['direction'])) {
            $_GET['sort'] = 'i.name';
            $_GET['direction'] = 'asc';
        }
        
        return $qb;
    }
}


