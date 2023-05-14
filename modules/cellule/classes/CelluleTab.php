<?php
class CelluleTab extends ObjectModel
{
    public $id_cellule;
    public $id_configuration;
    public $nom;
    public $adresse;
    public $description;
    public $email;
    public $telephone;
    public $Imm_fiscale;
    public $logo;
    public $piece_joindre;
    public $valid;
    public $active=true;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = [
        'table' => 'cellule',
        'primary' => 'id_cellule',
        'multilang' => true,
        'fields' => [
            'id_configuration' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true],
            'nom' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 255],
            'adresse' => ['type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'required' => true, 'size' => 255],
            'description' => ['type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 65535],
            'email' => ['type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => true, 'size' => 255],
            'telephone' => ['type' => self::TYPE_STRING, 'validate' => 'isPhoneNumber', 'required' => true, 'size' => 255],
            'logo' => ['type' => self::TYPE_STRING],
            'valid' => ['type' => self::TYPE_BOOL],
        ],
    ];

    public function getListeCellules()
    {
        $sql = 'SELECT * FROM `'._DB_PREFIX_.'cellule`';
        $cellules = Db::getInstance()->executeS($sql);
        return $cellules;
    }

    public function getListeCelluleById()
   {
    $id_cellule=Tools::getValue('id_cellule');
      $sql=new DbQuery();
      $sql->select('*')
      ->from($this->table )
      ->where('id_cellule= '. $id_cellule);
      $cellules=Db::getInstance()->executeS($sql);
      return  $cellules;
   }
}