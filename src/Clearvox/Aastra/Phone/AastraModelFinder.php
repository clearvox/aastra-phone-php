<?php
namespace Clearvox\Aastra\Phone;

class AastraModelFinder
{
    private $registeredModels = array(
        // 673X
        'Aastra6730i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6730i',
        'Aastra6731i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6731i',
        'Aastra6735i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6735i',
        'Aastra6739i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6739i',
        // 675X
        'Aastra6755i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6755i',
        'Aastra6757i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6757i',
        // 68XX
        'Aastra6863i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6863i',
        'Aastra6865i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6865i',
        'Aastra6867i' => 'Clearvox\\Aastra\\Phone\\Model\\Aastra6867i'
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