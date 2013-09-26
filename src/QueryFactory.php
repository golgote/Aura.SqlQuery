<?php
/**
 * 
 * This file is part of Aura for PHP.
 * 
 * @package Aura.Sql
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
namespace Aura\Sql\Query;

/**
 * 
 * Creates query statement objects.
 * 
 * @package Aura.Sql
 * 
 */
class Factory
{
    /**
     * 
     * Returns a new query object.
     * 
     * @param string $type The query object type.
     * 
     * @param AbstractConnection $connection The SQL connection.
     * 
     * @return AbstractQuery
     * 
     */
    public function newInstance($type, AbstractConnection $connection)
    {
        $class = '\Aura\Sql\Query\\' . ucfirst($type);
        return new $class($connection);
    }
}
