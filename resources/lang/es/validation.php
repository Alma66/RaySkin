<?php

return [

    'accepted' => 'El :attribute debe ser aceptado.',
    'active_url' => 'El :attribute no es una URL válida.',
    'after' => 'El :attribute debe ser una fecha después de :date.',
    'after_or_equal' => 'El :attribute debe ser una fecha igual o después de :date.',
    'alpha' => 'El :attribute solo puede contener letras.',
    'alpha_dash' => 'El :attribute solo puede contener letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El :attribute solo puede contener letras y números.',
    'array' => 'El :attribute debe ser un array.',
    'before' => 'El :attribute debe ser una fecha antes de :date.',
    'before_or_equal' => 'El :attribute debe ser una fecha igual o antes de :date.',
    'between' => [
        'numeric' => 'El :attribute debe estar entre :min y :max.',
        'file' => 'El :attribute debe tener entre :min y :max kilobytes.',
        'string' => 'El :attribute debe tener entre :min y :max caracteres.',
        'array' => 'El :attribute debe tener entre :min y :max elementos.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'date' => 'El :attribute no es una fecha válida.',
    'date_equals' => 'El :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El :attribute no coincide con el formato :format.',
    'different' => 'El :attribute y :other deben ser diferentes.',
    'digits' => 'El :attribute debe tener :digits dígitos.',
    'digits_between' => 'El :attribute debe tener entre :min y :max dígitos.',
    'dimensions' => 'El :attribute tiene dimensiones de imagen no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'exists' => 'El :attribute seleccionado no es válido.',
    'file' => 'El :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute debe tener un valor.',
    'gt' => [
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que :value caracteres.',
        'array' => 'El :attribute debe tener más de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'El :attribute debe ser mayor o igual que :value.',
        'file' => 'El :attribute debe ser mayor o igual que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor o igual que :value caracteres.',
        'array' => 'El :attribute debe tener :value elementos o más.',
    ],
    'image' => 'El :attribute debe ser una imagen.',
    'in' => 'El :attribute seleccionado es inválido.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => 'El :attribute debe ser un número entero.',
    'ip' => 'El :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El :attribute debe ser una cadena JSON válida.',
    'lt' => [
        'numeric' => 'El :attribute debe ser menor que :value.',
        'file' => 'El :attribute debe ser menor que :value kilobytes.',
        'string' => 'El :attribute debe ser menor que :value caracteres.',
        'array' => 'El :attribute debe tener menos de :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El :attribute debe ser menor o igual que :value.',
        'file' => 'El :attribute debe ser menor o igual que :value kilobytes.',
        'string' => 'El :attribute debe ser menor o igual que :value caracteres.',
        'array' => 'El :attribute no debe tener más de :value elementos.',
    ],
    'max' => [
        'numeric' => 'El :attribute no puede ser mayor que :max.',
        'file' => 'El :attribute no puede ser mayor que :max kilobytes.',
        'string' => 'El :attribute no puede ser mayor que :max caracteres.',
        'array' => 'El :attribute no puede tener más de :max elementos.',
    ],
    'mimes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'numeric' => 'El :attribute debe ser al menos :min.',
        'file' => 'El :attribute debe tener al menos :min kilobytes.',
        'string' => 'El :attribute debe tener al menos :min caracteres.',
        'array' => 'El :attribute debe tener al menos :min elementos.',
    ],
    'not_in' => 'El :attribute seleccionado es inválido.',
    'not_regex' => 'El formato de :attribute es inválido.',
    'numeric' => 'El :attribute debe ser un número.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato de :attribute es inválido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values está presente.',
    'same' => 'El :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El :attribute debe ser :size.',
        'file' => 'El :attribute debe tener :size kilobytes.',
        'string' => 'El :attribute debe tener :size caracteres.',
        'array' => 'El :attribute debe contener :size elementos.',
    ],
    'string' => 'El :attribute debe ser una cadena de caracteres.',
    'timezone' => 'El :attribute debe ser una zona horaria válida.',
    'unique' => 'El :attribute ya ha sido tomado.',
    'uploaded' => 'El :attribute falló al subir.',
    'url' => 'El formato de :attribute es inválido.',
    'uuid' => 'El :attribute debe ser un UUID válido.',

        /*
        |--------------------------------------------------------------------------
        | Líneas de Lenguaje de Validación Personalizadas
        |--------------------------------------------------------------------------
        */
        'custom' => [
            // Mensajes personalizados para el controlador AdminController
            'admin_name' => [
                'required' => 'El nombre es obligatorio.',
                'string' => 'El nombre debe ser una cadena de caracteres.',
                'max' => 'El nombre no puede tener más de :max caracteres.',
            ],
            'admin_email' => [
                'required' => 'El correo electrónico es obligatorio.',
                'email' => 'El correo electrónico debe ser una dirección de correo electrónico válida.',
                'max' => 'El correo electrónico no puede tener más de :max caracteres.',
                'unique' => 'Este correo electrónico ya está registrado.',
            ],
            'admin_password' => [
                'required' => 'La contraseña es obligatoria.',
                'string' => 'La contraseña debe ser una cadena de caracteres.',
                'min' => 'La contraseña debe tener al menos :min caracteres.',
                'confirmed' => 'La confirmación de la contraseña no coincide.',
            ],
            'admin_address' => [
                'nullable' => 'La dirección es opcional.',
                'string' => 'La dirección debe ser una cadena de caracteres.',
                'max' => 'La dirección no puede tener más de :max caracteres.',
            ],
            'admin_phone' => [
                'nullable' => 'El teléfono es opcional.',
                'string' => 'El teléfono debe ser una cadena de caracteres.',
                'max' => 'El teléfono no puede tener más de :max caracteres.',
            ],

            // Mensajes personalizados para el controlador CategoryController
            'category_name' => [
                'required' => 'El nombre de la categoría es obligatorio.',
                'string' => 'El nombre de la categoría debe ser una cadena de caracteres.',
                'max' => 'El nombre de la categoría no puede tener más de :max caracteres.',
            ],
            'category_description' => [
                'nullable' => 'La descripción de la categoría es opcional.',
                'string' => 'La descripción de la categoría debe ser una cadena de caracteres.',
                'max' => 'La descripción de la categoría no puede tener más de :max caracteres.',
            ],

            // Mensajes personalizados para el controlador BrandController
            'brand_name' => [
                'required' => 'El nombre de la marca es obligatorio.',
                'string' => 'El nombre de la marca debe ser una cadena de caracteres.',
                'max' => 'El nombre de la marca no puede tener más de :max caracteres.',
            ],
            'brand_description' => [
                'nullable' => 'La descripción de la marca es opcional.',
                'string' => 'La descripción de la marca debe ser una cadena de caracteres.',
                'max' => 'La descripción de la marca no puede tener más de :max caracteres.',
            ],

            // Mensajes personalizados para el controlador PackController
            'pack_name' => [
                'required' => 'El nombre del pack es obligatorio.',
                'string' => 'El nombre del pack debe ser una cadena de caracteres.',
                'max' => 'El nombre del pack no puede tener más de :max caracteres.',
            ],
            'pack_description' => [
                'nullable' => 'La descripción del pack es opcional.',
                'string' => 'La descripción del pack debe ser una cadena de caracteres.',
                'max' => 'La descripción del pack no puede tener más de :max caracteres.',
            ],
            'pack_price' => [
                'required' => 'El precio del pack es obligatorio.',
                'numeric' => 'El precio del pack debe ser un número.',
                'min' => 'El precio del pack debe ser al menos :min.',
            ],
            'pack_discount' => [
                'nullable' => 'El descuento del pack es opcional.',
                'numeric' => 'El descuento del pack debe ser un número.',
                'min' => 'El descuento del pack debe ser al menos :min.',
            ],

            // Mensajes personalizados para el controlador PaymentMethodController
            'payment_method_name' => [
                'required' => 'El nombre del método de pago es obligatorio.',
                'string' => 'El nombre del método de pago debe ser una cadena de caracteres.',
                'max' => 'El nombre del método de pago no puede tener más de :max caracteres.',
            ],
            'payment_method_description' => [
                'nullable' => 'La descripción del método de pago es opcional.',
                'string' => 'La descripción del método de pago debe ser una cadena de caracteres.',
                'max' => 'La descripción del método de pago no puede tener más de :max caracteres.',
            ],

            // Mensajes personalizados para el controlador ProductController
            'product_name' => [
                'required' => 'El nombre del producto es obligatorio.',
                'string' => 'El nombre del producto debe ser una cadena de caracteres.',
                'max' => 'El nombre del producto no puede tener más de :max caracteres.',
            ],
            'product_description' => [
                'nullable' => 'La descripción del producto es opcional.',
                'string' => 'La descripción del producto debe ser una cadena de caracteres.',
                'max' => 'La descripción del producto no puede tener más de :max caracteres.',
            ],
            'product_price' => [
                'required' => 'El precio del producto es obligatorio.',
                'numeric' => 'El precio del producto debe ser un número.',
                'min' => 'El precio del producto debe ser al menos :min.',
            ],
            'product_stock' => [
                'required' => 'El stock del producto es obligatorio.',
                'integer' => 'El stock del producto debe ser un número entero.',
                'min' => 'El stock del producto debe ser al menos :min.',
            ],
            'product_brand_id' => [
                'required' => 'La marca del producto es obligatoria.',
                'exists' => 'La marca seleccionada no es válida.',
            ],
            'product_category_id' => [
                'required' => 'La categoría del producto es obligatoria.',
                'exists' => 'La categoría seleccionada no es válida.',
            ],

            // Mensajes personalizados para el controlador ReviewController
            'review_pack_id' => [
                'required' => 'El ID del paquete es obligatorio.',
                'exists' => 'El paquete seleccionado no es válido.',
            ],
            'review_user_id' => [
                'required' => 'El ID del usuario es obligatorio.',
                'exists' => 'El usuario seleccionado no es válido.',
            ],
            'review_rating' => [
                'required' => 'La calificación es obligatoria.',
                'integer' => 'La calificación debe ser un número entero.',
                'min' => 'La calificación debe ser al menos :min.',
                'max' => 'La calificación no puede ser mayor a :max.',
            ],
            'review_comment' => [
                'nullable' => 'El comentario es opcional.',
                'string' => 'El comentario debe ser una cadena de caracteres.',
                'max' => 'El comentario no puede tener más de :max caracteres.',
            ],

            // Mensajes personalizados para el controlador SaleController
            'sale_user_id' => [
                'required' => 'El ID del usuario es requerido.',
                'exists' => 'El usuario seleccionado no es válido.',
            ],
            'sale_total' => [
                'required' => 'El total de la venta es obligatorio.',
                'numeric' => 'El total de la venta debe ser un número.',
                'min' => 'El total de la venta debe ser al menos :min.',
            ],
            'sale_date' => [
                'required' => 'La fecha de la venta es obligatoria.',
                'date' => 'La fecha de la venta debe ser una fecha válida.',
            ],
            'sale_payment_method_id' => [
                'required' => 'El método de pago es obligatorio.',
                'exists' => 'El método de pago seleccionado no es válido.',
            ],

            // Mensajes personalizados para el controlador UserController
            'user_name' => [
                'required' => 'El nombre del usuario es obligatorio.',
                'string' => 'El nombre del usuario debe ser una cadena de caracteres.',
                'max' => 'El nombre del usuario no puede tener más de :max caracteres.',
            ],
            'user_email' => [
                'required' => 'El correo electrónico del usuario es obligatorio.',
                'email' => 'El correo electrónico debe ser una dirección de correo electrónico válida.',
                'max' => 'El correo electrónico no puede tener más de :max caracteres.',
                'unique' => 'Este correo electrónico ya está registrado.',
            ],
            'user_password' => [
                'required' => 'La contraseña es obligatoria.',
                'string' => 'La contraseña debe ser una cadena de caracteres.',
                'min' => 'La contraseña debe tener al menos :min caracteres.',
                'confirmed' => 'La confirmación de la contraseña no coincide.',
            ],
            'user_address' => [
                'nullable' => 'La dirección del usuario es opcional.',
                'string' => 'La dirección del usuario debe ser una cadena de caracteres.',
                'max' => 'La dirección del usuario no puede tener más de :max caracteres.',
            ],
            'user_phone' => [
                'nullable' => 'El teléfono del usuario es opcional.',
                'string' => 'El teléfono del usuario debe ser una cadena de caracteres.',
                'max' => 'El teléfono del usuario no puede tener más de :max caracteres.',
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Atributos de Validación Personalizados
        |--------------------------------------------------------------------------
        */
        'attributes' => [
            //Admin
            'admin_name' => 'nombre',
            'admin_email' => 'correo electrónico',
            'admin_password' => 'contraseña',
            'admin_address' => 'dirección',
            'admin_phone' => 'teléfono',
            //Category
            'category_name' => 'nombre de la categoría',
            'category_description' => 'descripción de la categoría',
            //Brand
            'brand_name' => 'nombre de la marca',
            'brand_description' => 'descripción de la marca',
            //Pack
            'pack_name' => 'nombre del pack',
            'pack_description' => 'descripción del pack',
            'pack_price' => 'precio',
            'pack_discount' => 'descuento',
            //Payment Method
            'payment_method_name' => 'nombre del metodo de pago',
            'payment_method_description' => 'descripción del metodo de pago',
            //Product
            'product_name' => 'nombre del producto',
            'product_description' => 'descripción del producto',
            'product_price' => 'precio',
            'product_stock' => 'stock',
            'product_brand_id' => 'marca',
            'product_category_id' => 'categoría',
            //Review
            'review_pack_id' => 'pack',
            'review_user_id' => 'usuario',
            'review_rating' => 'calificación',
            'review_comment' => 'comentario',
            //Sale
            'sale_user_id' => 'usuario',
            'sale_total' => 'total de la venta',
            'sale_date' => 'fecha de la venta',
            'sale_payment_method_id' => 'método de pago',
            //User
            'user_name' => 'nombre del usuario',
            'user_email' => 'correo electrónico del usuario',
            'user_password' => 'contraseña del usuario',
            'user_address' => 'dirección del usuario',
            'user_phone' => 'teléfono del usuario',
        ],

    ];


