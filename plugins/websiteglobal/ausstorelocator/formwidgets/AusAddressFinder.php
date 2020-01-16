<?php namespace WebsiteGlobal\AusStoreLocator\FormWidgets;

use Html;
use Backend\Classes\FormWidgetBase;
use Illuminate\Support\Facades\Config;

/**
 * Address finder
 * Renders a Google Place address field.
 *
 * Usage:
 *
 *   address:
 *       label: Address
 *       type: addressfinder
 *       countryRestriction: 'us,ch'
 *       fieldMap:
 *           latitude: latitude
 *           longitude: longitude
 *           city: city
 *           postcode: postcode
 *
 * @package rainlab\location
 * @author Website Global
 */
class AusAddressFinder extends FormWidgetBase
{
    /**
     * {@inheritDoc}
     */
    public $defaultAlias = 'ausaddressfinder';

    protected $fieldMap;
    protected $countryRestriction;

    /**
     * {@inheritDoc}
     */
    public function init()
    {
        $this->fieldMap = $this->getConfig('fieldMap', []);
        $this->countryRestriction = $this->getConfig('countryRestriction', '');
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();

        return $this->makePartial('ausaddressfinder');
    }

    /**
     * Prepares the list data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['field'] = $this->formField;
    }

    public function getFieldMapAttributes()
    {
        $widget = $this->controller->formGetWidget();
        $fields = $widget->getFields();
        $result = [];

        foreach ($this->fieldMap as $map => $fieldName) {
            if (!$field = array_get($fields, $fieldName)) {
                continue;
            }

            $result['data-input-'.$map] = '#'.$field->getId();
        }

        return Html::attributes($result);
    }

    public function getCountryRestriction()
    {
        return $this->countryRestriction;
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        $apiKey = Config::get('websiteglobal.ausstorelocator::googleMapsKey');
        $this->addJs('//maps.googleapis.com/maps/api/js?libraries=places&key='.$apiKey);
        $this->addJs('js/location-autocomplete.js', 'core');
    }
}
