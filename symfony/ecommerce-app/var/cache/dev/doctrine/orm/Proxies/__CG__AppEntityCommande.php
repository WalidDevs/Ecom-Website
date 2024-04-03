<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Commande extends \App\Entity\Commande implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'datecommande', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'utilisateur', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'produits', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'lignecommands', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'paiment', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'etat'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'datecommande', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'utilisateur', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'produits', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'lignecommands', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'paiment', '' . "\0" . 'App\\Entity\\Commande' . "\0" . 'etat'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Commande $proxy) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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
    public function getDatecommande(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatecommande', []);

        return parent::getDatecommande();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatecommande(\DateTimeInterface $datecommande): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatecommande', [$datecommande]);

        return parent::setDatecommande($datecommande);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateur(): ?\App\Entity\utilisateur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateur', []);

        return parent::getUtilisateur();
    }

    /**
     * {@inheritDoc}
     */
    public function setUtilisateur(?\App\Entity\utilisateur $utilisateur): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUtilisateur', [$utilisateur]);

        return parent::setUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduits(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduits', []);

        return parent::getProduits();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduit(\App\Entity\Produit $produit): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduit', [$produit]);

        return parent::addProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduit(\App\Entity\Produit $produit): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduit', [$produit]);

        return parent::removeProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function getLignecommands(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLignecommands', []);

        return parent::getLignecommands();
    }

    /**
     * {@inheritDoc}
     */
    public function addLignecommand(\App\Entity\Lignecommand $lignecommand): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLignecommand', [$lignecommand]);

        return parent::addLignecommand($lignecommand);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLignecommand(\App\Entity\Lignecommand $lignecommand): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLignecommand', [$lignecommand]);

        return parent::removeLignecommand($lignecommand);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaiment(): ?\App\Entity\Paiment
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaiment', []);

        return parent::getPaiment();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaiment(?\App\Entity\Paiment $paiment): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaiment', [$paiment]);

        return parent::setPaiment($paiment);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat(string $etat): \App\Entity\Commande
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

}
