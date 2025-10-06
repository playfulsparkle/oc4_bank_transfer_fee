<?php
namespace Opencart\Catalog\Model\Extension\PSBankTransferFee\Total;
/**
 * Class PSBankTransferFee
 *
 * @package Opencart\Catalog\Model\Extension\PSBankTransferFee\Total
 */
class PSBankTransferFee extends \Opencart\System\Engine\Model
{
    /**
     * @param array $totals
     * @param array $taxes
     * @param float $total
     *
     * @return void
     */
    public function getTotal(array &$totals, array &$taxes, float &$total): void
    {
        if (
            (float) $this->config->get('total_ps_bank_transfer_fee_fee') > 0 &&
            isset($this->session->data['payment_method']) &&
            $this->session->data['payment_method']['code'] === 'bank_transfer.bank_transfer' &&
            $this->cart->getSubTotal() > 0
        ) {
            $this->load->language('extension/ps_bank_transfer_fee/total/ps_bank_transfer_fee');

            $totals[] = [
                'extension' => 'ps_bank_transfer_fee',
                'code' => 'ps_bank_transfer_fee',
                'title' => $this->language->get('text_ps_bank_transfer_fee'),
                'value' => (float) $this->config->get('total_ps_bank_transfer_fee_fee'),
                'sort_order' => (int) $this->config->get('total_ps_bank_transfer_fee_sort_order')
            ];

            if ((int) $this->config->get('total_ps_bank_transfer_fee_tax_class_id')) {
                $tax_rates = $this->tax->getRates((float) $this->config->get('total_ps_bank_transfer_fee_fee'), (int) $this->config->get('total_ps_bank_transfer_fee_tax_class_id'));

                foreach ($tax_rates as $tax_rate) {
                    if (!isset($taxes[$tax_rate['tax_rate_id']])) {
                        $taxes[$tax_rate['tax_rate_id']] = $tax_rate['amount'];
                    } else {
                        $taxes[$tax_rate['tax_rate_id']] += $tax_rate['amount'];
                    }
                }
            }

            $total += (float) $this->config->get('total_ps_bank_transfer_fee_fee');
        }
    }
}
