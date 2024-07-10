<?php

// namespace Kitchen\CustomExtraFee\Plugin\Model\Quote\Address\Total;

// use Magento\Catalog\Api\ProductRepositoryInterface;
// use Magento\Checkout\Model\Session as CheckoutSession;

// class AbstractTotal
// {
//     protected $checkoutSession;
//     protected $productRepository;

//     public function __construct(
//         CheckoutSession $checkoutSession,
//         ProductRepositoryInterface $productRepository,
//         array $data = []
//     ) {
//         $this->checkoutSession = $checkoutSession;
//         $this->productRepository = $productRepository;
//     }

//     public function aroundCollect(
//         \Magento\Quote\Model\Quote\Address\Total\AbstractTotal $subject,
//         \Closure $proceed,
//         \Magento\Quote\Model\Quote $quote,
//         \Magento\Quote\Api\Data\ShippingAssignmentInterface $shippingAssignment,
//         \Magento\Quote\Model\Quote\Address\Total $total
//     ) {
//         // Proceed with the original collect method
//         $returnValue = $proceed($quote, $shippingAssignment, $total);
        
//         $customfee = $quote->getCustomExtraFee();

//         $total->setTotalAmount('custom_extra_fee', $customfee);
//         $total->setBaseTotalAmount('custom_extra_fee', $customfee);
//         $total->setCustomExtraFee($customfee);
//         $total->setGrandTotal($total->getGrandTotal() + $customfee);
//         $total->setBaseGrandTotal($total->getBaseGrandTotal() + $customfee);

//         return $returnValue;
//     }
// }
