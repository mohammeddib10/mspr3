<?php

namespace ContainerO4xDgOB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2ddee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7d843 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesab04c = [
        
    ];

    public function getConnection()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getConnection', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getMetadataFactory', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getExpressionBuilder', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'beginTransaction', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getCache', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'transactional', array('func' => $func), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->transactional($func);
    }

    public function commit()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'commit', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->commit();
    }

    public function rollback()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'rollback', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getClassMetadata', array('className' => $className), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'createQuery', array('dql' => $dql), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'createNamedQuery', array('name' => $name), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'createQueryBuilder', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'flush', array('entity' => $entity), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'clear', array('entityName' => $entityName), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->clear($entityName);
    }

    public function close()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'close', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->close();
    }

    public function persist($entity)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'persist', array('entity' => $entity), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'remove', array('entity' => $entity), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'refresh', array('entity' => $entity), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'detach', array('entity' => $entity), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'merge', array('entity' => $entity), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'contains', array('entity' => $entity), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getEventManager', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getConfiguration', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'isOpen', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getUnitOfWork', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getProxyFactory', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'initializeObject', array('obj' => $obj), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'getFilters', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'isFiltersStateClean', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'hasFilters', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return $this->valueHolder2ddee->hasFilters();
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

        $instance->initializer7d843 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2ddee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2ddee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2ddee->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, '__get', ['name' => $name], $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        if (isset(self::$publicPropertiesab04c[$name])) {
            return $this->valueHolder2ddee->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ddee;

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

        $targetObject = $this->valueHolder2ddee;
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
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ddee;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2ddee;
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
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, '__isset', array('name' => $name), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ddee;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2ddee;
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
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, '__unset', array('name' => $name), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2ddee;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2ddee;
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
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, '__clone', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        $this->valueHolder2ddee = clone $this->valueHolder2ddee;
    }

    public function __sleep()
    {
        $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, '__sleep', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;

        return array('valueHolder2ddee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7d843 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7d843;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7d843 && ($this->initializer7d843->__invoke($valueHolder2ddee, $this, 'initializeProxy', array(), $this->initializer7d843) || 1) && $this->valueHolder2ddee = $valueHolder2ddee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2ddee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2ddee;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
