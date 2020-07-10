<?php

namespace App\Repository;

use App\Entity\Producto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Producto|null find($id, $lockMode = null, $lockVersion = null)
 * @method Producto|null findOneBy(array $criteria, array $orderBy = null)
 * @method Producto[]    findAll()
 * @method Producto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Producto::class);
    }

    public function BuscarProductos(){
        return $this->getEntityManager()
            ->createQuery('SELECT producto.id, producto.codigo, producto.nombre, producto.descripcion, producto.categorio, producto.precio, producto.foto, producto.cantidad
            From App:Producto producto'
            )->getResult();
    }
    public function BuscarCervezas(){
        return $this->getEntityManager()
            ->createQuery("SELECT producto.id,producto.foto,producto.nombre, producto.precio
            From App:Producto producto 
            where producto.categorio = 'cerveza'"
            )->getResult();
    }
    public function BuscarVinos(){
        return $this->getEntityManager()
            ->createQuery("SELECT producto.id,producto.foto,producto.nombre, producto.precio
            From App:Producto producto 
            WHERE producto.categorio = 'vino'"
            )->getResult();
    }
    public function BuscarLicores(){
        return $this->getEntityManager()
            ->createQuery("SELECT producto.id,producto.foto,producto.nombre, producto.precio
            From App:Producto producto 
            WHERE producto.categorio = 'licor'"
            )->getResult();
    }

    // /**
    //  * @return Producto[] Returns an array of Producto objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Producto
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
