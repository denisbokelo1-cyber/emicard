@extends('layouts.index', ['nav' => true, 'banner' => false, 'footer' => true, 'cookie' => true, 'setting' => true,
    'title' => __('Privacy Policy')])

@section('content')
{{-- Privacy policy page (modern redesign) --}}
<section class="py-12 lg:py-16 px-4 bg-gradient-to-b from-white to-[#F8FAFC]">
    <style>
        /* Fade In au scroll sans dépendance externe */
        .fade-in { opacity: 0; transform: translateY(10px); transition: opacity 700ms ease, transform 700ms ease; }
        .fade-in.is-visible { opacity: 1; transform: translateY(0); }

        /* Animation légère au survol */
        .card-hover { transition: transform 250ms ease, box-shadow 250ms ease; }
        .card-hover:hover { transform: translateY(-2px); }
    </style>

    <div class="max-w-6xl mx-auto">
        {{-- HERO --}}
        <div class="text-center mb-10 lg:mb-14 fade-in" data-fade>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-[#2563EB]">
                Politique de confidentialité d'EMICARD
            </h1>
            <p class="mt-4 text-base sm:text-lg text-gray-700">
                Dernière mise à jour : <span class="font-semibold">Juillet 2026</span>
            </p>

            {{-- Encadré d'information bleu sous le titre --}}
            <div class="mt-7 inline-flex items-start gap-3 px-5 py-4 rounded-[20px] bg-[#DBEAFE] border border-blue-100 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#2563EB] shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 9v4" />
                    <path d="M12 17h.01" />
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                </svg>
                <div class="text-left">
                    <p class="text-gray-800 font-semibold">Important</p>
                    <p class="text-gray-700 text-sm sm:text-base">
                        La présente politique explique comment EMICARD collecte, utilise et protège vos données personnelles.
                    </p>
                </div>
            </div>
        </div>

        {{-- Sections 1..16 --}}
        @php
            $sections = [
                [
                    'icon' => 'document',
                    'title' => 'Les informations que nous collectons',
                    'content' => [
                        ['type' => 'p', 'text' => "Selon votre utilisation de la plateforme, nous pouvons collecter les informations suivantes :"],
                        ['type' => 'ul', 'items' => [
                            'Nom et prénom.',
                            "Nom de l'entreprise ou de l'organisation.",
                            "Adresse e-mail.",
                            "Numéro de téléphone.",
                            'Adresse postale.',
                            'Photo de profil.',
                            "Logo de l'entreprise.",
                            'Profession et fonction.',
                            "Description de l'activité.",
                            'Liens vers les réseaux sociaux.',
                            'Site web.',
                            'Coordonnées GPS lorsque vous choisissez de les partager.',
                            'Informations relatives aux produits et services publiés.',
                            'Informations de paiement et de facturation.',
                            "Historique des abonnements.",
                            "Historique des connexions.",
                            'Adresse IP.',
                            'Type d’appareil.',
                            'Système d’exploitation.',
                            'Navigateur Internet.',
                            'Langue utilisée.',
                            'Données statistiques relatives aux visites de votre carte numérique.',
                            'Informations techniques nécessaires au bon fonctionnement de la plateforme.',
                        ]],
                    ],
                ],
                [
                    'icon' => 'collection',
                    'title' => 'Comment nous collectons vos données',
                    'content' => [
                        ['type' => 'p', 'text' => 'Les données peuvent être collectées :'],
                        ['type' => 'ul', 'items' => [
                            'lors de votre inscription ;',
                            'lorsque vous complétez votre profil ;',
                            'lorsque vous créez une carte numérique ;',
                            'lors de vos paiements ;',
                            'lorsque vous contactez notre support ;',
                            'automatiquement via les cookies et technologies similaires ;',
                            "lors de l'utilisation des fonctionnalités de la plateforme.",
                        ]],
                    ],
                ],
                [
                    'icon' => 'target',
                    'title' => 'Finalités du traitement',
                    'content' => [
                        ['type' => 'p', 'text' => 'Vos données sont utilisées afin de :'],
                        ['type' => 'ul', 'items' => [
                            'créer votre compte ;',
                            "gérer votre abonnement ;",
                            'fournir les services proposés par EMICARD ;',
                            'générer votre carte numérique et votre QR Code ;',
                            'gérer les cartes NFC ;',
                            'publier vos informations professionnelles ;',
                            'faciliter le partage de vos coordonnées ;',
                            'traiter les paiements ;',
                            'assurer la sécurité de la plateforme ;',
                            'prévenir les fraudes ;',
                            'améliorer nos services ;',
                            "personnaliser votre expérience utilisateur ;",
                            "répondre à vos demandes d'assistance ;",
                            'envoyer des notifications importantes ;',
                            'respecter nos obligations légales et réglementaires.',
                        ]],
                    ],
                ],
                [
                    'icon' => 'legal',
                    'title' => 'Base légale du traitement',
                    'content' => [
                        ['type' => 'p', 'text' => 'Le traitement de vos données repose notamment sur :'],
                        ['type' => 'ul', 'items' => [
                            'votre consentement ;',
                            "l'exécution du contrat entre vous et EMICARD ;",
                            "le respect des obligations légales ;",
                            'notre intérêt légitime à améliorer et sécuriser la plateforme.',
                        ]],
                    ],
                ],
                [
                    'icon' => 'share',
                    'title' => 'Partage des données',
                    'content' => [
                        ['type' => 'p', 'text' => 'Vos données peuvent être partagées uniquement lorsque cela est nécessaire avec :'],
                        ['type' => 'ul', 'items' => [
                            'nos prestataires techniques ;',
                            'les fournisseurs de services de paiement ;',
                            'les hébergeurs ;',
                            "les services d'envoi d'e-mails ;",
                            "les partenaires d'authentification ;",
                            'les autorités compétentes lorsque la loi l’exige.',
                        ]],
                        ['type' => 'p', 'text' => 'Nous ne vendons jamais vos données personnelles à des tiers.'],
                    ],
                ],
                [
                    'icon' => 'shield',
                    'title' => 'Sécurité des données',
                    'content' => [
                        ['type' => 'p', 'text' => 'EMICARD met en œuvre des mesures techniques, administratives et organisationnelles destinées à protéger vos données contre :'],
                        ['type' => 'ul', 'items' => [
                            "l'accès non autorisé ;",
                            'la perte ;',
                            'le vol ;',
                            "l'altération ;",
                            'la destruction ;',
                            'la divulgation accidentelle.',
                        ]],
                        ['type' => 'p', 'text' => 'Aucun système n’étant totalement sécurisé, nous ne pouvons toutefois garantir une sécurité absolue.'],
                    ],
                ],
                [
                    'icon' => 'clock',
                    'title' => 'Conservation des données',
                    'content' => [
                        ['type' => 'p', 'text' => 'Les données personnelles sont conservées uniquement pendant la durée nécessaire aux finalités pour lesquelles elles ont été collectées, ou aussi longtemps que la loi l’exige.'],
                        ['type' => 'p', 'text' => 'Lorsque votre compte est supprimé, certaines informations peuvent être conservées pour répondre à nos obligations légales, comptables, fiscales ou de sécurité.'],
                    ],
                ],
                [
                    'icon' => 'users',
                    'title' => 'Vos droits',
                    'content' => [
                        ['type' => 'p', 'text' => 'Sous réserve de la législation applicable, vous disposez notamment des droits suivants :'],
                        ['type' => 'ul', 'items' => [
                            'accéder à vos données personnelles ;',
                            'demander leur rectification ;',
                            'demander leur suppression ;',
                            'demander la limitation de leur traitement ;',
                            'vous opposer à certains traitements ;',
                            'retirer votre consentement lorsque celui-ci constitue la base juridique du traitement ;',
                            'demander la portabilité de vos données lorsque cela est applicable.',
                        ]],
                        ['type' => 'p', 'text' => 'Toute demande peut être adressée au support d’EMICARD.'],
                    ],
                ],
                [
                    'icon' => 'cookie',
                    'title' => 'Cookies et technologies similaires',
                    'content' => [
                        ['type' => 'p', 'text' => 'EMICARD utilise des cookies et technologies similaires afin de :'],
                        ['type' => 'ul', 'items' => [
                            'mémoriser vos préférences ;',
                            'maintenir votre session ouverte ;',
                            'mesurer les performances de la plateforme ;',
                            'améliorer la sécurité ;',
                            'produire des statistiques anonymes ;',
                            'optimiser l’expérience utilisateur.',
                        ]],
                        ['type' => 'p', 'text' => 'Vous pouvez gérer les cookies via les paramètres de votre navigateur ou de votre appareil.'],
                    ],
                ],
                [
                    'icon' => 'plug',
                    'title' => 'Services tiers',
                    'content' => [
                        ['type' => 'p', 'text' => 'EMICARD peut intégrer des services tiers tels que :'],
                        ['type' => 'ul', 'items' => [
                            'passerelles de paiement ;',
                            'services NFC ;',
                            'WhatsApp ;',
                            'Google Maps ;',
                            'Google Analytics ;',
                            'réseaux sociaux ;',
                            'services de stockage cloud ;',
                            'fournisseurs de notifications push.',
                        ]],
                        ['type' => 'p', 'text' => 'Ces services disposent de leurs propres politiques de confidentialité.'],
                    ],
                ],
                [
                    'icon' => 'globe',
                    'title' => 'Transferts internationaux',
                    'content' => [
                        ['type' => 'p', 'text' => 'Vos données peuvent être traitées ou hébergées dans différents pays lorsque cela est nécessaire au fonctionnement de la plateforme.'],
                        ['type' => 'p', 'text' => 'Dans ce cas, EMICARD met en œuvre des mesures raisonnables pour garantir un niveau approprié de protection.'],
                    ],
                ],
                [
                    'icon' => 'shield-check',
                    'title' => 'Protection des mineurs',
                    'content' => [
                        ['type' => 'p', 'text' => "EMICARD n'est pas destiné aux enfants qui ne disposent pas de la capacité légale d'utiliser nos services sans l'autorisation d'un parent ou d'un représentant légal."],
                    ],
                ],
                [
                    'icon' => 'search',
                    'title' => 'Lutte contre la fraude',
                    'content' => [
                        ['type' => 'p', 'text' => "Nous pouvons utiliser certaines informations afin de :"],
                        ['type' => 'ul', 'items' => [
                            'détecter les activités frauduleuses ;',
                            'protéger les utilisateurs ;',
                            "prévenir les usurpations d'identité ;",
                            'assurer la sécurité de la plateforme.',
                        ]],
                    ],
                ],
                [
                    'icon' => 'update',
                    'title' => 'Modifications de la Politique',
                    'content' => [
                        ['type' => 'p', 'text' => 'Nous pouvons modifier cette Politique de Confidentialité à tout moment afin de refléter les évolutions légales, réglementaires ou techniques.'],
                        ['type' => 'p', 'text' => "La nouvelle version entre en vigueur dès sa publication sur EMICARD."],
                    ],
                ],
                [
                    'icon' => 'phone',
                    'title' => 'Contact',
                    'content' => [
                        ['type' => 'p', 'text' => "Pour toute question concernant cette Politique de Confidentialité, vos données personnelles ou l'exercice de vos droits, vous pouvez contacter EMICARD via les coordonnées de contact disponibles sur le site web ou dans l'application."],
                    ],
                ],
                [
                    'icon' => 'check',
                    'title' => 'Acceptation',
                    'content' => [
                        ['type' => 'p', 'text' => "En créant un compte, en accédant à EMICARD ou en utilisant ses services, vous reconnaissez avoir lu la présente Politique de Confidentialité, en comprendre le contenu et accepter le traitement de vos données personnelles conformément aux dispositions qui y sont décrites."],
                    ],
                ],
            ];

            $heroicons = function(string $name) {
                $base = 'xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#2563EB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"';
                $paths = [
                    'document' => '<path d="M7 3h7l4 4v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />',
                    'scale' => '<path d="M12 3v18" /><path d="M9 12h6" />',
                    'shield' => '<path d="M12 22s8-4 8-10V5l-8-2-8 2v7c0 6 8 10 8 10z" />',
                    'check' => '<path d="M20 6L9 17l-5-5" />',
                    'clock' => '<circle cx="12" cy="12" r="10" /><path d="M12 6v6l4 2" />',
                    'phone' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.08 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />',
                    'document-check' => '<path d="M9 11l3 3L22 4" /> <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />',
                ];

                // Fallback
                if (!isset($paths[$name])) {
                    $paths[$name] = $paths['document'];
                }

                return '<svg ' . $base . ' viewBox="0 0 24 24">' . $paths[$name] . '</svg>';
            };
        @endphp

        {{-- Carte d'introduction --}}
        <div class="fade-in card-hover" data-fade>
            <div class="bg-white rounded-[20px] shadow-lg border border-gray-100 p-6 sm:p-8 mb-8 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-start gap-4">
                    <div class="w-11 h-11 rounded-[16px] bg-[#DBEAFE] flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#2563EB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-[#2563EB]">Politique de Confidentialité</h3>
                        <p class="mt-3 text-gray-700 text-base leading-relaxed">
                            Bienvenue sur EMICARD, une plateforme développée et exploitée par ILLUMINATION METAVERSE GROUP SARLU, spécialisée dans la création de cartes de visite numériques, de profils professionnels, de mini-sites, de cartes NFC, de QR Codes, de catalogues de produits et services, ainsi que d'autres solutions numériques destinées aux particuliers, professionnels et entreprises.
                        </p>
                        <p class="mt-4 text-gray-700 text-base leading-relaxed">
                            La présente Politique de Confidentialité explique quelles données personnelles nous collectons, comment nous les utilisons, les protégeons, les partageons et les droits dont disposent les utilisateurs concernant leurs informations personnelles.
                        </p>
                        <p class="mt-4 text-gray-700 text-base leading-relaxed">
                            En utilisant EMICARD, vous acceptez les pratiques décrites dans cette Politique.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($sections as $index => $section)
            @php $num = $index + 1; @endphp
            <article id="section-{{ $num }}" class="fade-in card-hover" data-fade>
                <div class="bg-white rounded-[20px] shadow-lg border border-gray-100 p-6 sm:p-8 mb-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-5">
                        {{-- Icône devant la section + numéro --}}
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 rounded-[18px] bg-[#DBEAFE] flex items-center justify-center mb-3">
                                {!! $heroicons($section['icon']) !!}
                            </div>
                            <div class="w-11 h-11 rounded-full bg-[#2563EB] text-white flex items-center justify-center font-bold text-sm">
                                {{ $num }}
                            </div>
                        </div>

                        <div class="flex-1">
                            <h2 class="text-2xl sm:text-3xl font-bold text-[#2563EB]">
                                {{ $num }}. {{ $section['title'] }}
                            </h2>

                            <div class="mt-4 space-y-4 text-gray-800">
                                @foreach ($section['content'] as $block)
                                    @if ($block['type'] === 'p')
                                        <p class="text-base sm:text-lg leading-relaxed text-gray-700">{{ $block['text'] }}</p>
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

        {{-- Carte d'aide --}}
        <div class="fade-in" data-fade>
            <div class="bg-[#2563EB] rounded-[20px] shadow-lg p-6 sm:p-10 mb-6 hover:shadow-xl transition-shadow duration-300 border border-blue-200">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    <div>
                        <h3 class="text-white text-3xl sm:text-4xl font-bold">Besoin d'aide ?</h3>
                        <p class="mt-4 text-white/90 text-base sm:text-lg leading-relaxed max-w-2xl">
                            Pour toute question concernant cette Politique de Confidentialité ou pour soumettre une demande concernant vos données personnelles, contactez notre équipe d'assistance via les coordonnées officielles disponibles sur EMICARD.
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
                            Contacter le support
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

