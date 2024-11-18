<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
			[
				'section_title' => [
					'pt' => 'Quem somos?',
					'en' => 'Who are we?',
				],
				'section_content' => [
					'pt' => 'Bem-vindo à Turismo Real, a sua porta de entrada para descobrir os encantos autênticos de Vila Real. Somos uma empresa apaixonada por esta cidade rica em história, cultura e beleza natural, e queremos partilhar consigo a experiência única que é explorar este tesouro escondido de Portugal.',
					'en' => 'Welcome to Turismo Real, your gateway to discovering the authentic charms of Vila Real. We are a company passionate about this city, rich in history, culture, and natural beauty, and we want to share with you the unique experience of exploring this hidden gem of Portugal.'
				]
			],
			[
				'section_title' => [
					'pt' => 'A Nossa Missão:',
					'en' => 'Our Mission:',
				],
				'section_content' => [
					'pt' => 'Na Turismo Real, a nossa missão é proporcionar-lhe uma viagem única e autêntica através dos recantos deslumbrantes de Vila Real. Acreditamos que a verdadeira essência de uma cidade reside nas suas histórias, tradições e nas experiências que oferece. É por isso que nos dedicamos a criar itinerários que vão além dos pontos turísticos comuns, levando-o a descobrir os segredos e as maravilhas que tornam Vila Real tão especial.',
					'en' => 'At Turismo Real, our mission is to provide you with a unique and authentic journey through the stunning corners of Vila Real. We believe that the true essence of a city lies in its stories, traditions, and the experiences it offers. That is why we are dedicated to creating itineraries that go beyond common tourist spots, guiding you to discover the secrets and wonders that make Vila Real so special.'
				]
			],
			[
				'section_title' => [
					'pt' => 'O Que Nos Distingue:',
					'en' => 'What Sets Us Apart:',
				],
				'section_content' => [
					'pt' => 'Diferenciamo-nos ao oferecer experiências turísticas personalizadas, adaptadas aos seus interesses e preferências. Os nossos guias locais são apaixonados por Vila Real e têm um conhecimento profundo da região, garantindo que cada tour seja informativo, envolvente e repleto de histórias fascinantes.',
					'en' => 'We distinguish ourselves by offering personalized tourism experiences tailored to your interests and preferences. Our local guides are passionate about Vila Real and have in-depth knowledge of the region, ensuring that each tour is informative, engaging, and filled with fascinating stories.'
				]
			],
			[
				'section_title' => [
					'pt' => 'Explorando Juntos:',
					'en' => 'Exploring Together:',
				],
				'section_content' => [
					'pt' => 'Na Turismo Real, não somos apenas guias, somos companheiros de viagem. Acreditamos que as melhores memórias são criadas quando se explora em boa companhia, e estamos aqui para garantir que a sua experiência em Vila Real seja memorável e enriquecedora.',
					'en' => 'At Turismo Real, we are not just guides; we are travel companions. We believe that the best memories are created when exploring in good company, and we are here to ensure that your experience in Vila Real is memorable and enriching.'
				]
			],
			[
				'section_title' => [
					'pt' => 'Compromisso com a Sustentabilidade: ',
					'en' => 'Commitment to Sustainability:',
				],
				'section_content' => [
					'pt' => 'Valorizamos a preservação do património cultural e natural de Vila Real. Comprometemo-nos a operar de forma sustentável, minimizando o nosso impacto ambiental e promovendo práticas turísticas responsáveis.',
					'en' => 'We value the preservation of Vila Real\'s cultural and natural heritage. We are committed to operating sustainably, minimizing our environmental impact, and promoting responsible tourism practices.'
				]
			],
			[
				'section_title' => [
					'pt' => 'Descubra Vila Real Connosco:',
					'en' => 'Discover Vila Real With Us:',
				],
				'section_content' => [
					'pt' => 'Convidamo-lo a juntar-se a nós numa jornada pelo coração de Vila Real, onde cada rua conta uma história e cada paisagem é uma obra de arte. Descubra a autenticidade desta cidade connosco, na Turismo Real, e deixe-se encantar pela magia que só Vila Real tem para oferecer.',
					'en' => 'We invite you to join us on a journey through the heart of Vila Real, where each street tells a story and each landscape is a work of art. Discover the authenticity of this city with us, at Turismo Real, and be enchanted by the magic that only Vila Real has to offer.'
				]
			],
		];
        
        foreach($pages as $page) {
            About::create([
                'section_title' => $page['section_title'],
                'section_content' => $page['section_content'],
            ]);
        }
    }
}
