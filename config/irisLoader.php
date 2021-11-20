<?php

use function PHPSTORM_META\type;

/**
 * Un chargeur de classes basé sur le SplClassLoader
 * 
 * @author Geoffre Yorick
 * @author Vincent Clergue
 */
final class IrisLoader
{
    private $_typeFichier = ".php";
    private $_espaceDeNoms;
    private $_cheminInclusion;
    private $_SeparateurEspaceDeNoms = "\\";

    /**
     * Creation d'un <tt>IrisLoader</tt> qui charge les classes
     * présentes dans l'espace de noms donné
     * 
     * @param string $ns l'espace de noms à utiliser
     */
    public function __construct(string $ns = null, string $cheminInclusion = null)
    {
        $this->_espaceDeNoms = $ns;
        $this->_cheminInclusion = $cheminInclusion;
    }

    /**
     * Change le string qui sert à séparer les espaces de noms
     * 
     * @param string $sep le séparateur à utiliser (string)
     */
    public function setNamespaceSeparator(string $sep)
    {
        $this->_namespaceSeparator = $sep;
    }

    /**
     * Récupère le séparateur utilisé par les classes de l'espace de noms
     * de ce chargeur de classes
     * 
     * @return _namespaceSeparator le séparateur utilisé (string)
     */
    public function getNamespaceSeparator()
    {
        if($this->_namespaceSeparator is string){
            throw new Exception("Erreur, le séparateur est du type: ".str(type($this->_namespaceSeparator)));
        }
        return $this->_namespaceSeparator;
    }


}
?>