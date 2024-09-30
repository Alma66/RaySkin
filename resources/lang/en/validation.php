<?php

return [

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date equal to or after :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes, and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date equal to or before :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal to :value.',
        'file' => 'The :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal to :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal to :value.',
        'file' => 'The :attribute must be less than or equal to :value kilobytes.',
        'string' => 'The :attribute must be less than or equal to :value characters.',
        'array' => 'The :attribute may not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid timezone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

        /*
        |--------------------------------------------------------------------------
        | Custom Validation Language Lines
        |--------------------------------------------------------------------------
        */
        'custom' => [
            // Custom messages for AdminController
            'admin_name' => [
                'required' => 'The name is required.',
                'string' => 'The name must be a string.',
                'max' => 'The name may not be greater than :max characters.',
            ],
            'admin_email' => [
                'required' => 'The email is required.',
                'email' => 'The email must be a valid email address.',
                'max' => 'The email may not be greater than :max characters.',
                'unique' => 'This email is already registered.',
            ],
            'admin_password' => [
                'required' => 'The password is required.',
                'string' => 'The password must be a string.',
                'min' => 'The password must be at least :min characters.',
                'confirmed' => 'The password confirmation does not match.',
            ],
            'admin_address' => [
                'nullable' => 'The address is optional.',
                'string' => 'The address must be a string.',
                'max' => 'The address may not be greater than :max characters.',
            ],
            'admin_phone' => [
                'nullable' => 'The phone is optional.',
                'string' => 'The phone must be a string.',
                'max' => 'The phone may not be greater than :max characters.',
            ],

            // Custom messages for CategoryController
            'category_name' => [
                'required' => 'The category name is required.',
                'string' => 'The category name must be a string.',
                'max' => 'The category name may not be greater than :max characters.',
            ],
            'category_description' => [
                'nullable' => 'The category description is optional.',
                'string' => 'The category description must be a string.',
                'max' => 'The category description may not be greater than :max characters.',
            ],

            // Custom messages for BrandController
            'brand_name' => [
                'required' => 'The brand name is required.',
                'string' => 'The brand name must be a string.',
                'max' => 'The brand name may not be greater than :max characters.',
            ],
            'brand_description' => [
                'nullable' => 'The brand description is optional.',
                'string' => 'The brand description must be a string.',
                'max' => 'The brand description may not be greater than :max characters.',
            ],

            // Custom messages for PackController
            'pack_name' => [
                'required' => 'The pack name is required.',
                'string' => 'The pack name must be a string.',
                'max' => 'The pack name may not be greater than :max characters.',
            ],
            'pack_description' => [
                'nullable' => 'The pack description is optional.',
                'string' => 'The pack description must be a string.',
                'max' => 'The pack description may not be greater than :max characters.',
            ],
            'pack_price' => [
                'required' => 'The pack price is required.',
                'numeric' => 'The pack price must be a number.',
                'min' => 'The pack price must be at least :min.',
            ],
            'pack_discount' => [
                'nullable' => 'The pack discount is optional.',
                'numeric' => 'The pack discount must be a number.',
                'min' => 'The pack discount must be at least :min.',
            ],

            // Custom messages for PaymentMethodController
            'payment_method_name' => [
                'required' => 'The payment method name is required.',
                'string' => 'The payment method name must be a string.',
                'max' => 'The payment method name may not be greater than :max characters.',
            ],
            'payment_method_description' => [
                'nullable' => 'The payment method description is optional.',
                'string' => 'The payment method description must be a string.',
                'max' => 'The payment method description may not be greater than :max characters.',
            ],

            // Custom messages for ProductController
            'product_name' => [
                'required' => 'The product name is required.',
                'string' => 'The product name must be a string.',
                'max' => 'The product name may not be greater than :max characters.',
            ],
            'product_description' => [
                'nullable' => 'The product description is optional.',
                'string' => 'The product description must be a string.',
                'max' => 'The product description may not be greater than :max characters.',
            ],
            'product_price' => [
                'required' => 'The product price is required.',
                'numeric' => 'The product price must be a number.',
                'min' => 'The product price must be at least :min.',
            ],
            'product_stock' => [
                'required' => 'The product stock is required.',
                'integer' => 'The product stock must be an integer.',
                'min' => 'The product stock must be at least :min.',
            ],
            'product_brand_id' => [
                'required' => 'The product brand is required.',
                'exists' => 'The selected product brand is invalid.',
            ],
            'product_category_id' => [
                'required' => 'The product category is required.',
                'exists' => 'The selected product category is invalid.',
            ],

            // Custom messages for ReviewController
            'review_pack_id' => [
                'required' => 'The pack ID is required.',
                'exists' => 'The selected pack is invalid.',
            ],
            'review_user_id' => [
                'required' => 'The user ID is required.',
                'exists' => 'The selected user is invalid.',
            ],

            'review_rating' => [
                'required' => 'The rating is required.',
                'integer' => 'The rating must be an integer.',
                'min' => 'The rating must be at least :min.',
                'max' => 'The rating may not be greater than :max.',
            ],
            'review_comment' => [
                'nullable' => 'The comment is optional.',
                'string' => 'The comment must be a string.',
                'max' => 'The comment may not be greater than :max characters.',
            ],

            // Custom messages for SaleController
            'sale_user_id' => [
                'required' => 'The user ID is required.',
                'exists' => 'The selected user is invalid.',
            ],
            'sale_total' => [
                'required' => 'The total amount is required.',
                'numeric' => 'The total amount must be a number.',
                'min' => 'The total amount must be at least :min.',
            ],
            'sale_date' => [
                'required' => 'The sale date is required.',
                'date' => 'The sale date must be a valid date.',
            ],
            'sale_payment_method_id' => [
                'required' => 'The payment method ID is required.',
                'exists' => 'The selected payment method is invalid.',
            ],

            // Custom messages for UserController
            'user_name' => [
                'required' => 'The name is required.',
                'string' => 'The name must be a string.',
                'max' => 'The name may not be greater than :max characters.',
            ],
            'user_email' => [
                'required' => 'The email is required.',
                'email' => 'The email must be a valid email address.',
                'max' => 'The email may not be greater than :max characters.',
                'unique' => 'This email is already registered.',
            ],
            'user_password' => [
                'required' => 'The password is required.',
                'string' => 'The password must be a string.',
                'min' => 'The password must be at least :min characters.',
                'confirmed' => 'The password confirmation does not match.',
            ],
            'user_address' => [
                'nullable' => 'The address is optional.',
                'string' => 'The address must be a string.',
                'max' => 'The address may not be greater than :max characters.',
            ],
            'user_phone' => [
                'nullable' => 'The phone is optional.',
                'string' => 'The phone must be a string.',
                'max' => 'The phone may not be greater than :max characters.',
            ],
        ],
        /*
|--------------------------------------------------------------------------
| Custom Validation Attributes
|--------------------------------------------------------------------------
*/
'attributes' => [
    //Admin
    'admin_name' => 'name',
    'admin_email' => 'email',
    'admin_password' => 'password',
    'admin_address' => 'address',
    'admin_phone' => 'phone',
    //Category
    'category_name' => 'category name',
    'category_description' => 'category description',
    //Brand
    'brand_name' => 'brand name',
    'brand_description' => 'brand description',
    //Pack
    'pack_name' => 'pack name',
    'pack_description' => 'pack description',
    'pack_price' => 'price',
    'pack_discount' => 'discount',
    //Payment Method
    'payment_method_name' => 'payment method name',
    'payment_method_description' => 'payment method description',
    //Product
    'product_name' => 'product name',
    'product_description' => 'product description',
    'product_price' => 'price',
    'product_stock' => 'stock',
    'product_brand_id' => 'brand',
    'product_category_id' => 'category',
    //Review
    'review_pack_id' => 'pack',
    'review_user_id' => 'user',
    'review_rating' => 'rating',
    'review_comment' => 'comment',
    //Sale
    'sale_user_id' => 'user',
    'sale_total' => 'sale total',
    'sale_date' => 'sale date',
    'sale_payment_method_id' => 'payment method',
    //User
    'user_name' => 'user name',
    'user_email' => 'user email',
    'user_password' => 'user password',
    'user_address' => 'user address',
    'user_phone' => 'user phone',
],

];

