<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\OrderCustomReferenceGui\Dependency\Facade;

use Generated\Shared\Transfer\SaveOrderTransfer;

interface OrderCustomReferenceGuiToOrderCustomReferenceFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\SaveOrderTransfer $saveOrderTransfer
     *
     * @return void
     */
    public function updateOrderCustomReference(SaveOrderTransfer $saveOrderTransfer): void;
}
