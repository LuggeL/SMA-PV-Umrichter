<?php

/**
 * Class SMARegister
 * Constants with sma register and value translations
 *
 * @version     0.1
 * @category    Symcon
 * @package     de.codeking.symcon
 * @author      Lugge Lex <info@lugge-lex.de>
 *
 */
class SMARegister
{
    /**
     * device addresses
     * addresses with fixed values
     */

    const device_addresses = [
        'default' => [
            /**
             * Global alle Typen
             */
            30051 => [
                'name' => 'Device class',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    8001 => 'Solar Inverter',
                ]
            ],
            30053 => [
                'name' => 'Device-ID',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    9285 => 'STP 25000TL-30',
                ]
            ],
            30057 => [
                'name' => 'Serial',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW'
            ],
            30231 => [
                'name' => 'Power limit',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30837 => [
                'name' => 'Active power target value',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ]
        ],
    ];
    /**
     * value addresses
     * addresses with updated values
     */
    const value_addresses = [
        'default' => [
            /**
             * Global
             */

            
            30201 => [
                'name' => 'Status',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    35 => 'Error',
                    303 => 'Off',
                    307 => 'OK',
                    455 => 'Warning'
                ]
            ],
            30541 => [
                'name' => 'Operating time',
                'count' => 2,
                'type' => 'U32',
                'format' => 'DURATION_S',
                'profile' => 'Hours'
            ],
            30543 => [
                'name' => 'Feed-in time',
                'count' => 2,
                'type' => 'U32',
                'format' => 'DURATION_S',
                'profile' => 'Hours'
            ],
            30535 => [
                'name' => 'Day yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3', // convert Wh to kWh
                'profile' => '~Electricity',
                'archive' => 1 // archive: counter
            ],
            30531 => [
                'name' => 'Total yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'kWh.Fixed',
                'archive' => 1 // archive: counter
            ],
            30769 => [
                'name' => 'DC current input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX2',
                'profile' => '~Ampere'
            ],
            30771 => [
                'name' => 'DC voltage input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX2',
                'profile' => '~Volt'
                          ],
            30773 => [
                'name' => 'DC power input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt',
                'archive' => 0 // archive: default
            ],
            30795 => [
                'name' => 'Grid current',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],
            30803 => [
                'name' => 'Power frequency',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Hertz'
            ],
            30777 => [
                'name' => 'Power L1',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30779 => [
                'name' => 'Power L2',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30781 => [
                'name' => 'Power L3',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            30783 => [
                'name' => 'Grid Voltage phase L1',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30785 => [
                'name' => 'Grid Voltage phase L2',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30787 => [
                'name' => 'Grid Voltage phase L3',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            30977 => [
                'name' => 'Grid current phase L1',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],
            30979 => [
                'name' => 'Grid current phase L2',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],
            30981 => [
                'name' => 'Grid current phase L3',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],
        ],
    ];
    const current_addresses = [
        'default' => [
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ]
        ]
    ];
}
