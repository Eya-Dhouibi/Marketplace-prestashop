  $res=Db::getInstance()->execute($sql);
             if($res){
               $message = 'Votre inscription à été ajoutée avec succès un email de 
             confirmation sera envoyer';
            }else{
             $message = 'Erreur lors de l\'inscription';
              }
            $this->context->smarty->assign('message', $message);
            $this->context->smarty->assign('res', $res);