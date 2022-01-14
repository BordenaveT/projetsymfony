<?php

namespace ContainerXdmF0yu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder85f21 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer29517 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesccdf2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getConnection', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getMetadataFactory', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getExpressionBuilder', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'beginTransaction', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getCache', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getCache();
    }

    public function transactional($func)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'transactional', array('func' => $func), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'wrapInTransaction', array('func' => $func), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'commit', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->commit();
    }

    public function rollback()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'rollback', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getClassMetadata', array('className' => $className), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'createQuery', array('dql' => $dql), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'createNamedQuery', array('name' => $name), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'createQueryBuilder', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'flush', array('entity' => $entity), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'clear', array('entityName' => $entityName), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->clear($entityName);
    }

    public function close()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'close', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->close();
    }

    public function persist($entity)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'persist', array('entity' => $entity), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'remove', array('entity' => $entity), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'refresh', array('entity' => $entity), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'detach', array('entity' => $entity), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'merge', array('entity' => $entity), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getRepository', array('entityName' => $entityName), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'contains', array('entity' => $entity), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getEventManager', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getConfiguration', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'isOpen', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getUnitOfWork', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getProxyFactory', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'initializeObject', array('obj' => $obj), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'getFilters', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'isFiltersStateClean', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'hasFilters', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return $this->valueHolder85f21->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer29517 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder85f21) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder85f21 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder85f21->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, '__get', ['name' => $name], $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        if (isset(self::$publicPropertiesccdf2[$name])) {
            return $this->valueHolder85f21->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85f21;

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

        $targetObject = $this->valueHolder85f21;
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
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85f21;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder85f21;
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
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, '__isset', array('name' => $name), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85f21;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder85f21;
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
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, '__unset', array('name' => $name), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder85f21;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder85f21;
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
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, '__clone', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        $this->valueHolder85f21 = clone $this->valueHolder85f21;
    }

    public function __sleep()
    {
        $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, '__sleep', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;

        return array('valueHolder85f21');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer29517 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer29517;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer29517 && ($this->initializer29517->__invoke($valueHolder85f21, $this, 'initializeProxy', array(), $this->initializer29517) || 1) && $this->valueHolder85f21 = $valueHolder85f21;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder85f21;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder85f21;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
