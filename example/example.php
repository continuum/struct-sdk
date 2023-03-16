<?php 

use FPAY\Payment\Payment;

$payment = new Payment();

$paymentdto = $payment->create_payment(...);
