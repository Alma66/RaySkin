<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('productos')->insert([
            // Limpiadores Faciales
            ['name' => 'Regenerist Regenerating Cream Cleanser', 'description' => 'Limpiador facial que exfolia suavemente y deja la piel más radiante.', 'price' => 30.00, 'stock' => 100, 'brand_id' => 10, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Normaderm Phytosolution Purifying Cleansing Gel', 'description' => 'Gel limpiador que purifica y limpia en profundidad.', 'price' => 25.00, 'stock' => 150, 'brand_id' => 9, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ultra Facial Cleanser', 'description' => 'Limpiador facial suave que elimina impurezas sin resecar la piel.', 'price' => 28.00, 'stock' => 120, 'brand_id' => 8, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hydro Boost Hydrating Cleansing Gel', 'description' => 'Gel limpiador que hidrata mientras limpia.', 'price' => 22.00, 'stock' => 180, 'brand_id' => 4, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hydrating Facial Cleanser', 'description' => 'Limpiador facial que mantiene la piel hidratada y suave.', 'price' => 20.00, 'stock' => 200, 'brand_id' => 1, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Tónicos
            ['name' => 'Luminous Tone Perfecting Treatment', 'description' => 'Tónico que ilumina y mejora el tono de la piel.', 'price' => 32.00, 'stock' => 90, 'brand_id' => 10, 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mineralizing Thermal Water', 'description' => 'Agua termal mineralizante que fortalece la piel.', 'price' => 30.00, 'stock' => 110, 'brand_id' => 9, 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Calendula Herbal Extract Toner', 'description' => 'Tónico herbal con extracto de caléndula para calmar la piel.', 'price' => 35.00, 'stock' => 80, 'brand_id' => 8, 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alcohol-Free Toner', 'description' => 'Tónico sin alcohol que equilibra y refresca la piel.', 'price' => 28.00, 'stock' => 140, 'brand_id' => 4, 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hydrating Toner', 'description' => 'Tónico hidratante que mejora la textura y el equilibrio de la piel.', 'price' => 25.00, 'stock' => 160, 'brand_id' => 1, 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],

            // Hidratantes
            ['name' => 'Regenerist Micro-Sculpting Cream', 'description' => 'Crema hidratante que esculpe y reafirma la piel.', 'price' => 45.00, 'stock' => 85, 'brand_id' => 10, 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aqualia Thermal Rich Cream', 'description' => 'Crema rica en minerales que hidrata intensamente.', 'price' => 50.00, 'stock' => 95, 'brand_id' => 9, 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ultra Facial Cream', 'description' => 'Crema facial ultra hidratante para piel seca.', 'price' => 40.00, 'stock' => 100, 'brand_id' => 8, 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hydro Boost Water Gel', 'description' => 'Gel hidratante ligero que proporciona una hidratación profunda.', 'price' => 38.00, 'stock' => 130, 'brand_id' => 4, 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Moisturizing Cream', 'description' => 'Crema hidratante que restaura y protege la barrera de la piel.', 'price' => 35.00, 'stock' => 150, 'brand_id' => 1, 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Protectores Solares
            ['name' => 'Regenerist Mineral Sunscreen SPF 30', 'description' => 'Protector solar mineral con SPF 30 que protege y revitaliza.', 'price' => 40.00, 'stock' => 70, 'brand_id' => 10, 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Capital Soleil SPF 60', 'description' => 'Protector solar de alta protección con SPF 60.', 'price' => 45.00, 'stock' => 75, 'brand_id' => 9, 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Anthelios Melt-in Milk Sunscreen SPF 60', 'description' => 'Protector solar con textura ligera y alta protección.', 'price' => 48.00, 'stock' => 65, 'brand_id' => 5, 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ultra Sheer Dry-Touch Sunscreen SPF 70', 'description' => 'Protector solar de alta protección con textura seca.', 'price' => 40.00, 'stock' => 80, 'brand_id' => 4, 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hydrating Mineral Sunscreen SPF 30', 'description' => 'Protector solar mineral hidratante con SPF 30.', 'price' => 38.00, 'stock' => 85, 'brand_id' => 1, 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            // Exfoliantes
            ['name' => 'Regenerist Detoxifying Pore Scrub', 'description' => 'Exfoliante que limpia y detoxifica los poros.', 'price' => 28.00, 'stock' => 90, 'brand_id' => 10, 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Youthmud Tinglexfoliate Treatment', 'description' => 'Tratamiento exfoliante que rejuvenece la piel.', 'price' => 55.00, 'stock' => 50, 'brand_id' => 7, 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Glycolic Acid 7% Toning Solution', 'description' => 'Solución exfoliante con ácido glicólico para mejorar la textura.', 'price' => 28.00, 'stock' => 100, 'brand_id' => 6, 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Micro-Exfoliating Scrub', 'description' => 'Exfoliante microabrasivo que limpia suavemente.', 'price' => 40.00, 'stock' => 85, 'brand_id' => 8, 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Skin Perfecting 2% BHA Liquid Exfoliant', 'description' => 'Exfoliante líquido con BHA para una piel más suave.', 'price' => 30.00, 'stock' => 90, 'brand_id' => 2, 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],

            // Mascarillas
            ['name' => 'Regenerist Retinol 24 Max Night Face Mask', 'description' => 'Máscara nocturna con retinol para una piel renovada.', 'price' => 50.00, 'stock' => 60, 'brand_id' => 10, 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Supermud Activated Charcoal Treatment', 'description' => 'Tratamiento con carbón activado para limpiar los poros.', 'price' => 60.00, 'stock' => 55, 'brand_id' => 7, 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'AHA 30% + BHA 2% Peeling Solution', 'description' => 'Solución de exfoliación con AHA y BHA para una piel radiante.', 'price' => 40.00, 'stock' => 70, 'brand_id' => 6, 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Effaclar Clay Mask', 'description' => 'Mascarilla de arcilla para pieles grasas.', 'price' => 35.00, 'stock' => 80, 'brand_id' => 5, 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Clarifying Clay Masque', 'description' => 'Mascarilla de arcilla clarificante para piel mixta a grasa.', 'price' => 45.00, 'stock' => 65, 'brand_id' => 8, 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],

            // Eyes Creams
            ['name' => 'Regenerist Retinol 24 Night Eye Cream', 'description' => 'Crema de noche con retinol para el área de los ojos.', 'price' => 35.00, 'stock' => 90, 'brand_id' => 10, 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Creamy Eye Treatment with Avocado', 'description' => 'Tratamiento para el área de los ojos con aguacate.', 'price' => 42.00, 'stock' => 80, 'brand_id' => 8, 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hydro Boost Eye Gel-Cream', 'description' => 'Gel-crema para los ojos que hidrata y refresca.', 'price' => 30.00, 'stock' => 100, 'brand_id' => 4, 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pigmentclar Eyes', 'description' => 'Tratamiento para el área de los ojos que reduce las manchas.', 'price' => 50.00, 'stock' => 70, 'brand_id' => 5, 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Eye Repair Cream', 'description' => 'Crema reparadora para el área de los ojos.', 'price' => 28.00, 'stock' => 120, 'brand_id' => 1, 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],

            // Sérums
            ['name' => 'Regenerist Max Hydrating Serum', 'description' => 'Sérum ultra hidratante para una piel más firme.', 'price' => 50.00, 'stock' => 75, 'brand_id' => 10, 'category_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Minéral 89 Hyaluronic Acid Face Serum', 'description' => 'Sérum con ácido hialurónico que fortifica la piel.', 'price' => 45.00, 'stock' => 85, 'brand_id' => 9, 'category_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Niacinamide 10% + Zinc 1%', 'description' => 'Sérum con niacinamida y zinc para mejorar el tono y textura.', 'price' => 28.00, 'stock' => 100, 'brand_id' => 6, 'category_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'C E Ferulic', 'description' => 'Sérum antioxidante con vitamina C, E y ferúlico.', 'price' => 150.00, 'stock' => 60, 'brand_id' => 8, 'category_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['name' => '10% Niacinamide Booster', 'description' => 'Sérum concentrado con niacinamida para tratar imperfecciones.', 'price' => 35.00, 'stock' => 90, 'brand_id' => 2, 'category_id' => 8, 'created_at' => now(), 'updated_at' => now()],

            // Cremas
            ['name' => 'Regenerist Micro-Sculpting Cream', 'description' => 'Crema que esculpe y reafirma la piel.', 'price' => 45.00, 'stock' => 100, 'brand_id' => 10, 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'LiftActiv Supreme Anti-Aging Face Cream', 'description' => 'Crema antienvejecimiento para una piel más firme.', 'price' => 50.00, 'stock' => 85, 'brand_id' => 9, 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ultra Facial Cream', 'description' => 'Crema facial ultra hidratante.', 'price' => 40.00, 'stock' => 120, 'brand_id' => 8, 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Emollience', 'description' => 'Crema emoliente para piel seca.', 'price' => 55.00, 'stock' => 75, 'brand_id' => 8, 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Moisturizing Cream', 'description' => 'Crema hidratante que restaura la barrera de la piel.', 'price' => 35.00, 'stock' => 130, 'brand_id' => 1, 'category_id' => 9, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
