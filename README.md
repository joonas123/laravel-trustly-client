Trustly PHP Client for Laravel
=====================

## Publish config:
`php artisan vendor:publish --tag=config --provider=Joonas1234\\Trustly\\TrustlyServiceProvider`

## Generate your public/private key pair
Private:
`openssl genrsa -out private.pem 2048`

Public:
`openssl rsa -pubout -in private.pem -out public.pem -outform PEM`

## Set public and private key location to config


## Example deposit

        /**
          * Create new deposit
          * @param Illuminate\Http\Request $request
          */
        public function deposit(Request $request)
        {
            $depositData = [
                'notification_url' => url('api/trustly-notification'), // NotificationURL
                'end_user_id' => 'john.doe@example.com', // EndUserId
                'message_id' => rand(), // Local unique ID
                'locale' => 'en_US', // Locale
                'amount' => 100, // Amount
                'currency' => 'EUR', // Currency
                'country' => 'SE', // Country
                'mobile_phone' => NULL, // MobilePhone
                'firstname' => 'John', // Firstname
                'lastname' => 'Doe', // Lastname
                'national_identification_number' => NULL, // NationalIdentificationNumber
                'shopper_statement' => NULL, // ShopperStatement
                'ip' => $request->ip(), // IP
                'success_url' => url('api/trustly-success'), // SuccessURL
                'fail_url' => url('api/trustly-fail'), // FailURL
                'template_url' => NULL, // TemplateURL
                'url_target' => NULL, // URLTarget
                'suggested_min_amount' => NULL, // SuggestedMinAmount
                'suggested_max_amount' => NULL, // SuggestedMaxAmount
                'email' => NULL, // Email
                'shipping_address_country' => NULL, // ShippingAddressCountry
                'shipping_address_postalcode' => NULL, // ShippingAddressPostalcode
                'shipping_address_city' => NULL, // ShippingAddressCity
                'shipping_address_line1' => NULL, // ShippingAddressLine1
                'shipping_address_line2' => NULL, // ShippingAddressLine2
                'shipping_address' => NULL, // ShippingAddress
            ];

            Trustly::deposit($depositData);
        }

## Handle notifications
        /**
        * Catch trustly notification
        * @post
        */
        public function notification()
        {
            return Trustly::notification();
        }
