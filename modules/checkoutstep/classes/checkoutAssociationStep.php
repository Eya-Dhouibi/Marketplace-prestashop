<?php

use Symfony\Component\Translation\TranslatorInterface;

class checkoutAssociationStep extends AbstractCheckoutStep
{
    /** @var checkoutstep */
    protected $module;

    /** @var array */
    protected $cellules;

    protected $selectedAssociation; // Nouvelle variable pour stocker l'association sélectionnée

    public function __construct(Context $context, TranslatorInterface $translator)
    {
        parent::__construct($context, $translator);
        $this->setTitle('Choisir une association');
    }

    /**
     * @param array $cellules
     */
    public function setCellules(array $cellules)
    {
        $this->cellules = $cellules;
    }

    /**
     * Récupération des données à persister
     *
     * @return array
     */
    public function getDataToPersist()
    {
        return array(
            'selected_association' => $this->selectedAssociation, // Ajout de l'association sélectionnée
        );
    }

    /**
     * Restoration des données persistées de la step
     *
     * @param array $data
     * @return $this|AbstractCheckoutStep
     */
    public function restorePersistedData(array $data)
    {
        if (array_key_exists('selected_association', $data)) {
            $this->selectedAssociation = $data['selected_association'];
        }

        return $this;
    }

    /**
     * Traitement de la requête (ie = Variables Posts du checkout)
     * @param array $requestParameters
     * @return $this
     */
    public function handleRequest(array $requestParameters = array())
    {
        // Si les informations sont postées, assignation des valeurs
        if (isset($requestParameters['confirmDeliveryOption'])) {
            $selectedOption = $requestParameters['confirmDeliveryOption'];
            // Vérifier si l'option sélectionnée correspond à une association valide
            foreach ($this->cellules as $cellule) {
                if ($cellule['valid'] == 1 && $cellule['nom'] == $selectedOption) {
                    $this->selectedAssociation = $selectedOption;
                    break;
                }
            }

            // Passage à l'étape suivante si une association valide est sélectionnée
            if (!empty($this->selectedAssociation)) {
                $this->setComplete(true);
                if (version_compare(_PS_VERSION_, '1.7.6') > 0) {
                    $this->setNextStepAsCurrent();
                } else {
                    $this->setCurrent(false);
                }
            }
        }

        return $this;
    }

    /**
     * Affichage de la step
     *
     * @param array $extraParams
     * @return string
     */
    public function render(array $extraParams = [])
    {
    // Assignation des informations d'affichage
    $defaultParams = array(
        // Informations nécessaires
        'identifier' => 'test',
        'position' => 5, // La position n'est qu'indicative ...
        'title' => $this->getTitle(),
        'step_is_complete' => (int)$this->isComplete(),
        'step_is_reachable' => (int)$this->isReachable(),
        'step_is_current' => (int)$this->isCurrent(),
        'cellules' => $this->cellules,
    );
    
    $defaultParams = array_merge($defaultParams, $extraParams);

    $this->context->smarty->assign($defaultParams);
    $templatePath = _PS_MODULE_DIR_ . 'checkoutstep/views/templates/front/customCheckoutStep.tpl';
    $templateContent = $this->context->smarty->fetch($templatePath);

    return $templateContent;
  }
}