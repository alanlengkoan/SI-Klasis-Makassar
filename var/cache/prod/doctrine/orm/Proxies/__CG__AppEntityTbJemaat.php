<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TbJemaat extends \App\Entity\TbJemaat implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'id_jemaat', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'id_gereja', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'nik', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'nama', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'tmp_lahir', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'tgl_lahir', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'jen_kel', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'alamat', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'pekerjaan', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'no_telpon', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'status', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'ins', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'upd'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'id', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'id_jemaat', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'id_gereja', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'nik', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'nama', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'tmp_lahir', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'tgl_lahir', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'jen_kel', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'alamat', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'pekerjaan', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'no_telpon', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'status', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'ins', '' . "\0" . 'App\\Entity\\TbJemaat' . "\0" . 'upd'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TbJemaat $proxy) {
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
    public function getIdJemaat(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdJemaat', []);

        return parent::getIdJemaat();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdJemaat(?int $id_jemaat): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdJemaat', [$id_jemaat]);

        return parent::setIdJemaat($id_jemaat);
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
    public function setIdGereja(?int $id_gereja): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdGereja', [$id_gereja]);

        return parent::setIdGereja($id_gereja);
    }

    /**
     * {@inheritDoc}
     */
    public function getNik(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNik', []);

        return parent::getNik();
    }

    /**
     * {@inheritDoc}
     */
    public function setNik(?string $nik): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNik', [$nik]);

        return parent::setNik($nik);
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
    public function setNama(?string $nama): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNama', [$nama]);

        return parent::setNama($nama);
    }

    /**
     * {@inheritDoc}
     */
    public function getTmpLahir(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTmpLahir', []);

        return parent::getTmpLahir();
    }

    /**
     * {@inheritDoc}
     */
    public function setTmpLahir(?string $tmp_lahir): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTmpLahir', [$tmp_lahir]);

        return parent::setTmpLahir($tmp_lahir);
    }

    /**
     * {@inheritDoc}
     */
    public function getTglLahir(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTglLahir', []);

        return parent::getTglLahir();
    }

    /**
     * {@inheritDoc}
     */
    public function setTglLahir(?\DateTimeInterface $tgl_lahir): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTglLahir', [$tgl_lahir]);

        return parent::setTglLahir($tgl_lahir);
    }

    /**
     * {@inheritDoc}
     */
    public function getJenKel(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJenKel', []);

        return parent::getJenKel();
    }

    /**
     * {@inheritDoc}
     */
    public function setJenKel(?string $jen_kel): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJenKel', [$jen_kel]);

        return parent::setJenKel($jen_kel);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlamat(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlamat', []);

        return parent::getAlamat();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlamat(?string $alamat): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlamat', [$alamat]);

        return parent::setAlamat($alamat);
    }

    /**
     * {@inheritDoc}
     */
    public function getPekerjaan(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPekerjaan', []);

        return parent::getPekerjaan();
    }

    /**
     * {@inheritDoc}
     */
    public function setPekerjaan(?string $pekerjaan): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPekerjaan', [$pekerjaan]);

        return parent::setPekerjaan($pekerjaan);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoTelpon(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoTelpon', []);

        return parent::getNoTelpon();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoTelpon(?string $no_telpon): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoTelpon', [$no_telpon]);

        return parent::setNoTelpon($no_telpon);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(?string $status): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
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
    public function setIns(?\DateTimeInterface $ins): \App\Entity\TbJemaat
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
    public function setUpd(?\DateTimeInterface $upd): \App\Entity\TbJemaat
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpd', [$upd]);

        return parent::setUpd($upd);
    }

}
