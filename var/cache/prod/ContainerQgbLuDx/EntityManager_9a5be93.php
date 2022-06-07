<?php

namespace ContainerQgbLuDx;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder1d911 = null;
    private $initializerc255a = null;
    private static $publicPropertiescda08 = [
        
    ];
    public function getConnection()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getConnection', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getMetadataFactory', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getExpressionBuilder', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'beginTransaction', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getCache', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'transactional', array('func' => $func), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'commit', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->commit();
    }
    public function rollback()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'rollback', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getClassMetadata', array('className' => $className), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'createQuery', array('dql' => $dql), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'createNamedQuery', array('name' => $name), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'createQueryBuilder', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'flush', array('entity' => $entity), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'clear', array('entityName' => $entityName), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->clear($entityName);
    }
    public function close()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'close', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->close();
    }
    public function persist($entity)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'persist', array('entity' => $entity), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'remove', array('entity' => $entity), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'refresh', array('entity' => $entity), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'detach', array('entity' => $entity), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'merge', array('entity' => $entity), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'contains', array('entity' => $entity), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getEventManager', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getConfiguration', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'isOpen', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getUnitOfWork', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getProxyFactory', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'initializeObject', array('obj' => $obj), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'getFilters', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'isFiltersStateClean', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'hasFilters', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return $this->valueHolder1d911->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc255a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder1d911) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1d911 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder1d911->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, '__get', ['name' => $name], $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        if (isset(self::$publicPropertiescda08[$name])) {
            return $this->valueHolder1d911->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d911;
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
        $targetObject = $this->valueHolder1d911;
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
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d911;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder1d911;
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
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, '__isset', array('name' => $name), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d911;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder1d911;
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
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, '__unset', array('name' => $name), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1d911;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder1d911;
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
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, '__clone', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        $this->valueHolder1d911 = clone $this->valueHolder1d911;
    }
    public function __sleep()
    {
        $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, '__sleep', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
        return array('valueHolder1d911');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc255a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc255a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc255a && ($this->initializerc255a->__invoke($valueHolder1d911, $this, 'initializeProxy', array(), $this->initializerc255a) || 1) && $this->valueHolder1d911 = $valueHolder1d911;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1d911;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1d911;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
