<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OmsExtension\Dependency\Plugin;

interface PrioritizedReservationPostSaveTerminationAwareStrategyPluginInterface extends ReservationPostSaveTerminationAwareStrategyPluginInterface
{
    /**
     * Specification:
     * - Returns the precedence value used to order store-aware reservation post-save termination-aware plugins.
     * - Plugins with a higher priority are executed first.
     * - Spryker-shipped plugins use bands `100`, `200`, `300`, `400`, `500` so projects can slot custom plugins between them.
     *
     * @api
     *
     * @return int
     */
    public function getPriority(): int;
}
