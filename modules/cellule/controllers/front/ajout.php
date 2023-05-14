<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class CelluleAjoutModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        parent::initContent();
        if (Tools::isSubmit('add_cellule')) {
            $this->processAddCellule();
        }
        
      $this->setTemplate('module:cellule/views/templates/front/addCellule.tpl');
    }
    
    public function processAddCellule()
    {
        // Récupération des valeurs de chaque champ
        $nom = Tools::getValue('nom');
        $adresse = Tools::getValue('adresse');
        $description = Tools::getValue('description');
        $email = Tools::getValue('email');
        $telephone = Tools::getValue('telephone');
        $imm_fiscale = Tools::getValue('imm_fiscale');

        $logo = '';
        if (isset($_FILES['logo']) && !empty($_FILES['logo']['name'])) {
            $logo_name = uniqid().'.'.pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
            $logo_path ='img/cellule_logo/' . $logo_name;
            move_uploaded_file($_FILES['logo']['tmp_name'], $logo_path);
            $logo = $logo_name;
        }

        $piece_joindre = '';
        if (isset($_FILES['piece_joindre']) && !empty($_FILES['piece_joindre']['name'])) {
            $piece_joindre_name = uniqid().'.'.pathinfo($_FILES['piece_joindre']['name'], PATHINFO_EXTENSION);
            $piece_joindre_path ='img/cellule_piece_joindre/' . $piece_joindre_name;
            move_uploaded_file($_FILES['piece_joindre']['tmp_name'], $piece_joindre_path);
            $piece_joindre = $piece_joindre_name;
        }

        $sql = 'INSERT INTO `'._DB_PREFIX_.'cellule`
            (`nom`, `adresse`, `description`, `email`, `telephone`, `Imm_fiscale`, `logo`, `piece_joindre`)
            VALUES ("'.pSQL($nom).'", "'.pSQL($adresse).'", "'.pSQL($description).'",
              "'.pSQL($email).'", "'.pSQL($telephone).'", "'.pSQL($imm_fiscale).'",
              "'.pSQL($logo).'","'.pSQL($piece_joindre).'")';

              $res=Db::getInstance()->execute($sql);
             if($res){
              $message = 'Votre inscription à été ajoutée avec succès un email de 
              confirmation sera envoyer';
             }else{
              $message = 'Erreur lors de l\'inscription';
              }
             $this->context->smarty->assign('message', $message);
             $this->context->smarty->assign('res', $res);
     }   
}
