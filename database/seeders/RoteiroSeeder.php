<?php

namespace Database\Seeders;

use App\Models\Roteiro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoteiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roteiros = [
            [
                'titulo' => [
                    'pt' => 'Introdução',
                    'en' => 'Introduction',
                ],
                'texto' => [
                    'pt' => 'Embarque em uma jornada única, em Vila Real. Nosso pacote oferece uma experiência completa, guia especializado, refeições e transporte inclusos. Explore destinos como o Palácio de Mateus, mergulhe na história do Museu da Moeda, e maravilhe-se com as belezas naturais dos Passadiços do Corgo. Uma oportunidade emocionante para explorar, aprender e criar memórias duradouras. Estamos ansiosos para compartilhar esta experiência autêntica consigo.',
                    'en' => 'Embark on a unique journey in Vila Real. Our package offers a complete experience, specialized guide, meals and transportation included. Explore destinations such as Mateus Palace, delve into the history of the Currency Museum, and marvel at the natural beauty of Passadiços do Corgo. An exciting opportunity to explore, learn and create lasting memories. We look forward to sharing this authentic experience with you.'
                ],
                'imagem' => '/images/Asset_3.png',
            ],
            [
                'titulo' => [
                    'pt' => '9:00h Palácio de Mateus:',
                    'en' => '9:00h Palácio de Mateus',
                ],
                'texto' => [
                    'pt' => 'O Palácio de Mateus é uma obra-prima arquitetônica cercada por jardins deslumbrantes. Este local icônico oferece aos visitantes a oportunidade de explorar a rica herança cultural e artística, além de desfrutar da beleza paisagística que o rodeia.',
                    'en' => 'Mateus Palace is an architectural masterpiece surrounded by stunning gardens. This iconic location offers visitors the opportunity to explore the rich cultural and artistic heritage, as well as enjoy the scenic beauty that surrounds it.'
                ],
                'imagem' => '/images/MateusPalace1.jpg',
            ],
            [
                'titulo' => [
                    'pt' => '11:00h Museu da Vila Velha',
                    'en' => '11:00h Museu da Vila Velha',
                ],
                'texto' => [
                    'pt' => 'Este museu proporciona uma viagem através do tempo, explorando a evolução da moeda e seu papel na sociedade. Os visitantes podem admirar uma coleção única de moedas antigas e entender a importância econômica desses artefatos ao longo da história.',
                    'en' => 'This museum provides a journey through time, exploring the evolution of currency and its role in society. Visitors can admire a unique collection of ancient coins and understand the economic importance of these artifacts throughout history.'
                ],
                'imagem' => '/images/MuseuVilaVelha.jpg',
            ],
            [
                'titulo' => [
                    'pt' => '12:10h Pelourinho de Vila Real',
                    'en' => '12:10h Pelourinho de Vila Real',
                ],
                'texto' => [
                    'pt' => 'O Pelourinho de Vila Real é um marco histórico que remonta a tempos antigos. Este monumento simboliza a autonomia local e serve como testemunho da história jurídica e administrativa da região.',
                    'en' => "Vila Real's Pelourinho is a historical landmark that dates back to ancient times. This monument symbolizes local autonomy and serves as testimony to the legal and administrative history of the region."
                ],
                'imagem' => '/images/pelourinho.jpg',
            ],
            [
                'titulo' => [
                    'pt' => '12:15h Pastelaria Gomes',
                    'en' => '12:15h Pastelaria Gomes',
                ],
                'texto' => [
                    'pt' => 'Pastelaria Gomes, o tesouro de Vila Real para os amantes de doces. Explore uma variedade de delícias tradicionais, destacando-se os irresistíveis Pastéis de Nata. Além dos sabores incríveis, desfrute do ambiente acolhedor e da hospitalidade única. Uma parada obrigatória para apreciadores de boa comida, a Pastelaria Gomes é uma experiência culinária que permanecerá na memória.',
                    'en' => "Pastelaria Gomes, Vila Real's treasure for sweet lovers. Explore a variety of traditional delicacies, highlighting the irresistible Pastéis de Nata. In addition to the incredible flavors, enjoy the welcoming atmosphere and unique hospitality. An obligatory stop for lovers of good food, Pastelaria Gomes is a culinary experience that will remain in your memory."
                ],
                'imagem' => '/images/PastelariaGomes.jpg',
            ],
            [
                'titulo' => [
                    'pt' => '14:00h Museu da Moeda',
                    'en' => '14:00h Museu da Moeda',
                ],
                'texto' => [
                    'pt' => 'Este museu proporciona uma viagem através do tempo, explorando a evolução da moeda e seu papel na sociedade. Os visitantes podem admirar uma coleção única de moedas antigas e entender a importância econômica desses artefatos ao longo da história.',
                    'en' => 'This museum offers a journey through time, exploring the evolution of currency and its role in society. Visitors can admire a unique collection of ancient coins and understand the economic importance of these artifacts throughout of history.'
                ],
                'imagem' => '/images/MuseuMoeda.jpg',
            ],
            [
                'titulo' => [
                    'pt' => '15:30h Passadiços do Corgo',
                    'en' => '15:30h Passadiços do Corgo',
                ],
                'texto' => [
                    'pt' => 'Os Passadiços do Corgo proporcionam uma experiência única ao ar livre, permitindo que os visitantes desfrutem da beleza natural da região. Essas passagens elevadas oferecem vistas panorâmicas deslumbrantes, proporcionando uma caminhada relaxante e uma conexão direta com a natureza.',
                    'en' => "The Corgo Walkways provide an experience unique outdoor setting, allowing visitors to enjoy the region's natural beauty. These Elevated walkways offer stunning panoramic views, making for a walkable relaxing and a direct connection with nature."
                ],
                'imagem' => '/images/Passadiços.jpg',
            ],
            [
                'titulo' => [
                    'pt' => 'Hotel Mira Corgo',
                    'en' => 'Hotel Mira Corgo',
                ],
                'texto' => [
                    'pt' => 'O Hotel Mira Corgo é sua escolha de acomodação em Vila Real, oferecendo quartos aconchegantes, serviços de qualidade e uma atmosfera acolhedora. Desfrute de comodidades modernas, refeições deliciosas e uma localização conveniente para explorar a cidade. Sua estadia será uma experiência hospitaleira e memorável no coração de Vila Real.',
                    'en' => 'Hotel Mira Corgo is your accommodation choice in Vila Real, offering cozy rooms, quality services and an atmosphere welcoming. Enjoy modern amenities, delicious meals and a convenient location convenient for exploring the city. Your stay will be a hospitable and memorable in the heart of Vila Real.'
                ],
                'imagem' => '/images/HotelMiraCorgo.jpg',
            ],
        ];

        foreach ($roteiros as $roteiro) {
            Roteiro::create([
                'titulo' => $roteiro['titulo'],
                'texto' => $roteiro['texto'],
                'imagem' => $roteiro['imagem'],
            ]);
        }
    }
}
