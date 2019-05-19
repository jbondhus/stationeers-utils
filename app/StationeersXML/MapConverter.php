<?php


namespace App\StationeersXML;


use DOMElement;
use FluidXml\FluidXml;

class MapConverter
{
    public const THING_MAPPINGS = [
        'ActiveVentSaveData' => Thing\ActiveVent::class,
        'AdvAirlockControldSaveData' => Thing\AdvancedAirlockControl::class,
        'AirConditionerSaveData' => Thing\AirConditioner::class,
        'BasketBaseSaveData' => Thing\BasketBase::class,
        'BatteryCellSaveData' => Thing\BatteryCell::class,
        'BatterySaveData' => Thing\Battery::class,
        'BrainSaveData' => Thing\Brain::class,
        'CableSaveSaveData' => Thing\Cable::class,
        'ChuteSaveData' => Thing\Chute::class,
        'CircuitboardSaveData' => Thing\CircuitBoard::class,
        'CircuitHousingSaveData' => Thing\CircuitHousing::class,
        'ConsumableSaveData' => Thing\Consumable::class,
        'DeviceAtmosphericSaveData' => Thing\DeviceAtmospheric::class,
        'DeviceImportExportSaveData' => Thing\DeviceImportExport::class,
        'DeviceImportSaveData' => Thing\DeviceImport::class,
        'DeviceInputOutputImportExportSaveData' => Thing\DeviceInputOutputImportExport::class,
        'DoorSaveData' => Thing\Door::class,
        'DynamicThingSaveData' => Thing\DynamicThing::class,
        'ElevatorCarrageSaveData' => Thing\ElevatorCarrage::class,
        'FabricatorSaveData' => Thing\Fabricator::class,
        'FertilizedEggSaveData' => Thing\FertilizedEgg::class,
        'FurnaceSaveData' => Thing\Furnace::class,
        'GasMaskSaveData' => Thing\GasMask::class,
        'HumanSaveData' => Thing\Human::class,
        'JetpackSaveData' => Thing\Jetpack::class,
        'LogicBaseSaveData' => Thing\LogicBase::class,
        'LogicBatchReaderSaveData' => Thing\LogicBatchReader::class,
        'LogicBatchSlotReaderSaveData' => Thing\LogicBatchSlotReader::class,
        'LogicBatchWriterSaveData' => Thing\LogicBatchWriter::class,
        'LogicMathSaveData' => Thing\LogicMath::class,
        'LogicReaderSaveData' => Thing\LogicReader::class,
        'LogicSlotReaderSaveData' => Thing\LogicSlotReader::class,
        'LogicWriterSaveData' => Thing\LogicWriter::class,
        'MachineSaveData' => Thing\Machine::class,
        'MultiMotherboardSaveData' => Thing\MultiMotherboard::class,
        'PipeSaveData' => Thing\Pipe::class,
        'PlantSaveData' => Thing\Plant::class,
        'ProgrammableChipMotherboardSaveData' => Thing\ProgrammableChipMotherboard::class,
        'ProgrammableChipSaveData' => Thing\ProgrammableChip::class,
        'RoadflareSaveData' => Thing\RoadFlare::class,
        'SimpleFabricatorSaveData' => Thing\SimpleFabricator::class,
        'SlagSaveData' => Thing\Slag::class,
        'SolarPanelSaveData' => Thing\SolarPanel::class,
        'SorterMotherboardSaveData' => Thing\SorterMotherboard::class,
        'SorterSaveData' => Thing\Sorter::class,
        'StackableSaveData' => Thing\Stackable::class,
        'StackerSaveData' => Thing\Stacker::class,
        'StructureSaveData' => Thing\Structure::class,
        'SuitSaveData' => Thing\Suit::class,
        'TransformerSaveData' => Thing\Transformer::class,
        'VendingMachineSaveData' => Thing\VendingMachine::class,
    ];

    protected $xml;

    protected $doc;

    public function __construct($xml)
    {
        $this->xml = $xml;

        $this->doc = new FluidXml($xml);
    }

    public function get_pipe_networks()
    {
        $networks = $this->doc->query('/WorldData/PipeNetworks/NetworkId')->array();

        $network_ids = [];

        /**
         * @var DOMElement $network
         */
        foreach ($networks as $network)
        {
            $network_ids[] = $network->nodeValue;
        }

        return $network_ids;
    }

    public function get_cable_networks()
    {
        $networks = $this->doc->query('/WorldData/CableNetworks/NetworkId')->array();

        $network_ids = [];

        /**
         * @var DOMElement $network
         */
        foreach ($networks as $network)
        {
            $network_ids[] = $network->nodeValue;
        }

        return $network_ids;
    }

    public function get_things()
    {
        $thing_elements = $this->doc->query('/WorldData/Things/ThingSaveData')->array();

        $things = [];

        /**
         * @var DOMElement $thing_element
         */
        foreach ($thing_elements as $thing_element)
        {
            $type = $thing_element->getAttribute('xsi:type');

            /**
             * @var Thing $class
             */
            $class = self::THING_MAPPINGS[$type];

            $thing = new $class($thing_element);

            $things[] = $thing;
        }

        return $things;
    }
}