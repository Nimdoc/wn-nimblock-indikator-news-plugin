<?php namespace Nimdoc\NimblockIndikator;
/*********************************************************************
* Copyright (c) 2024 Tom Busby
*
* This program and the accompanying materials are made
* available under the terms of the Eclipse Public License 2.0
* which is available at https://www.eclipse.org/legal/epl-2.0/
*
* SPDX-License-Identifier: EPL-2.0
**********************************************************************/

use System\Classes\PluginBase;
use Event;

use Nimdoc\NimblockIndikator\Classes\Event\ExtendIndikatorNews;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'NimblockEditor for Indikator News',
            'description' => 'Provides the Nimblock Editor for the Indikator News plugin',
            'author' => 'Tom Busby',
            'icon' => 'icon-pencil-square-o'
        ];
    }

    public function registerSettings()
    {
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array|void
     */
    public function boot()
    {
        Event::subscribe(ExtendIndikatorNews::class);
    }
}
