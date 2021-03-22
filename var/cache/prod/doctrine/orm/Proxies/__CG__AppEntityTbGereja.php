<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TbGereja extends \App\Entity\TbGereja implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'id_gereja', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'tentang', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'twitter', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'instagram', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'facebook', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'youtube', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'lat', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'lon', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'ins', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'upd'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'id_gereja', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'tentang', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'twitter', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'instagram', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'facebook', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'youtube', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'lat', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'lon', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'ins', '' . "\0" . 'App\\Entity\\TbGereja' . "\0" . 'upd'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TbGereja $proxy) {
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
    public function getIdGereja(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdGereja', []);

        return parent::getIdGereja();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdGereja(?int $id_gereja): \App\Entity\TbGereja
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdGereja', [$id_gereja]);

        return parent::setIdGereja($id_gereja);
    }

    /**
     * {@inheritDoc}
     */
    public function getTentang(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTentang', []);

        return parent::getTentang();
    }

    /**
     * {@inheritDoc}
     */
    public function setTentang(?string $tentang): \App\Entity\TbGereja
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTentang', [$tentang]);

        return parent::setTentang($tentang);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitter(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitter', []);

        return parent::getTwitter();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitter(?string $twitter): \App\Entity\TbGereja
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitter', [$twitter]);

        return parent::setTwitter($twitter);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstagram(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstagram', []);

        return parent::getInstagram();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstagram(?string $instagram): \App\Entity\TbGereja
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstagram', [$instagram]);

        return parent::setInstagram($instagram);
    }

    /**
     * {@inheritDoc}
     */
    public function getFacebook(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFacebook', []);

        return parent::getFacebook();
    }

    /**
     * {@inheritDoc}
     */
    public function setFacebook(?string $facebook): \App\Entity\TbGereja
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFacebook', [$facebook]);

        return parent::setFacebook($facebook);
    }

    /**
     * {@inheritDoc}
     */
    public function getYoutube(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYoutube', []);

        return parent::getYoutube();
    }

    /**
     * {@inheritDoc}
     */
    public function setYoutube(?string $youtube): \App\Entity\TbGereja
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYoutube', [$youtube]);

        return parent::setYoutube($youtube);
    }

    /**
     * {@inheritDoc}
     */
    public function getLat(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLat', []);

        return parent::getLat();
    }

    /**
     * {@inheritDoc}
     */
    public function setLat(?float $lat): \App\Entity\TbGereja
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLat', [$lat]);

        return parent::setLat($lat);
    }

    /**
     * {@inheritDoc}
     */
    public function getLon(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLon', []);

        return parent::getLon();
    }

    /**
     * {@inheritDoc}
     */
    public function setLon(?float $lon): \App\Entity\TbGereja
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLon', [$lon]);

        return parent::setLon($lon);
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
    public function setIns(?\DateTimeInterface $ins): \App\Entity\TbGereja
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
    public function setUpd(?\DateTimeInterface $upd): \App\Entity\TbGereja
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpd', [$upd]);

        return parent::setUpd($upd);
    }

}
