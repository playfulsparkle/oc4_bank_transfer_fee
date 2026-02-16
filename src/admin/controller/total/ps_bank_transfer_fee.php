<?php
namespace Opencart\Admin\Controller\Extension\PSBankTransferFee\Total;
/**
 * Class PSBankTransferFee
 *
 * @package Opencart\Admin\Controller\Extension\PSBankTransferFee\Total
 */
class PSBankTransferFee extends \Opencart\System\Engine\Controller
{
    /**
     * @var string The support email address.
     */
    const EXTENSION_EMAIL = 'support@playfulsparkle.com';

    /**
     * @var string The documentation URL for the extension.
     */
    const EXTENSION_DOC = 'https://github.com/playfulsparkle/oc4_bank_transfer_fee.git';

    /**
     * @return void
     */
    public function index(): void
    {
        $this->load->language('extension/ps_bank_transfer_fee/total/ps_bank_transfer_fee');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/ps_bank_transfer_fee/total/ps_bank_transfer_fee', 'user_token=' . $this->session->data['user_token'])
        ];

        $separator = version_compare(VERSION, '4.0.2.0', '>=') ? '.' : '|';

        $data['save'] = $this->url->link('extension/ps_bank_transfer_fee/total/ps_bank_transfer_fee' . $separator . 'save', 'user_token=' . $this->session->data['user_token']);
        $data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=total');

        $data['total_ps_bank_transfer_fee_fee'] = (float) $this->config->get('total_ps_bank_transfer_fee_fee');
        $data['total_ps_bank_transfer_fee_tax_class_id'] = (int) $this->config->get('total_ps_bank_transfer_fee_tax_class_id');

        $this->load->model('localisation/tax_class');

        $data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();

        $data['total_ps_bank_transfer_fee_status'] = (bool) $this->config->get('total_ps_bank_transfer_fee_status');
        $data['total_ps_bank_transfer_fee_sort_order'] = (int) $this->config->get('total_ps_bank_transfer_fee_sort_order');

        $data['text_contact'] = sprintf($this->language->get('text_contact'), self::EXTENSION_EMAIL, self::EXTENSION_EMAIL, self::EXTENSION_DOC);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/ps_bank_transfer_fee/total/ps_bank_transfer_fee', $data));
    }

    /**
     * @return void
     */
    public function save(): void
    {
        $this->load->language('extension/ps_bank_transfer_fee/total/ps_bank_transfer_fee');

        $json = [];

        if (!$this->user->hasPermission('modify', 'extension/ps_bank_transfer_fee/total/ps_bank_transfer_fee')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json && isset($this->request->post['total_ps_bank_transfer_fee_fee']) && (float) $this->request->post['total_ps_bank_transfer_fee_fee'] <= 0) {
            $json['error']['fee'] = $this->language->get('error_total_ps_bank_transfer_fee_fee');
        }

        if (!$json) {
            $this->load->model('setting/setting');

            $this->model_setting_setting->editSetting('total_ps_bank_transfer_fee', $this->request->post);

            $json['success'] = $this->language->get('text_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function install(): void
    {

    }

    public function uninstall(): void
    {

    }
}
