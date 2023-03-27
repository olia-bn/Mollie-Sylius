<?php


declare(strict_types=1);

namespace SyliusMolliePlugin\Options\Country;

use SyliusMolliePlugin\Entity\MollieGatewayConfigInterface;

final class Options
{
    public const ALL_COUNTRIES = 'sylius_mollie_plugin.ui.all_countries';

    public const SELECTED_COUNTRIES = 'sylius_mollie_plugin.ui.selected_countries';

    public static function getCountriesConfigOptions(): array
    {
        return [
            self::ALL_COUNTRIES => MollieGatewayConfigInterface::ALL_COUNTRIES,
            self::SELECTED_COUNTRIES => MollieGatewayConfigInterface::SELECTED_COUNTRIES,
        ];
    }
}
