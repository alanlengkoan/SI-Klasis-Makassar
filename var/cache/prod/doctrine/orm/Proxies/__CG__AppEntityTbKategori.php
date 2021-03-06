<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TbKategori extends \App\Entity\TbKategori implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TbKategori' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TbKategori' . "\0" . 'id_kategori', '' . "\0" . 'App\\Entity\\TbKategori' . "\0" . 'nama', '' . "\0" . 'App\\Entity\\TbKategori' . "\0" . 'ins', '' . "\0" . 'App\\Entity\\TbKategori' . "\0" . 'upd'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TbKategori' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TbKategori' . "\0" . 'id_kategori', '' . "\0" . 'App\\Entity\\TbKategori' . "\0" . 'nama', '' . "\0" . 'App\\Entity\\TbKategori' . "\0" . 'ins', '' . "\0" . 'App\\Entity\\TbKategori' . "\0" . 'upd'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TbKategori $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdKategori(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdKategori', []);

        return parent::getIdKategori();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdKategori(?int $id_kategori): \App\Entity\TbKategori
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdKategori', [$id_kategori]);

        return parent::setIdKategori($id_kategori);
    }

    /**
     * {@inheritDoc}
     */
    public function getNama(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNama', []);

        return parent::getNama();
    }

    /**
     * {@inheritDoc}
     */
    public function setNama(?string $nama): \App\Entity\TbKategori
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNama', [$nama]);

        return parent::setNama($nama);
    }

    /**
     * {@inheritDoc}
     */
    public function getIns(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIns', []);

        return parent::getIns();
    }

    /**
     * {@inheritDoc}
     */
    public function setIns(?\DateTimeInterface $ins): \App\Entity\TbKategori
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIns', [$ins]);

        return parent::setIns($ins);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpd(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpd', []);

        return parent::getUpd();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpd(?\DateTimeInterface $upd): \App\Entity\TbKategori
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpd', [$upd]);

        return parent::setUpd($upd);
    }

}
