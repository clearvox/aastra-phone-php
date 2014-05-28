<?php
namespace Clearvox\Aastra\Phone;

class AastraModelFinder
{
    private $registeredModels = array(
        'Aastra6863i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6863i',
        'Aastra6865i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6865i',
    );

    /**
     * Register a specific full namespaced class to a string reference
     * of the Aastra phone (often found from the User-Agent).
     *
     * Don't pass in a fresh instance, instead pass in a string reference
     * to make that class.
     *
     * @param string $modelName
     * @param string $aastraPhone
     * @return $this
     */
    public function registerModel($modelName, $aastraPhone)
    {
        $this->registeredModels[$modelName] = $aastraPhone;
        return $this;
    }

    /**
     * Find the specific instance of the Aastra class for the passed in
     * name.
     *
     * @param string $name
     * @return Model|AastraModelInterface
     * @throws Exception|InvalidModelNameException
     */
    public function getModel($name)
    {
        if ( ! array_key_exists($name, $this->registeredModels)) {
            throw Exception\InvalidModelNameException($name);
        }

        return new $this->registeredModels[$name];
    }
}