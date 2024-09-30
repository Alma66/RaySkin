<?php

return [

    'accepted' => 'O :attribute deve ser aceito.',
    'active_url' => 'O :attribute não é uma URL válida.',
    'after' => 'O :attribute deve ser uma data depois de :date.',
    'after_or_equal' => 'O :attribute deve ser uma data igual ou depois de :date.',
    'alpha' => 'O :attribute só pode conter letras.',
    'alpha_dash' => 'O :attribute só pode conter letras, números, hífens e sublinhados.',
    'alpha_num' => 'O :attribute só pode conter letras e números.',
    'array' => 'O :attribute deve ser um array.',
    'before' => 'O :attribute deve ser uma data antes de :date.',
    'before_or_equal' => 'O :attribute deve ser uma data igual ou antes de :date.',
    'between' => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file' => 'O :attribute deve ter entre :min e :max kilobytes.',
        'string' => 'O :attribute deve ter entre :min e :max caracteres.',
        'array' => 'O :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação de :attribute não coincide.',
    'date' => 'O :attribute não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não corresponde ao formato :format.',
    'different' => 'O :attribute e :other devem ser diferentes.',
    'digits' => 'O :attribute deve ter :digits dígitos.',
    'digits_between' => 'O :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute tem um valor duplicado.',
    'email' => 'O :attribute deve ser um endereço de e-mail válido.',
    'exists' => 'O :attribute selecionado não é válido.',
    'file' => 'O :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file' => 'O :attribute deve ser maior que :value kilobytes.',
        'string' => 'O :attribute deve ser maior que :value caracteres.',
        'array' => 'O :attribute deve ter mais de :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute deve ser maior ou igual a :value.',
        'file' => 'O :attribute deve ser maior ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser maior ou igual a :value caracteres.',
        'array' => 'O :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O :attribute deve ser um número inteiro.',
    'ip' => 'O :attribute deve ser um endereço IP válido.',
    'ipv4' => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O :attribute deve ser menor que :value.',
        'file' => 'O :attribute deve ser menor que :value kilobytes.',
        'string' => 'O :attribute deve ser menor que :value caracteres.',
        'array' => 'O :attribute deve ter menos de :value itens.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser menor ou igual a :value.',
        'file' => 'O :attribute deve ser menor ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser menor ou igual a :value caracteres.',
        'array' => 'O :attribute não deve ter mais de :value itens.',
    ],
    'max' => [
        'numeric' => 'O :attribute não pode ser maior que :max.',
        'file' => 'O :attribute não pode ser maior que :max kilobytes.',
        'string' => 'O :attribute não pode ser maior que :max caracteres.',
        'array' => 'O :attribute não pode ter mais de :max itens.',
    ],
    'mimes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute deve ser pelo menos :min.',
        'file' => 'O :attribute deve ter pelo menos :min kilobytes.',
        'string' => 'O :attribute deve ter pelo menos :min caracteres.',
        'array' => 'O :attribute deve ter pelo menos :min itens.',
    ],
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O formato de :attribute é inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O formato de :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório, a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum de :values está presente.',
    'same' => 'O :attribute e :other devem coincidir.',
    'size' => [
        'numeric' => 'O :attribute deve ser :size.',
        'file' => 'O :attribute deve ter :size kilobytes.',
        'string' => 'O :attribute deve ter :size caracteres.',
        'array' => 'O :attribute deve conter :size itens.',
    ],
    'string' => 'O :attribute deve ser uma string.',
    'timezone' => 'O :attribute deve ser um fuso horário válido.',
    'unique' => 'O :attribute já foi tomado.',
    'uploaded' => 'O :attribute falhou ao carregar.',
    'url' => 'O formato de :attribute é inválido.',
    'uuid' => 'O :attribute deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Mensagens de Validação Personalizadas
    |--------------------------------------------------------------------------
    */
    'custom' => [
        // Mensagens personalizadas para o controlador AdminController
        'admin_name' => [
            'required' => 'O nome é obrigatório.',
            'string' => 'O nome deve ser uma string.',
            'max' => 'O nome não pode ter mais de :max caracteres.',
        ],
        'admin_email' => [
            'required' => 'O e-mail é obrigatório.',
            'email' => 'O e-mail deve ser um endereço de e-mail válido.',
            'max' => 'O e-mail não pode ter mais de :max caracteres.',
            'unique' => 'Este e-mail já está registrado.',
        ],
        'admin_password' => [
            'required' => 'A senha é obrigatória.',
            'string' => 'A senha deve ser uma string.',
            'min' => 'A senha deve ter pelo menos :min caracteres.',
            'confirmed' => 'A confirmação da senha não coincide.',
        ],
        'admin_address' => [
            'nullable' => 'O endereço é opcional.',
            'string' => 'O endereço deve ser uma string.',
            'max' => 'O endereço não pode ter mais de :max caracteres.',
        ],
        'admin_phone' => [
            'nullable' => 'O telefone é opcional.',
            'string' => 'O telefone deve ser uma string.',
            'max' => 'O telefone não pode ter mais de :max caracteres.',
        ],

        // Mensagens personalizadas para o controlador CategoryController
        'category_name' => [
            'required' => 'O nome da categoria é obrigatório.',
            'string' => 'O nome da categoria deve ser uma string.',
            'max' => 'O nome da categoria não pode ter mais de :max caracteres.',
        ],
        'category_description' => [
            'nullable' => 'A descrição da categoria é opcional.',
            'string' => 'A descrição da categoria deve ser uma string.',
            'max' => 'A descrição da categoria não pode ter mais de :max caracteres.',
        ],

        // Mensagens personalizadas para o controlador BrandController
      'brand_name' => [
            'required' => 'O nome da marca é obrigatório.',
            'string' => 'O nome da marca deve ser uma string.',
            'max' => 'O nome da marca não pode ter mais de :max caracteres.',
        ],
      'brand_description' => [
            'nullable' => 'A descrição da marca é opcional.',
            'string' => 'A descrição da marca deve ser uma string.',
            'max' => 'A descrição da marca não pode ter mais de :max caracteres.',
        ],

        // Mensagens personalizadas para o controlador PackController
        'pack_name' => [
            'required' => 'O nome do pacote é obrigatório.',
            'string' => 'O nome do pacote deve ser uma string.',
            'max' => 'O nome do pacote não pode ter mais de :max caracteres.',
        ],
        'pack_description' => [
            'nullable' => 'A descrição do pacote é opcional.',
            'string' => 'A descrição do pacote deve ser uma string.',
            'max' => 'A descrição do pacote não pode ter mais de :max caracteres.',
        ],
        'pack_price' => [
            'required' => 'O preço do pacote é obrigatório.',
            'numeric' => 'O preço do pacote deve ser um número.',
            'min' => 'O preço do pacote deve ser pelo menos :min.',
        ],
        'pack_discount' => [
            'nullable' => 'O desconto do pacote é opcional.',
            'numeric' => 'O desconto do pacote deve ser um número.',
            'min' => 'O desconto do pacote deve ser pelo menos :min.',
        ],

        // Mensagens personalizadas para o controlador PaymentMethodController
        'payment_method_name' => [
            'required' => 'O nome do método de pagamento é obrigatório.',
            'string' => 'O nome do método de pagamento deve ser uma string.',
            'max' => 'O nome do método de pagamento não pode ter mais de :max caracteres.',
        ],
        'payment_method_description' => [
            'nullable' => 'A descrição do método de pagamento é opcional.',
            'string' => 'A descrição do método de pagamento deve ser uma string.',
            'max' => 'A descrição do método de pagamento não pode ter mais de :max caracteres.',
        ],

        // Mensagens personalizadas para o controlador ProductController
        'product_name' => [
            'required' => 'O nome do produto é obrigatório.',
            'string' => 'O nome do produto deve ser uma string.',
            'max' => 'O nome do produto não pode ter mais de :max caracteres.',
        ],
        'product_description' => [
            'nullable' => 'A descrição do produto é opcional.',
            'string' => 'A descrição do produto deve ser uma string.',
            'max' => 'A descrição do produto não pode ter mais de :max caracteres.',
        ],
        'product_price' => [
            'required' => 'O preço do produto é obrigatório.',
            'numeric' => 'O preço do produto deve ser um número.',
            'min' => 'O preço do produto deve ser pelo menos :min.',
        ],
        'product_stock' => [
            'required' => 'O estoque do produto é obrigatório.',
            'numeric' => 'O estoque do produto deve ser um número.',
            'min' => 'O estoque do produto deve ser pelo menos :min.',
        ],
        'product_brand_id' => [
            'required' => 'A marca do produto é obrigatória.',
            'exists' => 'A marca selecionada não é válida.',
        ],
        'product_category_id' => [
            'required' => 'A categoria do produto é obrigatória.',
            'exists' => 'A categoria selecionada não é válida.',
        ],

        // Mensagens personalizadas para o controlador ReviewController
        'review_pack_id' => [
            'required' => 'O ID do pacote é obrigatório.',
            'exists' => 'O pacote selecionado é inválido.',
        ],
        'review_user_id' => [
            'required' => 'O ID do usuário é obrigatório.',
            'exists' => 'O usuário selecionado é inválido.',
        ],
        'review_rating' => [
            'required' => 'A classificação é obrigatória.',
            'numeric' => 'A classificação deve ser um número.',
            'min' => 'A classificação deve ser pelo menos :min.',
            'max' => 'A classificação não pode ser maior que :max.',
        ],
        'review_comment' => [
            'nullable' => 'O comentário é opcional.',
            'string' => 'O comentário deve ser uma string.',
            'max' => 'O comentário não pode ter mais de :max caracteres.',
        ],
        
        // Mensagens personalizadas para o controlador SaleController
        'sale_user_id' => [
            'required' => 'O ID do usuário é obrigatório.',
            'exists' => 'O usuário selecionado é inválido.',
        ],
        'sale_total' => [
            'required' => 'O total da venda é obrigatório.',
            'numeric' => 'O total da venda deve ser um número.',
            'min' => 'O total da venda deve ser pelo menos :min.',
        ],
        'sale_date' => [
            'required' => 'A data da venda é obrigatória.',
            'date' => 'A data da venda deve ser uma data válida.',
        ],
        'sale_payment_method_id' => [
            'required' => 'O método de pagamento é obrigatório.',
            'exists' => 'O método de pagamento selecionado não é válido.',
        ],

        // Mensagens personalizadas para o controlador UserController
        'user_name' => [
            'required' => 'O nome do usuário é obrigatório.',
            'string' => 'O nome do usuário deve ser uma string.',
            'max' => 'O nome do usuário não pode ter mais de :max caracteres.',
        ],
       'user_email' => [
            'required' => 'O e-mail do usuário é obrigatório.',
            'email' => 'O e-mail deve ser um endereço de e-mail válido.',
            'max' => 'O e-mail não pode ter mais de :max caracteres.',
            'unique' => 'Este e-mail já está registrado.',
        ],
        'user_password' => [
            'required' => 'A senha é obrigatória.',
            'string' => 'A senha deve ser uma string.',
            'min' => 'A senha deve ter pelo menos :min caracteres.',
            'confirmed' => 'A confirmação da senha não coincide.',
        ],
        'user_address' => [
            'nullable' => 'O endereço do usuário é opcional.',
            'string' => 'O endereço do usuário deve ser uma string.',
            'max' => 'O endereço do usuário não pode ter mais de :max caracteres.',
        ],
        'user_phone' => [
            'nullable' => 'O telefone do usuário é opcional.',
            'string' => 'O telefone do usuário deve ser uma string.',
            'max' => 'O telefone do usuário não pode ter mais de :max caracteres.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atributos de Validação Personalizados
    |--------------------------------------------------------------------------
    */
    'attributes' => [
        //Admin
        'admin_name' => 'nome do administrador',
        'admin_email' => 'e-mail do administrador',
        'admin_password' => 'senha do administrador',
        'admin_address' => 'endereço do administrador',
        'admin_phone' => 'telefone do administrador',
        //Category
        'category_name' => 'nome da categoria',
        'category_description' => 'descrição da categoria',
        //Brand
        'brand_name' => 'nome da marca',
        'brand_description' => 'descrição da  marca',
        //Pack
        'pack_name' => 'nome do pacote',
        'pack_description' => 'descrição do pacote',
        'pack_price' => 'preço do pacote',
        'pack_discount' => 'desconto do pacote',
        //Payment Method
        'payment_method_name' => 'nome do método de pagamento',
        'payment_method_description' => 'descrição do método de pagamento',
        //Product
        'product_name' => 'nome do produto',
        'product_description' => 'descrição do produto',
        'product_price' => 'preço do produto',
        'product_stock' => 'estoque do produto',
        'product_brand_id' => 'marca',
        'product_category_id' => 'categoria',
        //Review
        'review_pack_id' => 'pack',
        'review_user_id' => 'usuário',
        'review_rating' => 'classificação',
        'review_comment' => 'comentário',
        //Sale
        'sale_user_id' => 'usuário',
        'sale_total' => 'total da venda',
        'sale_date' => 'data da venda',
        'sale_payment_method_id' => 'método de pagamento',
         //User
         'user_name' => 'nome do usuário',
         'user_email' => 'e-mail do usuário',
         'user_password' => 'senha do usuário',
         'user_address' => 'endereço do usuário',
         'user_phone' => 'telefone do usuário',
    ],

];
