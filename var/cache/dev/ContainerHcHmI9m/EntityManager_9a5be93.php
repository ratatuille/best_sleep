<?php

namespace ContainerHcHmI9m;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder53413 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0694d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfdc55 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getConnection', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getMetadataFactory', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getExpressionBuilder', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'beginTransaction', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getCache', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'transactional', array('func' => $func), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'commit', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->commit();
    }

    public function rollback()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'rollback', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getClassMetadata', array('className' => $className), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'createQuery', array('dql' => $dql), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'createNamedQuery', array('name' => $name), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'createQueryBuilder', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'flush', array('entity' => $entity), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'clear', array('entityName' => $entityName), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->clear($entityName);
    }

    public function close()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'close', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->close();
    }

    public function persist($entity)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'persist', array('entity' => $entity), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'remove', array('entity' => $entity), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'refresh', array('entity' => $entity), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'detach', array('entity' => $entity), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'merge', array('entity' => $entity), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'contains', array('entity' => $entity), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getEventManager', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getConfiguration', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'isOpen', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getUnitOfWork', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getProxyFactory', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'initializeObject', array('obj' => $obj), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'getFilters', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'isFiltersStateClean', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'hasFilters', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return $this->valueHolder53413->hasFilters();
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

        $instance->initializer0694d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder53413) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder53413 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder53413->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, '__get', ['name' => $name], $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        if (isset(self::$publicPropertiesfdc55[$name])) {
            return $this->valueHolder53413->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53413;

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

        $targetObject = $this->valueHolder53413;
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
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53413;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder53413;
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
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, '__isset', array('name' => $name), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53413;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder53413;
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
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, '__unset', array('name' => $name), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53413;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder53413;
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
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, '__clone', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        $this->valueHolder53413 = clone $this->valueHolder53413;
    }

    public function __sleep()
    {
        $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, '__sleep', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;

        return array('valueHolder53413');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0694d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0694d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0694d && ($this->initializer0694d->__invoke($valueHolder53413, $this, 'initializeProxy', array(), $this->initializer0694d) || 1) && $this->valueHolder53413 = $valueHolder53413;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder53413;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder53413;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
