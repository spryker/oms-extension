<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OmsExtension\Dependency\Plugin;

use ArrayObject;

interface OmsManualEventGrouperPluginInterface
{
    /**
     * Specification:
     *  - Groups manual events.
     *
     * @api
     *
     * @param array $events
     * @param \ArrayObject|\Generated\Shared\Transfer\ItemTransfer[] $orderItemTransfers
     *
     * @return array
     */
    public function group(array $events, ArrayObject $orderItemTransfers): array;
}
