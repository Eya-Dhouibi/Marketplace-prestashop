<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.form.admin.sell.customer.customer' shared service.

return $this->services['prestashop.bundle.form.admin.sell.customer.customer'] = new \PrestaShopBundle\Form\Admin\Sell\Customer\CustomerType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getLanguages(), ${($_ = isset($this->services['prestashop.adapter.form.choice_provider.gender_by_id_choice_provider']) ? $this->services['prestashop.adapter.form.choice_provider.gender_by_id_choice_provider'] : ($this->services['prestashop.adapter.form.choice_provider.gender_by_id_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\GenderByIdChoiceProvider())) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.adapter.form.choice_provider.group_by_id_choice_provider']) ? $this->services['prestashop.adapter.form.choice_provider.group_by_id_choice_provider'] : $this->load('getPrestashop_Adapter_Form_ChoiceProvider_GroupByIdChoiceProviderService.php')) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.adapter.form.choice_provider.risk_by_id_choice_provider']) ? $this->services['prestashop.adapter.form.choice_provider.risk_by_id_choice_provider'] : ($this->services['prestashop.adapter.form.choice_provider.risk_by_id_choice_provider'] = new \PrestaShop\PrestaShop\Adapter\Form\ChoiceProvider\RiskByIdChoiceProvider())) && false ?: '_'}->getChoices(), ${($_ = isset($this->services['prestashop.core.b2b.b2b_feature']) ? $this->services['prestashop.core.b2b.b2b_feature'] : $this->load('getPrestashop_Core_B2b_B2bFeatureService.php')) && false ?: '_'}->isActive(), ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("PS_CUSTOMER_OPTIN"));
