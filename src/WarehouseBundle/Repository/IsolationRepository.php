<?php

namespace WarehouseBundle\Repository;

use Doctrine\ORM\EntityRepository;

class IsolationRepository extends EntityRepository
{
    public function filterListItemsByParams($params)
    {
        $qb = $this->createQueryBuilder('i');
        
        $textFilters = [
            'name' => 'name_filter'
        ];
        
        $betweenFilters = ['size', 'qty', 'pcs_in_pack'];
        
        $dateFilters = ['updated_at', 'created_at'];
                
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
        
        foreach ($dateFilters as $dateFilter) {
            if (!empty($params[$dateFilter . '_from_filter'])) {
                $dateFilterFrom = \DateTime::createFromFormat('d.m.Y', $params[$dateFilter . '_from_filter']);
                $qb->andWhere(($qb->expr()->gte('i.' . $dateFilter, "'" . $dateFilterFrom->format('Y-m-d') . "'")));
            }
            
            if (!empty($params[$dateFilter . '_to_filter'])) {
                $dateFilterTo = \DateTime::createFromFormat('d.m.Y', $params[$dateFilter . '_to_filter']);
                $qb->andWhere(($qb->expr()->lte('i.' . $dateFilter, "'" . $dateFilterTo->format('Y-m-d') . "'")));
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


