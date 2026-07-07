<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OmsExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ReservationRequestTransfer;

interface ReservationRequestExpanderPluginInterface
{
    /**
     * Specification:
     * - Returns the request enriched with the stores this plugin resolves.
     * - Called only on the winning (highest-priority applicable) plugin.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ReservationRequestTransfer $reservationRequestTransfer
     *
     * @return \Generated\Shared\Transfer\ReservationRequestTransfer
     */
    public function expand(ReservationRequestTransfer $reservationRequestTransfer): ReservationRequestTransfer;

    /**
     * Specification:
     * - Returns true if this plugin can resolve stores for the given request.
     *   Should gate on the request property that identifies the plugin's own
     *   domain (for example, `productOfferReference` for an offer-stock expander).
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ReservationRequestTransfer $reservationRequestTransfer
     *
     * @return bool
     */
    public function isApplicable(ReservationRequestTransfer $reservationRequestTransfer): bool;

    /**
     * Specification:
     * - Returns the precedence value. Higher wins. Spryker-shipped plugins
     *   use bands `100` (plain product), `200` (offer-scoped), `300`
     *   (warehouse-allocation) — projects can slot custom plugins between
     *   them.
     *
     * @api
     *
     * @return int
     */
    public function getPriority(): int;
}
