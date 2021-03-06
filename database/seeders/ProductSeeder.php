<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //1
        $objetoProducto = \App\Models\Product::create([
            'name' => 'Argan Potion Conditioner 221 ml-Firenze',
            'description' => 'Logra un equilibrio entre la humectación y la nutrición del cabello con aceites esenciales que penetran la raíz.
            Su uso continuo repara la hebra desde el interior, logrando una suavidad natural e incrementando el brillo en el cabello.
            Mantiene sano el cabello tinturado y/o tratado con procedimientos de queratina.
            Aviva las tonalidades del cabello.
            Es el complemento diario perfecto del shampoo Argan Potion.

            Modo de uso:  Después de lavar, aplicar una cantidad moderada de acondicionador en las  manos. Distribuir uniformemente de medios a puntas. Enjuagar.',
            'price' => 15300,
            'enable' => true,
            'image' => 'http://gator3303.temp.domains/~annasspa/wp-content/uploads/2020/04/CONDITIONER-ARGAN.png',
            'productType_id' => 2

        ]);
        $objetoProducto->features()->attach([1, 3]);

        //2
        $objetoProducto = \App\Models\Product::create([
            'name' => 'Golden Miracle Intense Shampoo 500 ml',
            'description' => 'Shampoo de uso diario, limpia y aporta fuerza al cabello.

            Enriquecido con extractos naturales de áloe vera, almendras y proteínas de Keratina, que suavizan y restauran el cabello, dando pureza y limpieza al cuero cabelludo, limpiando suavemente la hebra y nutriendo el cabello desde el interior para un acabado suave y sedoso, fórmula suave anti-encrespamiento que proporciona facilidad de peinado y estilizado.

            Ideal para mantenimiento de Tratamientos de keratina, tintes y cabellos procesados.

            Libre de sulfatos, libre de parabenos',
            'price' => 16500,
            'enable' => true,
            'image' => 'http://gator3303.temp.domains/~annasspa/wp-content/uploads/2020/04/c50b15b1-b686-4932-8349-7eab8e42b44d.jpg',
            'productType_id' => 1
        ]);
        $objetoProducto->features()->attach([3]);

        //3
        $objetoProducto = \App\Models\Product::create([
            'name' => 'Coco Potion Leave -In Cream Firenze 221 ml',
            'description' => 'Restaura el brillo y elasticidad del cabello reseco y dañado.
            Ayuda a combatir el frizz y controla los cabellos sueltos.
            Mantiene el cabello naturalmente suave y manejable.
            Protege contra el uso de aparatos térmicos.
            Hidrata y acondiciona la hebra, sin dejar el cabello pesado.
            Todo tipo de Cabello.

            Modo se Uso: Secar con toalla el cabello después del lavado. Aplicar una cantidad suficiente de crema en las manos. Extender uniformemente sobre el cabello hasta los extremos masajeando suavemente los mechones, evitando frotar en el cuero cabelludo. Secar el cabello al aire o con secadora.',
            'price' => 15300,
            'enable' => true,
            'image' => 'http://gator3303.temp.domains/~annasspa/wp-content/uploads/2020/04/leave-in.png',
            'productType_id' => 5
        ]);
        $objetoProducto->features()->attach([2, 3]);

        //4
        $objetoProducto = \App\Models\Product::create([
            'name' => 'Daily Mask -DIFIABA 236ml',
            'description' => 'Tratamiento hidratante de uso diario.

            Triple protección al color en una intensa mascarilla de uso diario que no deja pesado el cabello.

            Beneficios:
            -Repara el cabello dañado.
            -Fórmula auto balanceada.
            -Hidratación intensa para una suavidad palpable
            -Argán y extracto de aceite de aguacate aportan hidratación y brillo.

            Usar para:
            -Reponer la pérdida de hidratación después de la aplicación de color y tratamientos químicos.',
            'price' => 20570,
            'enable' => false,
            'image' => 'http://gator3303.temp.domains/~annasspa/wp-content/uploads/2020/10/DIFIABA-GOOGLE.jpg',
            'productType_id' => 1
        ]);
        $objetoProducto->features()->attach([2, 3]);

        //5
        $objetoProducto = \App\Models\Product::create([
            'name' => 'Genus Keratin -Reestructurante Puntas Abiertas 100ml',
            'description' => 'Tratamiento reestructurante puntas abiertas para el cabello tratado y dañado.

            Enriquecida con Queratina y proteínas de la Seda, reconstruye microfracturas e imperfecciones de la fibra capilar, envolviendo el tallo con una película protectiva anti-crespo y anti-humedad que recompacta la cutícula y sella las puntas abiertas.

            Aplicación: Aplicar pocas gotas en cabellos húmedos o secos.  No enjuagar.

            Ingredientes activos: Queratina hidrolizada, proteína de seda, siliconas hidrolizadas.',
            'price' => 20500,
            'enable' => false,
            'image' => 'http://gator3303.temp.domains/~annasspa/wp-content/uploads/2020/10/GENUS242-Keratin-Tratamiento-Puntas-Abiertas-100ml.jpg',
            'productType_id' => 5
        ]);
        $objetoProducto->features()->attach([1]);


        //6
        $objetoProducto = \App\Models\Product::create([
            'name' => 'Línea Rinse Out Ampoules -Luminous',
            'description' => '-Penetra en la cutícula humectándola profundamente.
            -Aporta mayor brillo al cabello.
            -Especial para cabellos opacos y sin vida.
            -Brinda un film estático fuera de la hebra e hidrata las escamas de la cutícula, permitiendo que éstas se adhieran mejor, dejando una superficie donde se refleja la luz.

            Modo de uso:
            -Remover el exceso de agua.
            -Dividir el cabello en mechones.
            -Masajear cada mechón.
            -Peinar como deseado.
            -Enjuagar.',
            'price' => 20500,
            'enable' => false,
            'image' => 'http://gator3303.temp.domains/~annasspa/wp-content/uploads/2020/10/linea-rinse-out-ampuoles-luminous.jpg',
            'productType_id' => 5
        ]);
        $objetoProducto->features()->attach([3]);

        //7
        $objetoProducto = \App\Models\Product::create([
            'name' => 'Línea Rinse Out Ampuoles -Bio Structure 13ml',
            'description' => 'Ampolla con efecto reparador para cabellos maltratados.
            Deja un cabello saludable y extremadamente suave.
            Penetra en la cutícula, trabajando en la corteza de la hebra.
            Especial para cabellos opacos y sin vida.

            Modo de uso:
            -Remover el exceso de agua.
            -Dividir el cabello en mechones.
            -Masajear cada mechón.
            -Peinar como deseado.
            -Enjuagar.',
            'price' => 18500,
            'enable' => true,
            'image' => 'http://gator3303.temp.domains/~annasspa/wp-content/uploads/2020/10/108138299_3251685734919908_6307327877450814906_n-2.jpg',
            'productType_id' => 5
        ]);
        $objetoProducto->features()->attach([3]);


        //8
        $objetoProducto = \App\Models\Product::create([
            'name' => 'Pro Heat Speed Shield -DIFIABA 131ml',
            'description' => 'Spray de secado y protector térmico.
            Spray de peinado multitarea, protector de calor que al instante repara, fortalece y suaviza el cabello proyectando excelente luminosidad.

            Beneficios:
            -Protección anti quiebre.
            -Soporta herramientas calientes hasta 230 grados.
            -Efecto ultra brillo.
            -Aprobado para extensiones.
            -Libre de alcohol.
            -Libre de agua.

            Usar para:
            -Para cepillado de cabello dos veces más rápido.
            -Protección del calor de las herramientas de estilizado.',
            'price' => 26690,
            'enable' => true,
            'image' => 'http://gator3303.temp.domains/~annasspa/wp-content/uploads/2020/10/DIFIABA-8.jpeg',
            'productType_id' => 6
        ]);
        $objetoProducto->features()->attach([2]);

        //9
        $objetoProducto = \App\Models\Product::create([
            'name' => 'Texturizing Fiber -DIFIABA 59ml',
            'description' => 'Texturizing Fiber

            Acabado semi mate

            Su fórmula hidratante proporciona un control suave, para un peinado definido y con excelentes resultados anti friz. Funciona a la perfección de peinados y cortes con textura.

            Beneficios:
            -Estructuración de mechas.
            -Moldeado y re moldeado.
            -Fijación suave que permite el movimiento.
            -Acción anti humedad.
            -No es grasoso.

            Usar para:
            -Peinados de cualquier largo.
            -Dar forma, rizar o dar textura a cortes extremadamente cortos o puntas exageradas en capas largas.',
            'price' => 16320,
            'enable' => true,
            'image' => 'http://gator3303.temp.domains/~annasspa/wp-content/uploads/2020/10/DIFIABA-8.jpeg',
            'productType_id' => 5
        ]);
        $objetoProducto->features()->attach([2, 3]);
    }
}
