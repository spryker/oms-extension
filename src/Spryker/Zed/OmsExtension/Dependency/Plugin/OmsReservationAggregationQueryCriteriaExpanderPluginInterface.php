<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OmsExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QueryCriteriaTransfer;
use Generated\Shared\Transfer\ReservationRequestTransfer;

/**
 * Query-criteria expander plugins for OMS reservation aggregation. Plugins
 * populate a `QueryCriteriaTransfer` describing joins, group-by columns,
 * `withColumn` aliases, and `WhereClause` entries. The OMS repository's
 * persistence-layer mapper applies the criteria to the underlying Propel
 * query.
 *
 * Implementations MUST be additive — never remove or overwrite entries set by
 * an earlier plugin in the stack. To override a `withColumn` (e.g. swap the
 * default `SUM(quantity)` for a `CASE` expression under the `sumAmount`
 * alias), set the same key — Propel's `withColumn` overwrites by alias.
 */
interface OmsReservationAggregationQueryCriteriaExpanderPluginInterface
{
    /**
     * Specification:
     * - Returns the supplied `QueryCriteriaTransfer` extended with the plugin's
     *   domain-specific joins, group-by columns, `withColumn` aliases and `WhereClause` entries.
     * - Reads context from `ReservationRequestTransfer` to decide whether and
     *   how to mutate.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\QueryCriteriaTransfer $queryCriteriaTransfer
     * @param \Generated\Shared\Transfer\ReservationRequestTransfer $reservationRequestTransfer
     *
     * @return \Generated\Shared\Transfer\QueryCriteriaTransfer
     */
    public function expand(
        QueryCriteriaTransfer $queryCriteriaTransfer,
        ReservationRequestTransfer $reservationRequestTransfer
    ): QueryCriteriaTransfer;
}
