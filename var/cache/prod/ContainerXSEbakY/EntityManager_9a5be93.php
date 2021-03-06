<?php

namespace ContainerXSEbakY;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3a196 = null;
    private $initializer5935c = null;
    private static $publicPropertiesc383f = [
        
    ];
    public function getConnection()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getConnection', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getMetadataFactory', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getExpressionBuilder', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'beginTransaction', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getCache', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getCache();
    }
    public function transactional($func)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'transactional', array('func' => $func), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'commit', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->commit();
    }
    public function rollback()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'rollback', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getClassMetadata', array('className' => $className), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'createQuery', array('dql' => $dql), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'createNamedQuery', array('name' => $name), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'createQueryBuilder', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'flush', array('entity' => $entity), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'clear', array('entityName' => $entityName), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->clear($entityName);
    }
    public function close()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'close', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->close();
    }
    public function persist($entity)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'persist', array('entity' => $entity), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'remove', array('entity' => $entity), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'refresh', array('entity' => $entity), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'detach', array('entity' => $entity), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'merge', array('entity' => $entity), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'contains', array('entity' => $entity), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getEventManager', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getConfiguration', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'isOpen', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getUnitOfWork', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getProxyFactory', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'initializeObject', array('obj' => $obj), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'getFilters', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'isFiltersStateClean', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'hasFilters', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return $this->valueHolder3a196->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer5935c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder3a196) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3a196 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder3a196->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, '__get', ['name' => $name], $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        if (isset(self::$publicPropertiesc383f[$name])) {
            return $this->valueHolder3a196->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a196;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3a196;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a196;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3a196;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, '__isset', array('name' => $name), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a196;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder3a196;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, '__unset', array('name' => $name), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3a196;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder3a196;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, '__clone', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        $this->valueHolder3a196 = clone $this->valueHolder3a196;
    }
    public function __sleep()
    {
        $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, '__sleep', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
        return array('valueHolder3a196');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5935c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5935c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5935c && ($this->initializer5935c->__invoke($valueHolder3a196, $this, 'initializeProxy', array(), $this->initializer5935c) || 1) && $this->valueHolder3a196 = $valueHolder3a196;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3a196;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3a196;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
