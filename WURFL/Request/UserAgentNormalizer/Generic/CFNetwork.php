<?php
/**
 * Copyright (c) 2015 ScientiaMobile, Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Refer to the COPYING.txt file distributed with this package.
 *
 * @category   WURFL
 * @package	WURFL_Request_UserAgentNormalizer_Generic
 * @copyright  ScientiaMobile, Inc.
 * @license	GNU Affero General Public License
 * @author	 Fantayeneh Asres Gizaw
 * @version	$id$
 */
/**
 * User Agent Normalizer - CFNetwork UA Resolution
 * @package	WURFL_Request_UserAgentNormalizer_Generic
 */
class WURFL_Request_UserAgentNormalizer_Generic_CFNetwork implements WURFL_Request_UserAgentNormalizer_Interface
{
    public function normalize($userAgent)
    {
        //Match a CFNetwork UA
        if (preg_match("#CFNetwork/(\d+\.?[0-9]*)#", $userAgent, $matches)) {
            $cfNetworkVersion = sprintf("%.2f", round($matches[1], 2, PHP_ROUND_HALF_DOWN));
            return "CFNetwork/{$cfNetworkVersion} " . $userAgent;
        }
        return $userAgent;
    }
}
