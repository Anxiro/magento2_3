<?php

namespace SDM\Altapay\Model;

/**
 * Class ConstantConfig
 *
 * @package SDM\Altapay\Model
 * Comment history constants
 */
abstract class ConstantConfig
{
    /* order history comments */
    const REDIRECT_TO_VALITOR                   = 'Redirected to VALITOR - Payment request ID: ';
    const NOTIFICATION_CALLBACK                 = 'Notification callback from VALITOR';
    const CONSUMER_CANCEL_PAYMENT               = 'Consumer has canceled the payment';
    const DECLINED_PAYMENT_FORM                 = 'Card declined, consumer redirected to the payment form';
    const DECLINED_PAYMENT_SECTION              = 'Card declined, consumer redirected to the payment section';
    const CONSUMER_PAYMENT_FAILED               = 'Consumer has tried to pay but the payment failed';
    const PAYMENT_COMPLETE                      = 'Payment is completed';
    const OK_CALLBACK                           = 'OK callback from VALITOR';
    const BROWSER_BK_BUTTON_COMMENT             = 'Payment failed! Consumer has pressed the back button from the payment page.';

    /* config url */
    const VALITOR_OK                            = 'sdmvalitor/index/ok';
    const VALITOR_FAIL                          = 'sdmvalitor/index/fail';
    const VALITOR_REDIRECT                      = 'sdmvalitor/index/redirect';
    const VALITOR_OPEN                          = 'sdmvalitor/index/open';
    const VALITOR_NOTIFICATION                  = 'sdmvalitor/index/notification';
    const VALITOR_CALLBACK                      = 'sdmvalitor/index/callbackform';
    const VERIFY_ORDER                          = 'sdmvalitor/index/verifyorder';

    /* error and success message */
    const ERROR                                 = 'error';
    const CANCELLED                             = 'cancelled';
    const SUCCESS                               = 'success';
    const AUTH_MESSAGE                          = 'Could not authenticate with API';
    const ERROR_MESSAGE                         = 'error occured';
    const BROWSER_BK_BUTTON_MSG                 = 'Payment failed due to the browser back button usage!';
    const UNKNOWN_PAYMENT_STATUS_CONSUMER       = 'An error has occured! Please contact the shop!';
    const UNKNOWN_PAYMENT_STATUS_MERCHANT       = 'Unknown payment status. Please contact Valitor!';
}
