<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OmsExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ReservationRequestTransfer;

/**
 * Provides the ability to aggregate reservation for product.
 *
 * @deprecated Use {@link \Spryker\Zed\OmsExtension\Dependency\Plugin\OmsReservationAggregationQueryCriteriaExpanderPluginInterface}
 *             instead. The new compositional flow allows domain modules to contribute filter, group-by
 *             and `withColumn` fragments to a shared `QueryCriteriaTransfer` that the OMS module then
 *             applies to a single Propel query. Plugin order is no longer load-bearing — multiple
 *             expanders compose, unlike the legacy "first applicable plugin wins" loop here.
 *             The legacy stack is wired on `OmsDependencyProvider::PLUGINS_OMS_RESERVATION_AGGREGATION`;
 *             the replacement stack is wired on
 *             `OmsDependencyProvider::PLUGINS_OMS_RESERVATION_AGGREGATION_QUERY_CRITERIA_EXPANDER`.
 */
interface OmsReservationAggregationPluginInterface
{
    /**
     * Specification:
     * - Aggregates reservations for a given ReservationRequest.
     *
     * @api
     *
     * @deprecated Use {@link \Spryker\Zed\OmsExtension\Dependency\Plugin\OmsReservationAggregationQueryCriteriaExpanderPluginInterface::expand()}
     *             instead.
     *
     * @param \Generated\Shared\Transfer\ReservationRequestTransfer $reservationRequestTransfer
     *
     * @return array<\Generated\Shared\Transfer\SalesOrderItemStateAggregationTransfer>
     */
    public function aggregateReservations(ReservationRequestTransfer $reservationRequestTransfer): array;
}
