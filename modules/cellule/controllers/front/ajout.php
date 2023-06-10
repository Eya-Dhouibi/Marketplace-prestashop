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
        // Get the values from the form fields
        $nom = Tools::getValue('nom');
        $adresse = Tools::getValue('adresse');
        $description = Tools::getValue('description');
        $email = Tools::getValue('email');
        $telephone = Tools::getValue('telephone');
        $imm_fiscale = Tools::getValue('imm_fiscale');

        // Process the uploaded logo file, if any
        $logo = '';
        if (isset($_FILES['logo']) && !empty($_FILES['logo']['name'])) {
            $logo_name = uniqid().'.'.pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
            $logo_path = 'img/cellule_logo/' . $logo_name;
            move_uploaded_file($_FILES['logo']['tmp_name'], _PS_ROOT_DIR_.'/'.$logo_path);
            $logo = $logo_name;
        }

        // Process the uploaded piece_joindre file, if any
        $piece_joindre = '';
        if (isset($_FILES['piece_joindre']) && !empty($_FILES['piece_joindre']['name'])) {
            $piece_joindre_name = uniqid().'.'.pathinfo($_FILES['piece_joindre']['name'], PATHINFO_EXTENSION);
            $piece_joindre_path = 'img/cellule_piece_joindre/' . $piece_joindre_name;
            move_uploaded_file($_FILES['piece_joindre']['tmp_name'], _PS_ROOT_DIR_.'/'.$piece_joindre_path);
            $piece_joindre = $piece_joindre_name;
        }

        // Build the SQL query to insert the data into the database table
        $sql = 'INSERT INTO `'._DB_PREFIX_.'cellule`
            (`nom`, `adresse`, `description`, `email`, `telephone`, `Imm_fiscale`, `logo`, `piece_joindre`)
            VALUES ("'.pSQL($nom).'", "'.pSQL($adresse).'", "'.pSQL($description).'",
              "'.pSQL($email).'", "'.pSQL($telephone).'", "'.pSQL($imm_fiscale).'",
              "'.pSQL($logo).'","'.pSQL($piece_joindre).'")';

           $res= Db::getInstance()->execute($sql);

            // Envoyer un e-mail à chaque association
                $mail =Mail::Send(
                    (int)(Configuration::get('PS_LANG_DEFAULT')), 
                    'confirm', 
                    ' Module Installation', 
                    array(
                    $email => Configuration::get('PS_SHOP_EMAIL'), 
                    ),
                    Configuration::get('PS_SHOP_EMAIL'), 
                    NULL, 
                    NULL, 
                    NULL,  
                    NULL, 
                    NULL, 
                    _PS_MODULE_DIR_ . 'cellule/mails' 
                );

               var_dump($mail);

           if (!empty($mails)) {
            // Au moins un e-mail a été envoyé avec succès
            $message = 'Votre inscription a été ajoutée avec succès. Un e-mail de confirmation a été envoyé à chaque association.';
           } else {
            // Aucun e-mail n'a été envoyé
            $message = 'Votre inscription a été ajoutée avec succès, mais une erreur s\'est produite lors de l\'envoi des e-mails.';
          }

        $this->context->smarty->assign('message', $message);
        $this->context->smarty->assign('res', $res);
    }
}

