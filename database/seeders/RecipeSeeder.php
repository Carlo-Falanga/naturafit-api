<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipes = [
            [
                'title' => 'Pancake ai mirtilli',
                'description' => 'Pancake soffici preparati con farina di avena, serviti con mirtilli freschi e una colata di sciroppo d\'acero. Una colazione che sazia a lungo grazie alle fibre dell\'avena.',
                'image' => 'pancake-ai-mirtilli.jpg',
                'servings' => 2,
                'prep_time' => 10,
                'cook_time' => 15,
                'difficulty' => 'facile',
                'calories' => 380,
                'protein' => 14.50,
                'carbs' => 55.00,
                'fats' => 10.20,
                'fiber' => 4.50,
                'sugar' => 16.00,
                'instructions' => "Frulla 120 g di fiocchi d'avena fino a ottenere una farina fine.\nAggiungi 2 uova, 150 ml di latte, un cucchiaino di lievito per dolci e un pizzico di sale, poi mescola fino a ottenere una pastella liscia.\nLascia riposare la pastella 10 minuti: assorbirà il liquido e diventerà più densa.\nScalda una padella antiaderente a fuoco medio e ungila appena con un filo d'olio.\nVersa un mestolo di pastella per volta e cuoci finché non si formano delle bollicine in superficie, poi gira e prosegui per un altro minuto.\nImpila i pancake e completa con i mirtilli freschi e lo sciroppo d'acero.",
                'category' => 'Colazione',
                'tags' => ['Vegetariano', 'Proteico'],
            ],
            [
                'title' => 'Insalata caprese',
                'description' => 'Pomodori maturi, mozzarella di bufala e basilico fresco: tre ingredienti, nessuna cottura. Il piatto simbolo della cucina mediterranea estiva.',
                'image' => 'insalata-caprese.jpg',
                'servings' => 2,
                'prep_time' => 10,
                'cook_time' => 0,
                'difficulty' => 'facile',
                'calories' => 330,
                'protein' => 18.00,
                'carbs' => 8.50,
                'fats' => 25.00,
                'fiber' => 2.00,
                'sugar' => 6.50,
                'instructions' => "Taglia 3 pomodori maturi a fette di mezzo centimetro.\nAffetta 250 g di mozzarella di bufala dello stesso spessore.\nAlterna le fette di pomodoro e mozzarella sul piatto, sovrapponendole leggermente.\nInserisci le foglie di basilico fresco tra uno strato e l'altro.\nCondisci con olio extravergine d'oliva, sale e pepe nero macinato al momento.\nServi subito, a temperatura ambiente: il freddo del frigorifero spegne il profumo del pomodoro.",
                'category' => 'Pranzo',
                'tags' => ['Vegetariano', 'Low-carb', 'Veloce'],
            ],
            [
                'title' => 'Vellutata di zucca e carote',
                'description' => 'Zucca e carote cotte lentamente e frullate fino a diventare una crema densa. Si conserva in frigorifero per tre giorni e migliora il giorno dopo.',
                'image' => 'vellutata-di-zucca-e-carote.jpg',
                'servings' => 4,
                'prep_time' => 15,
                'cook_time' => 35,
                'difficulty' => 'facile',
                'calories' => 190,
                'protein' => 4.00,
                'carbs' => 28.00,
                'fats' => 6.50,
                'fiber' => 6.00,
                'sugar' => 12.00,
                'instructions' => "Pulisci 800 g di zucca, eliminando buccia e semi, e tagliala a cubi di circa 3 cm.\nPela 3 carote e tagliale a rondelle spesse.\nIn una pentola capiente, fai appassire una cipolla tritata in due cucchiai di olio extravergine.\nUnisci zucca e carote, mescola per un paio di minuti, poi copri con brodo vegetale caldo.\nCuoci a fuoco medio per 30 minuti, finché le verdure non si sfaldano sotto la forchetta.\nFrulla con il mixer a immersione fino a ottenere una crema liscia, aggiustando la densità con il brodo.\nCompleta nel piatto con un filo d'olio di semi di zucca e una macinata di pepe.",
                'category' => 'Cena',
                'tags' => ['Vegano', 'Senza glutine', 'Light'],
            ],
            [
                'title' => 'Hummus di ceci',
                'description' => 'La crema di ceci mediorientale, con tahina, limone e aglio. Si prepara in dieci minuti se parti da ceci già lessati ed è perfetta da spalmare o da usare come salsa per le verdure crude.',
                'image' => 'hummus-di-ceci.jpg',
                'servings' => 4,
                'prep_time' => 10,
                'cook_time' => 0,
                'difficulty' => 'facile',
                'calories' => 260,
                'protein' => 9.00,
                'carbs' => 24.00,
                'fats' => 14.00,
                'fiber' => 8.00,
                'sugar' => 3.00,
                'instructions' => "Scola 400 g di ceci lessati e sciacquali sotto l'acqua corrente, tenendo da parte qualche cucchiaio di liquido di governo.\nVersa i ceci nel mixer con 3 cucchiai di tahina, il succo di un limone e uno spicchio d'aglio privato dell'anima.\nFrulla aggiungendo il liquido tenuto da parte, poco alla volta, finché la crema non diventa liscia e morbida.\nAggiusta di sale e regola l'acidità con altro limone se serve.\nTrasferisci in una ciotola, allarga la crema con il dorso del cucchiaio creando un solco circolare.\nCompleta con olio extravergine, i ceci interi tenuti da parte e una spolverata di paprika dolce.",
                'category' => 'Snack',
                'tags' => ['Vegano', 'Senza glutine', 'Economico'],
            ],
            [
                'title' => 'Torta di mele',
                'description' => 'Torta di mele dalla base sottile e il ripieno abbondante, profumata alla cannella. Il classico dolce di casa, senza burro: la morbidezza arriva dalle mele stesse.',
                'image' => 'torta-di-mele.jpg',
                'servings' => 8,
                'prep_time' => 25,
                'cook_time' => 45,
                'difficulty' => 'media',
                'calories' => 290,
                'protein' => 5.00,
                'carbs' => 45.00,
                'fats' => 10.00,
                'fiber' => 3.50,
                'sugar' => 22.00,
                'instructions' => "Sbuccia 5 mele, tagliane 4 a fettine sottili e una a cubetti.\nIn una ciotola sbatti 2 uova con 100 g di zucchero fino a ottenere un composto chiaro e spumoso.\nUnisci 120 ml di olio di semi, 150 ml di latte e la scorza grattugiata di un limone.\nIncorpora 250 g di farina setacciata con una bustina di lievito, mescolando dal basso verso l'alto.\nAggiungi le mele a cubetti all'impasto e versa il tutto in una teglia da 24 cm foderata di carta forno.\nDisponi le fettine di mela sulla superficie a raggiera e spolvera con cannella e zucchero di canna.\nInforna a 180 °C in forno statico per 45 minuti: la torta è pronta quando lo stecchino esce asciutto.",
                'category' => 'Dolci',
                'tags' => ['Vegetariano', 'Economico'],
            ],
            [
                'title' => 'Pasta integrale al pesto',
                'description' => 'Pesto di basilico pestato al mortaio su pasta integrale. Il pesto non va mai cotto: si manteca fuori dal fuoco con un mestolo di acqua di cottura.',
                'image' => 'pasta-integrale-al-pesto.jpg',
                'servings' => 4,
                'prep_time' => 15,
                'cook_time' => 12,
                'difficulty' => 'facile',
                'calories' => 520,
                'protein' => 17.00,
                'carbs' => 68.00,
                'fats' => 20.00,
                'fiber' => 9.00,
                'sugar' => 4.00,
                'instructions' => "Lava e asciuga con delicatezza 50 g di foglie di basilico: l'acqua residua ossida il pesto.\nPesta nel mortaio uno spicchio d'aglio con un pizzico di sale grosso, poi unisci il basilico poco per volta.\nAggiungi 15 g di pinoli e continua a pestare fino a ottenere una crema.\nIncorpora 40 g di parmigiano e 20 g di pecorino grattugiati, poi versa a filo 80 ml di olio extravergine.\nCuoci 320 g di pasta integrale in abbondante acqua salata, scolandola un minuto prima del tempo indicato.\nManteca la pasta con il pesto fuori dal fuoco, allungando con un mestolo di acqua di cottura.\nServi subito, con qualche foglia di basilico fresco.",
                'category' => 'Primi piatti',
                'tags' => ['Vegetariano', 'Veloce'],
            ],
            [
                'title' => 'Minestrone di verdure',
                'description' => 'Minestrone con fagioli, verdure di stagione e pasta corta. Una pentola basta per quattro porzioni e si congela senza perdere consistenza.',
                'image' => 'minestrone-di-verdure.jpg',
                'servings' => 4,
                'prep_time' => 20,
                'cook_time' => 50,
                'difficulty' => 'facile',
                'calories' => 240,
                'protein' => 10.00,
                'carbs' => 36.00,
                'fats' => 5.50,
                'fiber' => 10.00,
                'sugar' => 8.00,
                'instructions' => "Prepara un soffritto con una cipolla, una carota e una costa di sedano tritati finemente, in tre cucchiai di olio extravergine.\nAggiungi 2 patate e 2 zucchine a cubetti e lascia insaporire per cinque minuti.\nUnisci 300 g di pomodori pelati schiacciati e 250 g di fagioli borlotti già lessati.\nCopri con un litro e mezzo di brodo vegetale e porta a bollore.\nAbbassa la fiamma e cuoci per 40 minuti a pentola semicoperta, mescolando ogni tanto.\nAggiungi 150 g di pasta corta e portala a cottura direttamente nel minestrone.\nLascia riposare cinque minuti prima di servire, con un filo d'olio a crudo.",
                'category' => 'Primi piatti',
                'tags' => ['Vegano', 'Light', 'Economico'],
            ],
            [
                'title' => 'Salmone alla griglia con asparagi',
                'description' => 'Filetto di salmone scottato sulla griglia con asparagi e limone bruciato. Ricco di omega-3 e pronto in meno di mezz\'ora.',
                'image' => 'salmone-alla-griglia-con-asparagi.jpg',
                'servings' => 2,
                'prep_time' => 10,
                'cook_time' => 15,
                'difficulty' => 'media',
                'calories' => 430,
                'protein' => 34.00,
                'carbs' => 22.00,
                'fats' => 22.00,
                'fiber' => 4.00,
                'sugar' => 3.00,
                'instructions' => "Tampona 2 filetti di salmone da 180 g con carta da cucina: la superficie asciutta scotta meglio.\nCondisci con olio, sale, pepe e la scorza di mezzo limone, poi lascia riposare 10 minuti a temperatura ambiente.\nElimina la parte legnosa di 300 g di asparagi e sbollentali per 3 minuti in acqua salata.\nScalda bene una griglia e adagia il salmone dal lato della pelle, senza spostarlo, per 5 minuti.\nGira il filetto e prosegui per altri 3 minuti: il cuore deve restare appena rosato.\nGriglia gli asparagi e mezzo limone tagliato a metà, fino a segnarli.\nServi il salmone su un letto di riso basmati, con gli asparagi e il limone grigliato da spremere sopra.",
                'category' => 'Secondi piatti',
                'tags' => ['Proteico', 'Senza glutine', 'Senza lattosio'],
            ],
            [
                'title' => 'Pollo arrosto alle erbe',
                'description' => 'Pollo intero arrostito con rosmarino, timo e limone. La pelle croccante si ottiene solo asciugando bene il pollo e partendo con il forno già caldo.',
                'image' => 'pollo-arrosto-alle-erbe.jpg',
                'servings' => 4,
                'prep_time' => 20,
                'cook_time' => 80,
                'difficulty' => 'media',
                'calories' => 390,
                'protein' => 45.00,
                'carbs' => 2.00,
                'fats' => 22.00,
                'fiber' => 0.50,
                'sugar' => 1.00,
                'instructions' => "Togli il pollo dal frigorifero un'ora prima e asciugalo accuratamente dentro e fuori.\nPrepara un trito di rosmarino, timo, salvia e aglio, mescolalo con olio extravergine, sale e pepe.\nMassaggia il pollo con il trito, facendone scivolare una parte sotto la pelle del petto.\nRiempi la cavità con mezzo limone e qualche rametto di erbe intero, poi lega le cosce con spago da cucina.\nInforna a 200 °C per 20 minuti, poi abbassa a 180 °C e prosegui per un'ora.\nOgni 20 minuti bagna il pollo con il fondo di cottura raccolto sul fondo della teglia.\nLascia riposare 10 minuti prima di tagliarlo: i succhi si ridistribuiscono e la carne resta morbida.",
                'category' => 'Secondi piatti',
                'tags' => ['Proteico', 'Low-carb', 'Senza lattosio'],
            ],
            [
                'title' => 'Insalata di arance alla siciliana',
                'description' => 'Arance a vivo, finocchio croccante e olive nere. Il contorno invernale siciliano, quando le arance sono al massimo della dolcezza.',
                'image' => 'insalata-di-arance-alla-siciliana.jpg',
                'servings' => 4,
                'prep_time' => 15,
                'cook_time' => 0,
                'difficulty' => 'facile',
                'calories' => 150,
                'protein' => 3.00,
                'carbs' => 20.00,
                'fats' => 7.00,
                'fiber' => 5.00,
                'sugar' => 14.00,
                'instructions' => "Pela 4 arance a vivo, eliminando completamente la parte bianca, e raccogli il succo che cola.\nTaglia le arance a spicchi o a rondelle e disponile in una ciotola larga.\nAffetta finemente un finocchio con la mandolina e immergilo in acqua fredda per cinque minuti, così resta croccante.\nScola il finocchio e uniscilo alle arance insieme a una manciata di olive nere denocciolate.\nCondisci con il succo raccolto, olio extravergine, sale e pepe nero.\nLascia riposare 10 minuti in frigorifero prima di servire, per far amalgamare i sapori.",
                'category' => 'Contorni',
                'tags' => ['Vegano', 'Light', 'Veloce'],
            ],
        ];

        // cancello le ricette vecchie
        Recipe::query()->delete();

        foreach ($recipes as $recipe) {

            // recupero la categoria e i tag associati alla ricetta
            $category = Category::where('name', $recipe['category'])->first();
            $tags = Tag::whereIn('name', $recipe['tags'])->pluck('id');

            $newRecipe = new Recipe();

            $newRecipe->title = $recipe['title'];
            $newRecipe->description = $recipe['description'];
            $newRecipe->image = 'recipes/' . $recipe['image'];
            $newRecipe->servings = $recipe['servings'];
            $newRecipe->prep_time = $recipe['prep_time'];
            $newRecipe->cook_time = $recipe['cook_time'];
            $newRecipe->difficulty = $recipe['difficulty'];
            $newRecipe->calories = $recipe['calories'];
            $newRecipe->protein = $recipe['protein'];
            $newRecipe->carbs = $recipe['carbs'];
            $newRecipe->fats = $recipe['fats'];
            $newRecipe->fiber = $recipe['fiber'];
            $newRecipe->sugar = $recipe['sugar'];
            $newRecipe->instructions = $recipe['instructions'];
            $newRecipe->category_id = $category->id;

            $newRecipe->save();

            $newRecipe->tags()->attach($tags);
        }
    }
}
