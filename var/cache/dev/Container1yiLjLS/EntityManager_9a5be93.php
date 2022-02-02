<?php

namespace Container1yiLjLS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2b562 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55351 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties29520 = [
        
    ];

    public function getConnection()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getConnection', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getMetadataFactory', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getExpressionBuilder', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'beginTransaction', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getCache', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getCache();
    }

    public function transactional($func)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'transactional', array('func' => $func), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'wrapInTransaction', array('func' => $func), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'commit', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->commit();
    }

    public function rollback()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'rollback', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getClassMetadata', array('className' => $className), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'createQuery', array('dql' => $dql), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'createNamedQuery', array('name' => $name), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'createQueryBuilder', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'flush', array('entity' => $entity), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'clear', array('entityName' => $entityName), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->clear($entityName);
    }

    public function close()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'close', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->close();
    }

    public function persist($entity)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'persist', array('entity' => $entity), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'remove', array('entity' => $entity), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'refresh', array('entity' => $entity), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'detach', array('entity' => $entity), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'merge', array('entity' => $entity), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getRepository', array('entityName' => $entityName), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'contains', array('entity' => $entity), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getEventManager', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getConfiguration', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'isOpen', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getUnitOfWork', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getProxyFactory', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'initializeObject', array('obj' => $obj), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'getFilters', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'isFiltersStateClean', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'hasFilters', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return $this->valueHolder2b562->hasFilters();
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

        $instance->initializer55351 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2b562) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2b562 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2b562->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, '__get', ['name' => $name], $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        if (isset(self::$publicProperties29520[$name])) {
            return $this->valueHolder2b562->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b562;

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

        $targetObject = $this->valueHolder2b562;
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
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b562;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2b562;
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
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, '__isset', array('name' => $name), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b562;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2b562;
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
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, '__unset', array('name' => $name), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b562;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2b562;
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
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, '__clone', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        $this->valueHolder2b562 = clone $this->valueHolder2b562;
    }

    public function __sleep()
    {
        $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, '__sleep', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;

        return array('valueHolder2b562');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55351 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55351;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55351 && ($this->initializer55351->__invoke($valueHolder2b562, $this, 'initializeProxy', array(), $this->initializer55351) || 1) && $this->valueHolder2b562 = $valueHolder2b562;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2b562;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2b562;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
