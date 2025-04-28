<?php

namespace PhpOffice\PhpSpreadsheet\Reader\Xlsx;

use PhpOffice\PhpSpreadsheet\Reader\Xlsx\Styles as StyleReader;
<<<<<<< HEAD
use PhpOffice\PhpSpreadsheet\Style\Conditional;
=======
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Conditional;
use PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting\ConditionalColorScale;
>>>>>>> match
use PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting\ConditionalDataBar;
use PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting\ConditionalFormattingRuleExtension;
use PhpOffice\PhpSpreadsheet\Style\ConditionalFormatting\ConditionalFormatValueObject;
use PhpOffice\PhpSpreadsheet\Style\Style as Style;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use SimpleXMLElement;
use stdClass;

class ConditionalStyles
{
<<<<<<< HEAD
    /** @var Worksheet */
    private $worksheet;

    /** @var SimpleXMLElement */
    private $worksheetXml;

    /**
     * @var array
     */
    private $ns;

    /** @var array */
    private $dxfs;

    public function __construct(Worksheet $workSheet, SimpleXMLElement $worksheetXml, array $dxfs = [])
=======
    private Worksheet $worksheet;

    private SimpleXMLElement $worksheetXml;

    private array $ns;

    private array $dxfs;

    private StyleReader $styleReader;

    public function __construct(Worksheet $workSheet, SimpleXMLElement $worksheetXml, array $dxfs, StyleReader $styleReader)
>>>>>>> match
    {
        $this->worksheet = $workSheet;
        $this->worksheetXml = $worksheetXml;
        $this->dxfs = $dxfs;
<<<<<<< HEAD
=======
        $this->styleReader = $styleReader;
>>>>>>> match
    }

    public function load(): void
    {
        $selectedCells = $this->worksheet->getSelectedCells();

        $this->setConditionalStyles(
            $this->worksheet,
            $this->readConditionalStyles($this->worksheetXml),
            $this->worksheetXml->extLst
        );

        $this->worksheet->setSelectedCells($selectedCells);
    }

<<<<<<< HEAD
    public function loadFromExt(StyleReader $styleReader): void
=======
    public function loadFromExt(): void
>>>>>>> match
    {
        $selectedCells = $this->worksheet->getSelectedCells();

        $this->ns = $this->worksheetXml->getNamespaces(true);
        $this->setConditionalsFromExt(
<<<<<<< HEAD
            $this->readConditionalsFromExt($this->worksheetXml->extLst, $styleReader)
=======
            $this->readConditionalsFromExt($this->worksheetXml->extLst)
>>>>>>> match
        );

        $this->worksheet->setSelectedCells($selectedCells);
    }

    private function setConditionalsFromExt(array $conditionals): void
    {
        foreach ($conditionals as $conditionalRange => $cfRules) {
            ksort($cfRules);
            // Priority is used as the key for sorting; but may not start at 0,
            // so we use array_values to reset the index after sorting.
            $this->worksheet->getStyle($conditionalRange)
                ->setConditionalStyles(array_values($cfRules));
        }
    }

<<<<<<< HEAD
    private function readConditionalsFromExt(SimpleXMLElement $extLst, StyleReader $styleReader): array
    {
        $conditionals = [];

        if (isset($extLst->ext['uri']) && (string) $extLst->ext['uri'] === '{78C0D931-6437-407d-A8EE-F0AAD7539E65}') {
            $conditionalFormattingRuleXml = $extLst->ext->children($this->ns['x14']);
=======
    private function readConditionalsFromExt(SimpleXMLElement $extLst): array
    {
        $conditionals = [];
        if (!isset($extLst->ext)) {
            return $conditionals;
        }

        foreach ($extLst->ext as $extlstcond) {
            $extAttrs = $extlstcond->attributes() ?? [];
            $extUri = (string) ($extAttrs['uri'] ?? '');
            if ($extUri !== '{78C0D931-6437-407d-A8EE-F0AAD7539E65}') {
                continue;
            }
            $conditionalFormattingRuleXml = $extlstcond->children($this->ns['x14']);
>>>>>>> match
            if (!$conditionalFormattingRuleXml->conditionalFormattings) {
                return [];
            }

            foreach ($conditionalFormattingRuleXml->children($this->ns['x14']) as $extFormattingXml) {
                $extFormattingRangeXml = $extFormattingXml->children($this->ns['xm']);
                if (!$extFormattingRangeXml->sqref) {
                    continue;
                }

                $sqref = (string) $extFormattingRangeXml->sqref;
                $extCfRuleXml = $extFormattingXml->cfRule;

                $attributes = $extCfRuleXml->attributes();
                if (!$attributes) {
                    continue;
                }
                $conditionType = (string) $attributes->type;
                if (
<<<<<<< HEAD
                    !Conditional::isValidConditionType($conditionType) ||
                    $conditionType === Conditional::CONDITION_DATABAR
=======
                    !Conditional::isValidConditionType($conditionType)
                    || $conditionType === Conditional::CONDITION_DATABAR
>>>>>>> match
                ) {
                    continue;
                }

                $priority = (int) $attributes->priority;

                $conditional = $this->readConditionalRuleFromExt($extCfRuleXml, $attributes);
<<<<<<< HEAD
                $cfStyle = $this->readStyleFromExt($extCfRuleXml, $styleReader);
=======
                $cfStyle = $this->readStyleFromExt($extCfRuleXml);
>>>>>>> match
                $conditional->setStyle($cfStyle);
                $conditionals[$sqref][$priority] = $conditional;
            }
        }

        return $conditionals;
    }

    private function readConditionalRuleFromExt(SimpleXMLElement $cfRuleXml, SimpleXMLElement $attributes): Conditional
    {
        $conditionType = (string) $attributes->type;
        $operatorType = (string) $attributes->operator;
<<<<<<< HEAD
=======
        $priority = (int) (string) $attributes->priority;
>>>>>>> match

        $operands = [];
        foreach ($cfRuleXml->children($this->ns['xm']) as $cfRuleOperandsXml) {
            $operands[] = (string) $cfRuleOperandsXml;
        }

        $conditional = new Conditional();
        $conditional->setConditionType($conditionType);
        $conditional->setOperatorType($operatorType);
<<<<<<< HEAD
        if (
            $conditionType === Conditional::CONDITION_CONTAINSTEXT ||
            $conditionType === Conditional::CONDITION_NOTCONTAINSTEXT ||
            $conditionType === Conditional::CONDITION_BEGINSWITH ||
            $conditionType === Conditional::CONDITION_ENDSWITH ||
            $conditionType === Conditional::CONDITION_TIMEPERIOD
=======
        $conditional->setPriority($priority);
        if (
            $conditionType === Conditional::CONDITION_CONTAINSTEXT
            || $conditionType === Conditional::CONDITION_NOTCONTAINSTEXT
            || $conditionType === Conditional::CONDITION_BEGINSWITH
            || $conditionType === Conditional::CONDITION_ENDSWITH
            || $conditionType === Conditional::CONDITION_TIMEPERIOD
>>>>>>> match
        ) {
            $conditional->setText(array_pop($operands) ?? '');
        }
        $conditional->setConditions($operands);

        return $conditional;
    }

<<<<<<< HEAD
    private function readStyleFromExt(SimpleXMLElement $extCfRuleXml, StyleReader $styleReader): Style
=======
    private function readStyleFromExt(SimpleXMLElement $extCfRuleXml): Style
>>>>>>> match
    {
        $cfStyle = new Style(false, true);
        if ($extCfRuleXml->dxf) {
            $styleXML = $extCfRuleXml->dxf->children();

            if ($styleXML->borders) {
<<<<<<< HEAD
                $styleReader->readBorderStyle($cfStyle->getBorders(), $styleXML->borders);
            }
            if ($styleXML->fill) {
                $styleReader->readFillStyle($cfStyle->getFill(), $styleXML->fill);
=======
                $this->styleReader->readBorderStyle($cfStyle->getBorders(), $styleXML->borders);
            }
            if ($styleXML->fill) {
                $this->styleReader->readFillStyle($cfStyle->getFill(), $styleXML->fill);
>>>>>>> match
            }
        }

        return $cfStyle;
    }

    private function readConditionalStyles(SimpleXMLElement $xmlSheet): array
    {
        $conditionals = [];
        foreach ($xmlSheet->conditionalFormatting as $conditional) {
            foreach ($conditional->cfRule as $cfRule) {
                if (Conditional::isValidConditionType((string) $cfRule['type']) && (!isset($cfRule['dxfId']) || isset($this->dxfs[(int) ($cfRule['dxfId'])]))) {
                    $conditionals[(string) $conditional['sqref']][(int) ($cfRule['priority'])] = $cfRule;
                } elseif ((string) $cfRule['type'] == Conditional::CONDITION_DATABAR) {
                    $conditionals[(string) $conditional['sqref']][(int) ($cfRule['priority'])] = $cfRule;
                }
            }
        }

        return $conditionals;
    }

    private function setConditionalStyles(Worksheet $worksheet, array $conditionals, SimpleXMLElement $xmlExtLst): void
    {
        foreach ($conditionals as $cellRangeReference => $cfRules) {
<<<<<<< HEAD
            ksort($cfRules);
            $conditionalStyles = $this->readStyleRules($cfRules, $xmlExtLst);

            // Extract all cell references in $cellRangeReference
            $cellBlocks = explode(' ', str_replace('$', '', strtoupper($cellRangeReference)));
            foreach ($cellBlocks as $cellBlock) {
                $worksheet->getStyle($cellBlock)->setConditionalStyles($conditionalStyles);
            }
=======
            ksort($cfRules); // no longer needed for Xlsx, but helps Xls
            $conditionalStyles = $this->readStyleRules($cfRules, $xmlExtLst);

            // Extract all cell references in $cellRangeReference
            // N.B. In Excel UI, intersection is space and union is comma.
            // But in Xml, intersection is comma and union is space.
            $cellRangeReference = str_replace(['$', ' ', ',', '^'], ['', '^', ' ', ','], strtoupper($cellRangeReference));

            foreach ($conditionalStyles as $cs) {
                $scale = $cs->getColorScale();
                if ($scale !== null) {
                    $scale->setSqRef($cellRangeReference, $worksheet);
                }
            }
            $worksheet->getStyle($cellRangeReference)->setConditionalStyles($conditionalStyles);
>>>>>>> match
        }
    }

    private function readStyleRules(array $cfRules, SimpleXMLElement $extLst): array
    {
        $conditionalFormattingRuleExtensions = ConditionalFormattingRuleExtension::parseExtLstXml($extLst);
        $conditionalStyles = [];

<<<<<<< HEAD
=======
        /** @var SimpleXMLElement $cfRule */
>>>>>>> match
        foreach ($cfRules as $cfRule) {
            $objConditional = new Conditional();
            $objConditional->setConditionType((string) $cfRule['type']);
            $objConditional->setOperatorType((string) $cfRule['operator']);
<<<<<<< HEAD
=======
            $objConditional->setPriority((int) (string) $cfRule['priority']);
>>>>>>> match
            $objConditional->setNoFormatSet(!isset($cfRule['dxfId']));

            if ((string) $cfRule['text'] != '') {
                $objConditional->setText((string) $cfRule['text']);
            } elseif ((string) $cfRule['timePeriod'] != '') {
                $objConditional->setText((string) $cfRule['timePeriod']);
            }

            if (isset($cfRule['stopIfTrue']) && (int) $cfRule['stopIfTrue'] === 1) {
                $objConditional->setStopIfTrue(true);
            }

            if (count($cfRule->formula) >= 1) {
                foreach ($cfRule->formula as $formulax) {
                    $formula = (string) $formulax;
<<<<<<< HEAD
=======
                    $formula = str_replace(['_xlfn.', '_xlws.'], '', $formula);
>>>>>>> match
                    if ($formula === 'TRUE') {
                        $objConditional->addCondition(true);
                    } elseif ($formula === 'FALSE') {
                        $objConditional->addCondition(false);
                    } else {
                        $objConditional->addCondition($formula);
                    }
                }
            } else {
                $objConditional->addCondition('');
            }

            if (isset($cfRule->dataBar)) {
                $objConditional->setDataBar(
<<<<<<< HEAD
                    $this->readDataBarOfConditionalRule($cfRule, $conditionalFormattingRuleExtensions) // @phpstan-ignore-line
=======
                    $this->readDataBarOfConditionalRule($cfRule, $conditionalFormattingRuleExtensions)
                );
            } elseif (isset($cfRule->colorScale)) {
                $objConditional->setColorScale(
                    $this->readColorScale($cfRule)
>>>>>>> match
                );
            } elseif (isset($cfRule['dxfId'])) {
                $objConditional->setStyle(clone $this->dxfs[(int) ($cfRule['dxfId'])]);
            }

            $conditionalStyles[] = $objConditional;
        }

        return $conditionalStyles;
    }

<<<<<<< HEAD
    /**
     * @param SimpleXMLElement|stdClass $cfRule
     */
    private function readDataBarOfConditionalRule($cfRule, array $conditionalFormattingRuleExtensions): ConditionalDataBar
=======
    private function readDataBarOfConditionalRule(SimpleXMLElement $cfRule, array $conditionalFormattingRuleExtensions): ConditionalDataBar
>>>>>>> match
    {
        $dataBar = new ConditionalDataBar();
        //dataBar attribute
        if (isset($cfRule->dataBar['showValue'])) {
            $dataBar->setShowValue((bool) $cfRule->dataBar['showValue']);
        }

        //dataBar children
        //conditionalFormatValueObjects
        $cfvoXml = $cfRule->dataBar->cfvo;
        $cfvoIndex = 0;
<<<<<<< HEAD
        foreach ((count($cfvoXml) > 1 ? $cfvoXml : [$cfvoXml]) as $cfvo) {
=======
        foreach ((count($cfvoXml) > 1 ? $cfvoXml : [$cfvoXml]) as $cfvo) { //* @phpstan-ignore-line
>>>>>>> match
            if ($cfvoIndex === 0) {
                $dataBar->setMinimumConditionalFormatValueObject(new ConditionalFormatValueObject((string) $cfvo['type'], (string) $cfvo['val']));
            }
            if ($cfvoIndex === 1) {
                $dataBar->setMaximumConditionalFormatValueObject(new ConditionalFormatValueObject((string) $cfvo['type'], (string) $cfvo['val']));
            }
            ++$cfvoIndex;
        }

        //color
        if (isset($cfRule->dataBar->color)) {
<<<<<<< HEAD
            $dataBar->setColor((string) $cfRule->dataBar->color['rgb']);
=======
            $dataBar->setColor($this->styleReader->readColor($cfRule->dataBar->color));
>>>>>>> match
        }
        //extLst
        $this->readDataBarExtLstOfConditionalRule($dataBar, $cfRule, $conditionalFormattingRuleExtensions);

        return $dataBar;
    }

<<<<<<< HEAD
    /**
     * @param SimpleXMLElement|stdClass $cfRule
     */
    private function readDataBarExtLstOfConditionalRule(ConditionalDataBar $dataBar, $cfRule, array $conditionalFormattingRuleExtensions): void
    {
        if (isset($cfRule->extLst)) {
            $ns = $cfRule->extLst->getNamespaces(true);
            foreach ((count($cfRule->extLst) > 0 ? $cfRule->extLst->ext : [$cfRule->extLst->ext]) as $ext) {
=======
    private function readColorScale(SimpleXMLElement|stdClass $cfRule): ConditionalColorScale
    {
        $colorScale = new ConditionalColorScale();
        $count = count($cfRule->colorScale->cfvo);
        $idx = 0;
        foreach ($cfRule->colorScale->cfvo as $cfvoXml) {
            $attr = $cfvoXml->attributes() ?? [];
            $type = (string) ($attr['type'] ?? '');
            $val = $attr['val'] ?? null;
            if ($idx === 0) {
                $method = 'setMinimumConditionalFormatValueObject';
            } elseif ($idx === 1 && $count === 3) {
                $method = 'setMidpointConditionalFormatValueObject';
            } else {
                $method = 'setMaximumConditionalFormatValueObject';
            }
            if ($type !== 'formula') {
                $colorScale->$method(new ConditionalFormatValueObject($type, $val));
            } else {
                $colorScale->$method(new ConditionalFormatValueObject($type, null, $val));
            }
            ++$idx;
        }
        $idx = 0;
        foreach ($cfRule->colorScale->color as $color) {
            $rgb = $this->styleReader->readColor($color);
            if ($idx === 0) {
                $colorScale->setMinimumColor(new Color($rgb));
            } elseif ($idx === 1 && $count === 3) {
                $colorScale->setMidpointColor(new Color($rgb));
            } else {
                $colorScale->setMaximumColor(new Color($rgb));
            }
            ++$idx;
        }

        return $colorScale;
    }

    private function readDataBarExtLstOfConditionalRule(ConditionalDataBar $dataBar, SimpleXMLElement $cfRule, array $conditionalFormattingRuleExtensions): void
    {
        if (isset($cfRule->extLst)) {
            $ns = $cfRule->extLst->getNamespaces(true);
            foreach ((count($cfRule->extLst) > 0 ? $cfRule->extLst->ext : [$cfRule->extLst->ext]) as $ext) { //* @phpstan-ignore-line
>>>>>>> match
                $extId = (string) $ext->children($ns['x14'])->id;
                if (isset($conditionalFormattingRuleExtensions[$extId]) && (string) $ext['uri'] === '{B025F937-C7B1-47D3-B67F-A62EFF666E3E}') {
                    $dataBar->setConditionalFormattingRuleExt($conditionalFormattingRuleExtensions[$extId]);
                }
            }
        }
    }
}
