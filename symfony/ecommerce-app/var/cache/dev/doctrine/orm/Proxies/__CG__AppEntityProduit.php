<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Produit extends \App\Entity\Produit implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'utilisateurs', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'command', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'cmd'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'utilisateurs', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'command', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'categorie', '' . "\0" . 'App\\Entity\\Produit' . "\0" . 'cmd'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Produit $proxy) {
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
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(string $prix): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getUtilisateurs(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUtilisateurs', []);

        return parent::getUtilisateurs();
    }

    /**
     * {@inheritDoc}
     */
    public function addUtilisateur(\App\Entity\Utilisateur $utilisateur): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUtilisateur', [$utilisateur]);

        return parent::addUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUtilisateur(\App\Entity\Utilisateur $utilisateur): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUtilisateur', [$utilisateur]);

        return parent::removeUtilisateur($utilisateur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommand(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommand', []);

        return parent::getCommand();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommand(\App\Entity\commande $command): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommand', [$command]);

        return parent::addCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommand(\App\Entity\commande $command): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommand', [$command]);

        return parent::removeCommand($command);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategorie(): ?\App\Entity\Categorie
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategorie', []);

        return parent::getCategorie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategorie(?\App\Entity\Categorie $categorie): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategorie', [$categorie]);

        return parent::setCategorie($categorie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCmd(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCmd', []);

        return parent::getCmd();
    }

    /**
     * {@inheritDoc}
     */
    public function addCmd(\App\Entity\lignecommand $cmd): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCmd', [$cmd]);

        return parent::addCmd($cmd);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCmd(\App\Entity\lignecommand $cmd): \App\Entity\Produit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCmd', [$cmd]);

        return parent::removeCmd($cmd);
    }

}
