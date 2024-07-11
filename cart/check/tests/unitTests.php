<?php

use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase {

    public function test_checkPayPalConfiguration() {
        require_once(dirname(__FILE__)."/../api/Config/Config.php");

        // Check if PayPal environment is sandbox
        $this->assertEquals(PAYPAL_ENVIRONMENT,
            "live",
            "PayPal environment is not set to sandbox"
        );

        // Chick if PayPal REST credentials are updated
        $this->assertNotEmpty(PAYPAL_CREDENTIALS['live']['client_id'],
            "PayPal REST client_id is required"
        );
        $this->assertNotEmpty(PAYPAL_CREDENTIALS['live']['client_secret'],
            "PayPal REST client_secret is required"
        );

    }

    public function test_checkSampleCart() {
        require_once(dirname(__FILE__)."/../api/Config/Sample.php");

        $total = SampleCart['item_amt']
            + SampleCart['tax_amt']
            + SampleCart['insurance_fee']
            + SampleCart['handling_fee']
            + SampleCart['shipping_amt']
            + SampleCart['shipping_discount'];

        // Check sample cart total
        $this->assertEquals(SampleCart['total_amt'],
            $total,
            "Cart total does not match itemization"
        );
    }

    public function test_checkDefaultCredentials() {
        require_once(dirname(__FILE__)."/../api/Config/Sample.php");

        // Check if default client ID
        $this->assertNotEquals(PAYPAL_CREDENTIALS['live']['client_id'],
            "ASnUa4_eMkIZPulBBkonTiNEz4yF1B4AHm3TbE_w9dKQDUwzRv33fo62IiRPV4PJGTIrFl54mvyd-msg",
            "Using default PayPal REST credentials"
        );

        // Check if default client secret
        $this->assertNotEquals(PAYPAL_CREDENTIALS['live']['client_secret'],
            "EJpTT8PH_JYdn6Ojl0YelzwXxdy-zGGnGHLLpYgyKaOwUqcNRd771_MA8N8K8X3g3dUXSsJXDv7PyNl4",
            "Using default PayPal REST credentials"
        );
    }
}