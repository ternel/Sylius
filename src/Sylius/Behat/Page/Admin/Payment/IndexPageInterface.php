<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Behat\Page\Admin\Payment;

use Sylius\Behat\Page\Admin\Crud\IndexPageInterface as BaseIndexPageInterface;

interface IndexPageInterface extends BaseIndexPageInterface
{
    public function chooseStateToFilter(string $paymentState): void;

    public function showOrderPageForNthPayment(int $position): void;

    public function completePaymentOfOrderWithNumber(string $orderNumber): void;

    public function getPaymentStateByOrderNumber(string $orderNumber): string;
}
