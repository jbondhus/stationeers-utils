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
        'DiodeSlideSaveData' => Thing\DiodeSlide::class,
        'DoorSaveData' => Thing\Door::class,
        'DynamicGasCanisterSaveData' => Thing\DynamicGasCanister::class,
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
        'MagazineSaveData' => Thing\Magazine::class,
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

        $this->doc = simplexml_load_string($this->xml);
    }

    public function get_pipe_networks()
    {
        $networks = $this->doc->PipeNetworks->NetworkId;

        $network_ids = [];

        foreach ($networks as $network)
        {
            $network_ids[] = (string)$network;
        }

        return $network_ids;
    }

    public function get_cable_networks()
    {
        $networks = $this->doc->CableNetworks->NetworkId;

        $network_ids = [];

        foreach ($networks as $network)
        {
            $network_ids[] = (string)$network;
        }

        return $network_ids;
    }

    public function get_things()
    {
        $things = [];

        foreach ($this->doc->Things->ThingSaveData as $thing_element)
        {
            $type = (string)$thing_element->attributes('xsi', true)->type;

            /**
             * @var Thing $class
             */
            $class = self::THING_MAPPINGS[$type];

            /**
             * @var Thing $thing
             */
            $thing = new $class($thing_element);

            $things[$thing->get_reference_id()] = $thing;
        }

        return $things;
    }


    public function get_atmospheres()
    {
        $atmospheres = [];

        foreach ($this->doc->Atmospheres->AtmosphereSaveData as $atmosphere_element)
        {
            $atmospheres[] = new Atmosphere($atmosphere_element);
        }

        return $atmospheres;
    }
}