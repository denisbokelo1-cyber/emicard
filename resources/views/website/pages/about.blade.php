@extends('layouts.index', ['nav' => true, 'banner' => false, 'footer' => true, 'cookie' => true, 'setting' => true,
'title' => __('About us')])

@section('content')
{{-- About us page (modern redesign) --}}
<section class="py-12 lg:py-16 px-4 bg-gradient-to-b from-white to-[#F8FAFC]">
    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 700ms ease, transform 700ms ease;
        }
        .fade-in.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <div class="max-w-6xl mx-auto">
        {{-- HERO --}}
        <div class="text-center mb-10 lg:mb-14 fade-in" data-fade>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-[#2563EB]">
                Bienvenue sur EMICARD
            </h1>
            <p class="mt-4 text-base sm:text-lg text-gray-700 max-w-3xl mx-auto">
                Une plateforme pensée pour transformer la présentation professionnelle en une expérience moderne, élégante et accessible.
            </p>

            {{-- Encadré info --}}
            <div class="mt-7 inline-flex items-start gap-3 px-5 py-4 rounded-[20px] bg-[#DBEAFE] border border-blue-100 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#2563EB] shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 9v4" />
                    <path d="M12 17h.01" />
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                </svg>
                <div class="text-left">
                    <p class="text-gray-800 font-semibold">Notre approche</p>
                    <p class="text-gray-700 text-sm sm:text-base">Des contenus structurés en cartes, une typographie lisible et une navigation fluide.</p>
                </div>
            </div>
        </div>

        {{-- Sections --}}
        @php
            $sections = [
                [
                    'icon' => 'sparkles',
                    'title' => 'Une plateforme moderne',
                    'blocks' => [
                        [
                            'type' => 'p',
                            'text' => 'Dans un monde où les relations professionnelles évoluent à une vitesse sans précédent, la manière de se présenter est devenue un véritable facteur de différenciation. Les cartes de visite traditionnelles, souvent perdues, oubliées ou rapidement obsolètes, ne répondent plus aux exigences d\'un environnement où la rapidité, la connectivité et l\'accessibilité sont essentielles.'
                        ],
                        ['type' => 'p', 'text' => '**EMICARD** est née de cette transformation.'],
                        ['type' => 'p', 'text' => 'Notre mission est de réinventer la façon dont les professionnels, les entreprises et les organisations présentent leur identité, développent leur réseau et créent des opportunités d\'affaires. Nous avons conçu une plateforme numérique moderne qui remplace la carte de visite classique par une expérience interactive, intelligente et accessible depuis n\'importe quel appareil.'],
                        ['type' => 'p', 'text' => 'EMICARD n\'est pas simplement une carte de visite numérique. C\'est une véritable plateforme de visibilité professionnelle qui permet à chaque utilisateur de mettre en valeur son identité, son activité, ses compétences, ses services et ses produits à travers une présentation élégante, dynamique et constamment à jour.'],
                        ['type' => 'p', 'text' => 'Nous croyons qu\'une première impression peut ouvrir la porte à une collaboration, un partenariat, une vente ou une opportunité de carrière. C\'est pourquoi nous avons imaginé une solution qui facilite ces connexions tout en offrant une expérience fluide, professionnelle et innovante.'],
                    ],
                ],
                [
                    'icon' => 'target',
                    'title' => 'Notre vision',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Notre vision est de devenir la plateforme de référence en matière d\'identité professionnelle numérique en Afrique et dans le monde.'],
                        ['type' => 'p', 'text' => 'Nous souhaitons contribuer à une nouvelle génération de professionnels capables de présenter leur activité de manière moderne, instantanée et efficace, sans les contraintes des supports physiques.'],
                        ['type' => 'p', 'text' => 'Nous imaginons un monde où chaque entrepreneur, commerçant, artisan, médecin, avocat, ingénieur, étudiant, institution ou entreprise possède une identité numérique complète, facilement partageable et accessible partout.'],
                        ['type' => 'p', 'text' => 'Notre ambition est de connecter des millions de professionnels grâce à une technologie simple, élégante et performante qui facilite les échanges humains et accélère les opportunités économiques.'],
                    ],
                ],
                [
                    'icon' => 'handshake',
                    'title' => 'Notre mission',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Chez EMICARD, notre mission est de démocratiser les cartes de visite numériques et de permettre à chaque professionnel de disposer d\'un outil moderne pour développer sa visibilité.'],
                        ['type' => 'p', 'text' => 'Nous voulons simplifier les échanges professionnels grâce à une plateforme qui permet de partager instantanément toutes les informations importantes d\'une personne ou d\'une entreprise.'],
                        ['type' => 'p', 'text' => 'Notre mission consiste également à accompagner les petites, moyennes et grandes entreprises dans leur transformation numérique en mettant à leur disposition une solution professionnelle, évolutive et accessible.'],
                        ['type' => 'p', 'text' => 'Nous souhaitons offrir à chacun les moyens de construire une présence numérique crédible, attractive et performante sans nécessiter de compétences techniques particulières.'],
                    ],
                ],
                [
                    'icon' => 'heart',
                    'title' => 'Notre philosophie',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Nous sommes convaincus que chaque professionnel mérite d\'être visible.'],
                        ['type' => 'p', 'text' => 'Peu importe la taille de son entreprise, son secteur d\'activité ou son pays.'],
                        ['type' => 'p', 'text' => 'Chaque idée mérite d\'être découverte.'],
                        ['type' => 'p', 'text' => 'Chaque talent mérite d\'être connu.'],
                        ['type' => 'p', 'text' => 'Chaque entreprise mérite de développer son réseau.'],
                        ['type' => 'p', 'text' => 'Chaque entrepreneur mérite des outils performants.'],
                        ['type' => 'p', 'text' => 'Chaque opportunité mérite d\'être saisie.'],
                        ['type' => 'p', 'text' => 'C\'est cette conviction qui guide chacune de nos décisions.'],
                    ],
                ],
                [
                    'icon' => 'users',
                    'title' => 'Une plateforme pensée pour tous',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'EMICARD s\'adresse à toutes les personnes qui souhaitent développer leur image professionnelle.'],
                        ['type' => 'p', 'text' => 'Notre plateforme est utilisée aussi bien par :'],
                        ['type' => 'ul', 'items' => [
                            'les entrepreneurs',
                            'les commerçants',
                            'les PME',
                            'les grandes entreprises',
                            'les consultants',
                            'les freelances',
                            'les agences',
                            'les médecins',
                            'les pharmacies',
                            'les hôpitaux',
                            'les avocats',
                            'les architectes',
                            'les ingénieurs',
                            'les notaires',
                            'les restaurants',
                            'les hôtels',
                            'les banques',
                            'les établissements scolaires',
                            'les universités',
                            'les ONG',
                            'les associations',
                            'les artistes',
                            'les créateurs de contenu',
                            'les influenceurs',
                            'les organisations internationales',
                            'les institutions publiques',
                        ]],
                        ['type' => 'p', 'text' => 'Quelle que soit votre profession, EMICARD vous permet de disposer d\'une présence numérique professionnelle adaptée à vos besoins.'],
                    ],
                ],
                [
                    'icon' => 'spark',
                    'title' => 'Plus qu\'une simple carte de visite',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'EMICARD va bien au-delà du partage de coordonnées.'],
                        ['type' => 'p', 'text' => 'Notre plateforme permet de créer une véritable vitrine numérique dans laquelle chaque utilisateur peut présenter son entreprise, raconter son histoire, mettre en avant son expertise, valoriser ses réalisations, publier ses produits, présenter ses services, afficher son portfolio, partager ses réseaux sociaux, diffuser des vidéos, intégrer une galerie photo, publier des témoignages clients, proposer une prise de rendez-vous et faciliter le contact avec ses visiteurs.'],
                        ['type' => 'p', 'text' => 'Chaque carte devient un espace de communication vivant qui évolue avec son propriétaire.'],
                    ],
                ],
                [
                    'icon' => 'refresh',
                    'title' => 'Une identité numérique toujours à jour',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Contrairement aux cartes imprimées qui deviennent rapidement obsolètes, EMICARD permet de modifier vos informations en quelques secondes.'],
                        ['type' => 'p', 'text' => 'Un changement de numéro ?'],
                        ['type' => 'p', 'text' => 'Une nouvelle adresse ?'],
                        ['type' => 'p', 'text' => 'Une nouvelle fonction ?'],
                        ['type' => 'p', 'text' => 'Un nouveau logo ?'],
                        ['type' => 'p', 'text' => 'Une nouvelle offre ?'],
                        ['type' => 'p', 'text' => 'Toutes vos mises à jour sont immédiatement disponibles pour toutes les personnes qui consultent votre carte. Vous ne perdez plus de temps à réimprimer des centaines de cartes papier.'],
                    ],
                ],
                [
                    'icon' => 'arrow',
                    'title' => 'Favoriser les connexions professionnelles',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Les grandes opportunités commencent souvent par une simple rencontre.'],
                        ['type' => 'p', 'text' => 'EMICARD facilite ces rencontres en permettant de partager votre identité professionnelle instantanément grâce à un lien, un QR Code ou une carte NFC compatible.'],
                        ['type' => 'p', 'text' => 'En quelques secondes, vos interlocuteurs peuvent découvrir votre activité, enregistrer vos coordonnées, visiter votre site internet, consulter vos réseaux sociaux ou vous contacter directement.'],
                        ['type' => 'p', 'text' => 'Nous transformons chaque échange en une véritable opportunité de collaboration.'],
                    ],
                ],
                [
                    'icon' => 'bolt',
                    'title' => 'Accompagner la transformation numérique',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'La digitalisation n\'est plus une option.'],
                        ['type' => 'p', 'text' => 'Elle constitue aujourd\'hui un levier essentiel de croissance, de compétitivité et de modernisation.'],
                        ['type' => 'p', 'text' => 'EMICARD accompagne cette évolution en proposant une solution simple à adopter, intuitive à utiliser et suffisamment puissante pour répondre aux besoins des professionnels comme des grandes organisations.'],
                        ['type' => 'p', 'text' => 'Notre objectif est de rendre les technologies numériques accessibles à tous.'],
                    ],
                ],
                [
                    'icon' => 'briefcase',
                    'title' => 'Une plateforme orientée vers le développement des entreprises',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'EMICARD a été conçu pour aider les entreprises à gagner en visibilité.'],
                        ['type' => 'p', 'text' => 'Chaque fonctionnalité de la plateforme répond à un objectif précis :'],
                        ['type' => 'ul', 'items' => [
                            'présenter efficacement son activité',
                            'renforcer sa crédibilité',
                            'faciliter la prise de contact',
                            'développer son réseau',
                            'promouvoir ses produits et services',
                            'améliorer son image de marque',
                            'générer davantage d\'opportunités commerciales',
                        ]],
                        ['type' => 'p', 'text' => 'Nous croyons que les outils numériques doivent contribuer directement à la croissance des entreprises.'],
                    ],
                ],
                [
                    'icon' => 'user',
                    'title' => 'Innovation et simplicité',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Nous accordons une importance particulière à l\'expérience utilisateur.'],
                        ['type' => 'p', 'text' => 'Notre ambition est de proposer une plateforme à la fois puissante et facile à utiliser. Quelques minutes suffisent pour créer une carte professionnelle complète.'],
                        ['type' => 'p', 'text' => 'Aucune compétence technique n\'est nécessaire. Notre interface intuitive permet à chacun de personnaliser sa carte selon son identité et ses besoins.'],
                    ],
                ],
                [
                    'icon' => 'globe',
                    'title' => 'Une plateforme évolutive',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Le monde numérique évolue rapidement. EMICARD évolue avec lui.'],
                        ['type' => 'p', 'text' => 'Notre équipe travaille continuellement à l\'amélioration de la plateforme afin d\'intégrer de nouvelles fonctionnalités, de renforcer les performances et d\'offrir une expérience toujours plus moderne.'],
                        ['type' => 'p', 'text' => 'Notre engagement est de proposer une solution durable, capable d\'accompagner les besoins des utilisateurs aujourd\'hui comme demain.'],
                    ],
                ],
                [
                    'icon' => 'star',
                    'title' => 'Nos valeurs',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Les valeurs qui guident EMICARD sont au cœur de chacune de nos actions :'],
                        ['type' => 'ul', 'items' => [
                            'Innovation (simplifier les échanges professionnels)',
                            'Excellence (une plateforme fiable, performante et agréable)',
                            'Accessibilité (offrir les mêmes opportunités à tous)',
                            'Simplicité (les meilleures technologies restent faciles à utiliser)',
                            'Professionnalisme (une image moderne et valorisante)',
                            'Collaboration (les plus belles réussites naissent des rencontres)',
                            'Confiance (protéger les données et assurer la sécurité)',
                        ]],
                    ],
                ],
                [
                    'icon' => 'shield-check',
                    'title' => 'Notre engagement',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Nous nous engageons à offrir à chaque utilisateur une plateforme capable de valoriser son identité professionnelle, de renforcer sa présence numérique et de faciliter le développement de son activité.'],
                        ['type' => 'p', 'text' => 'Nous améliorons continuellement nos services, nous écoutons les besoins de notre communauté et nous innovons pour proposer des solutions toujours plus performantes.'],
                        ['type' => 'p', 'text' => 'Nous croyons que la technologie doit être au service des personnes, des entreprises et du développement économique.'],
                    ],
                ],
                [
                    'icon' => 'flag',
                    'title' => 'EMICARD, votre identité professionnelle sans limites',
                    'blocks' => [
                        ['type' => 'p', 'text' => 'Chaque rencontre est une opportunité. Chaque contact peut devenir un client. Chaque échange peut ouvrir la voie à un partenariat. Chaque présentation peut transformer une simple conversation en une collaboration durable.'],
                        ['type' => 'p', 'text' => 'EMICARD vous accompagne dans cette nouvelle façon de communiquer, de partager et de développer votre activité.'],
                        ['type' => 'p', 'text' => 'Notre ambition est de faire de chaque carte numérique un véritable moteur de visibilité, de confiance et de croissance.'],
                        ['type' => 'p', 'text' => '**EMICARD — Connectez votre identité, développez vos opportunités, construisez votre avenir numérique.**'],
                    ],
                ],
            ];

            $icons = [
                'sparkles' => 'M12 2l2.1 6.3L20.5 10l-6.4 1.7L12 18l-2.1-6.3L3.5 10l6.4-1.7L12 2z',
                'target' => 'M12 2v4m0 0a4 4 0 100 8 4 4 0 000-8zm0 8v8',
                'handshake' => 'M7 17l-2-2 7-7 2 2-7 7zm10-10l2-2 3 3-2 2-3-3z',
                'heart' => 'M12 21s-7-4.4-9.3-8.2C.8 9 .9 6.6 2.6 5c1.7-1.6 4.2-1.5 5.8.1L12 8l3.6-2.9c1.6-1.6 4.1-1.7 5.8-.1 1.7 1.6 1.8 4.1-.1 7.8C19 16.6 12 21 12 21z',
                'users' => 'M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2m17 0v-2a4 4 0 00-3-3.9M9 7a4 4 0 118 0 4 4 0 01-8 0z',
                'spark' => 'M12 2l1.5 5L19 9l-5.5 2L12 16l-1.5-5L5 9l5.5-2L12 2z',
                'refresh' => 'M21 12a9 9 0 10-9 9m9-9V7m0 5h-5',
                'arrow' => 'M5 12h14M13 5l6 7-6 7',
                'bolt' => 'M13 2L3 14h9l-1 8 10-12h-9l1-8z',
                'briefcase' => 'M10 2h4l1 2h5v16H4V4h5l1-2zM9 10h6',
                'user' => 'M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2M12 7a4 4 0 110-8 4 4 0 010 8z',
                'globe' => 'M12 22a10 10 0 100-20 10 10 0 000 20zM2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20',
                'star' => 'M12 2l3 7 7 .6-5.3 4.6 1.6 7.2L12 18l-6.3 3.4 1.6-7.2L2 9.6 9 9l3-7z',
                'shield-check' => 'M12 22s8-4 8-10V5l-8-2-8 2v7c0 6 8 10 8 10z',
                'flag' => 'M4 22V4m0 0h12l-2 3 2 3H4',
            ];

            $heroicons = function(string $key) use ($icons) {
                $d = $icons[$key] ?? $icons['star'];
                return '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#2563EB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">'
                    .'<path d="'.$d.'" />'
                    .'</svg>';
            };
        @endphp

        <div class="space-y-8">
            @foreach ($sections as $section)
                <article class="fade-in" data-fade id="{{ Str::slug($section['title'], '-') }}">
                    <div class="bg-white rounded-[20px] shadow-lg border border-gray-100 p-6 sm:p-8 hover:shadow-xl transition-shadow duration-300">
                        <div class="flex flex-col md:flex-row md:items-start gap-6">
                            <div class="flex flex-col items-center md:items-start">
                                <div class="w-12 h-12 rounded-[18px] bg-[#DBEAFE] flex items-center justify-center mb-3">
                                    {!! $heroicons($section['icon']) !!}
                                </div>
                            </div>
                            <div class="flex-1">
                                <h2 class="text-2xl sm:text-3xl font-bold text-[#2563EB]">{{ $section['title'] }}</h2>

                                <div class="mt-4 space-y-4 text-gray-800">
                                    @foreach ($section['blocks'] as $block)
                                        @if ($block['type'] === 'p')
                                            <p class="text-base sm:text-lg leading-relaxed text-gray-700">{!! $block['text'] !!}</p>
                                        @elseif ($block['type'] === 'ul')
                                            <ul class="space-y-3">
                                                @foreach ($block['items'] as $item)
                                                    <li class="flex items-start gap-3">
                                                        <span class="mt-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#2563EB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M20 6L9 17l-5-5" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-base sm:text-lg leading-relaxed text-gray-700">{{ $item }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        {{-- CTA fin --}}
        <div class="fade-in" data-fade>
            <div class="bg-[#2563EB] rounded-[20px] shadow-lg p-6 sm:p-10 my-10 hover:shadow-xl transition-shadow duration-300 border border-blue-200">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    <div>
                        <h3 class="text-white text-3xl sm:text-4xl font-bold">EMICARD vous accompagne</h3>
                        <p class="mt-4 text-white/90 text-base sm:text-lg leading-relaxed max-w-2xl">
                            Créez votre identité professionnelle numérique et partagez-la instantanément via lien, QR Code ou carte NFC.
                        </p>
                    </div>
                    <div>
                        @php
                            $contactUrl = '#';
                            try {
                                $contactUrl = route('website.contact');
                            } catch (\Throwable $e) {
                                $contactUrl = url('/contact');
                            }
                        @endphp
                        <a href="{{ $contactUrl }}" class="inline-flex items-center justify-center gap-2 bg-white text-[#2563EB] font-semibold px-6 py-3 rounded-[16px] shadow-sm hover:bg-blue-50 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 12h-4l-2 7-4-14-2 7H2" />
                            </svg>
                            Contacter EMICARD
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            const els = document.querySelectorAll('[data-fade]');
            if (!els.length) return;

            const io = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        io.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.12 });

            els.forEach((el) => {
                el.classList.add('fade-in');
                io.observe(el);
            });
        })();
    </script>
</section>
@endsection
