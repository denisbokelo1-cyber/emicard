@extends('layouts.index', ['nav' => true, 'banner' => false, 'footer' => true, 'cookie' => true, 'setting' => true,
'title' => __('Refund Policy')])

@section('content')
{{-- Refund policy page (modern redesign) --}}
<section class="py-12 lg:py-16 px-4 bg-gradient-to-b from-white to-[#F8FAFC]">
    <style>
        /* Fade In au scroll sans dépendance externe */
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
                Politique de remboursement d'EMICARD
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
                        Cette politique clarifie les règles applicables aux paiements, abonnements, achats et remboursements réalisés sur EMICARD.
                    </p>
                </div>
            </div>
        </div>

        {{-- Sommaire (navigation interne) --}}
        <div class="fade-in" data-fade>
            <div class="bg-white/80 backdrop-blur rounded-[20px] border border-blue-100 shadow-sm p-4 sm:p-5 mb-10">
                <div class="flex items-center gap-3 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#2563EB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16" />
                        <path d="M4 12h16" />
                        <path d="M4 18h16" />
                    </svg>
                    <h2 class="text-lg font-semibold text-gray-900">Sommaire</h2>
                </div>

                <div class="flex flex-wrap gap-2">
                    @for ($i = 1; $i <= 16; $i++)
                        <a href="#section-{{ $i }}" class="px-3 py-2 rounded-full text-sm font-medium bg-[#DBEAFE] text-[#1D4ED8] hover:bg-[#C7D2FE] transition">
                            {{ $i }}
                        </a>
                    @endfor
                </div>

                <p class="mt-3 text-xs sm:text-sm text-gray-600">
                    Cliquez sur un numéro pour accéder directement à la section correspondante.
                </p>
            </div>
        </div>

        {{-- Carte d'introduction --}}
        <div class="fade-in" data-fade>
            <div class="bg-white rounded-[20px] shadow-lg border border-gray-100 p-6 sm:p-8 mb-10 hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-start gap-4">
                    <div class="w-11 h-11 rounded-[16px] bg-[#DBEAFE] flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#2563EB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2l7 4v6c0 5-3 9-7 10-4-1-7-5-7-10V6l7-4z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl sm:text-2xl font-semibold text-[#2563EB]">Bienvenue sur EMICARD</h3>
                        <p class="mt-3 text-gray-700 text-base leading-relaxed">
                            EMICARD, une plateforme développée et exploitée par ILLUMINATION METAVERSE GROUP SARLU, permettant la création de cartes de visite numériques, cartes NFC, QR Codes, mini-sites professionnels, catalogues de produits et services ainsi que diverses solutions numériques.
                        </p>
                        <p class="mt-4 text-gray-700 text-base leading-relaxed">
                            La présente Politique de Remboursement définit les règles applicables aux paiements, abonnements, achats et remboursements réalisés sur EMICARD.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sections 1..16 --}}
        @php
            $sections = [
                [
                    'icon' => 'document',
                    'title' => 'Champ d\'application',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'La présente Politique s\'applique à tous les paiements réalisés sur EMICARD, notamment :'],
                        ['type' => 'ul', 'items' => [
                            'les abonnements mensuels, trimestriels, semestriels ou annuels',
                            'les achats de cartes NFC',
                            'les achats de fonctionnalités Premium',
                            'les options payantes',
                            'les services personnalisés',
                            'les frais liés aux domaines personnalisés ou autres services proposés par la plateforme',
                        ]]
                    ],
                ],
                [
                    'icon' => 'scale',
                    'title' => 'Principe général',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'Les paiements effectués sur EMICARD sont, en principe, définitifs. Sauf disposition légale impérative ou décision expresse d\'EMICARD, les montants payés ne sont pas remboursables une fois le service activé, utilisé ou mis à disposition.'],
                    ],
                ],
                [
                    'icon' => 'shield',
                    'title' => 'Cas pouvant donner lieu à un remboursement',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'Un remboursement peut être envisagé après vérification notamment dans les situations suivantes :'],
                        ['type' => 'ul', 'items' => [
                            'double paiement',
                            'paiement effectué par erreur',
                            'débit confirmé sans activation du service',
                            'impossibilité technique durable imputable à EMICARD',
                            'erreur manifeste de facturation',
                            'obligation légale',
                        ]]
                    ],
                ],
                [
                    'icon' => 'x-circle',
                    'title' => 'Cas ne donnant généralement pas lieu à un remboursement',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'Aucun remboursement ne sera généralement accordé dans les cas suivants :'],
                        ['type' => 'ul', 'items' => [
                            'changement d\'avis',
                            'service déjà utilisé',
                            'oubli d\'annuler un abonnement',
                            'violation des Conditions d\'utilisation',
                            'erreur de saisie',
                            'incompatibilité de l\'appareil',
                            'problème Internet ou fournisseur',
                            'maintenance ou force majeure',
                        ]]
                    ],
                ],
                [
                    'icon' => 'repeat',
                    'title' => 'Abonnements et renouvellement automatique',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'Lorsque le renouvellement automatique est activé, l\'abonnement est renouvelé automatiquement.'],
                        ['type' => 'p', 'text' => 'L\'utilisateur est responsable d\'annuler son abonnement avant son renouvellement.'],
                    ],
                ],
                [
                    'icon' => 'credit-card',
                    'title' => 'Cartes NFC et produits physiques',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'Pour les cartes NFC :'],
                        ['type' => 'ul', 'items' => [
                            'signaler tout défaut rapidement',
                            'un produit défectueux pourra être remplacé ou remboursé',
                            'une mauvaise utilisation ne donne pas droit à remboursement',
                        ]]
                    ],
                ],
                [
                    'icon' => 'clipboard-check',
                    'title' => 'Procédure de demande de remboursement',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'Le client doit fournir :'],
                        ['type' => 'ul', 'items' => [
                            'nom',
                            'email',
                            'référence de transaction',
                            'date',
                            'montant',
                            'description du problème',
                            'justificatifs',
                        ]]
                    ],
                ],
                [
                    'icon' => 'clock',
                    'title' => 'Délai de traitement',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'Les demandes sont étudiées rapidement.'],
                        ['type' => 'p', 'text' => 'Le délai de remboursement dépend ensuite des banques et du moyen de paiement.'],
                    ],
                ],
                [
                    'icon' => 'arrow-uturn',
                    'title' => 'Mode de remboursement',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'Le remboursement est effectué via le moyen de paiement utilisé lorsque cela est possible.'],
                    ],
                ],
                [
                    'icon' => 'ban',
                    'title' => 'Fraude et abus',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'EMICARD peut refuser toute demande frauduleuse ou abusive.'],
                    ],
                ],
                [
                    'icon' => 'stop-circle',
                    'title' => 'Annulation des services',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'L\'annulation empêche les futurs renouvellements mais ne rembourse pas les périodes déjà facturées.'],
                    ],
                ],
                [
                    'icon' => 'cloud-off',
                    'title' => 'Force majeure',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'EMICARD ne peut être tenu responsable des interruptions indépendantes de sa volonté.'],
                    ],
                ],
                [
                    'icon' => 'pencil',
                    'title' => 'Modification de la Politique',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'Cette Politique peut être modifiée à tout moment.'],
                    ],
                ],
                [
                    'icon' => 'book-open',
                    'title' => 'Droit applicable',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'La Politique est régie par les lois applicables au pays d\'établissement de ILLUMINATION METAVERSE GROUP SARLU.'],
                    ],
                ],
                [
                    'icon' => 'phone',
                    'title' => 'Contact',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'Pour toute question ou demande de remboursement, contacter le support officiel EMICARD.'],
                    ],
                ],
                [
                    'icon' => 'check',
                    'title' => 'Acceptation',
                    'subtitle' => null,
                    'content' => [
                        ['type' => 'p', 'text' => 'En utilisant EMICARD ou en effectuant un paiement, l\'utilisateur reconnaît avoir lu et accepté cette Politique de remboursement.'],
                    ],
                ],
            ];

            $icons = [
                'document' => 'M7 3h7l4 4v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z',
                'scale' => 'M12 3v18',
                'shield' => 'M12 22s8-4 8-10V5l-8-2-8 2v7c0 6 8 10 8 10z',
                'x-circle' => 'M12 22c5.523 0 10-4.477 10-10S17.477 2 12 2 2 6.477 2 12s4.477 10 10 10zm-3-7l6-6',
                'repeat' => 'M17 2l4 4-4 4',
                'credit-card' => 'M3 7h18M3 17h9',
                'clipboard-check' => 'M9 5h6l1 2h4v14H4V7h4l1-2z',
                'clock' => 'M12 8v5l3 2',
                'arrow-uturn' => 'M9 14l-4-4 4-4',
                'ban' => 'M12 22c5.523 0 10-4.477 10-10S17.477 2 12 2 2 6.477 2 12s4.477 10 10 10z',
                'stop-circle' => 'M12 22c5.523 0 10-4.477 10-10S17.477 2 12 2 2 6.477 2 12s4.477 10 10 10z',
                'cloud-off' => 'M17 16v-1a4 4 0 0 0-8 0 3 3 0 0 0 0 6h6',
                'pencil' => 'M12 20h9',
                'book-open' => 'M12 6h7M12 6v15M12 6c0 0-2-2-5-2S2 6 2 6v14s2 2 5 2 5-2 5-2',
                'phone' => 'M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.08 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z',
                'check' => 'M20 6L9 17l-5-5'
            ];

            $heroicons = function(string $name) {
                // SVG minimal (inline) pour éviter une dépendance à un pack d'icônes.
                $base = 'xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#2563EB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"';
                $paths = [
                    'document' => '<path d="M7 3h7l4 4v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />',
                    'scale' => '<path d="M12 3v18" /><path d="M9 12h6" />',
                    'shield' => '<path d="M12 22s8-4 8-10V5l-8-2-8 2v7c0 6 8 10 8 10z" />',
                    'x-circle' => '<path d="M12 22c5.523 0 10-4.477 10-10S17.477 2 12 2 2 6.477 2 12s4.477 10 10 10z" /><path d="M15 9l-6 6" />',
                    'repeat' => '<path d="M17 2l4 4-4 4" /><path d="M3 11V9a4 4 0 0 1 4-4h14" /> <path d="M7 22l-4-4 4-4" /><path d="M21 13v2a4 4 0 0 1-4 4H3" />',
                    'credit-card' => '<rect x="1" y="6" width="22" height="12" rx="2" ry="2" /><path d="M1 12h22" />',
                    'clipboard-check' => '<path d="M9 5h6l1 2h4v14H4V7h4l1-2z" /><path d="M9 14l2 2 4-4" />',
                    'clock' => '<circle cx="12" cy="12" r="10" /><path d="M12 6v6l4 2" />',
                    'arrow-uturn' => '<path d="M9 14l-4-4 4-4" /><path d="M5 10h10a4 4 0 0 1 4 4v0" />',
                    'ban' => '<circle cx="12" cy="12" r="10" /><path d="M15 9l-6 6" />',
                    'stop-circle' => '<circle cx="12" cy="12" r="10" /><rect x="8" y="8" width="8" height="8" rx="1" />',
                    'cloud-off' => '<path d="M17 16v-1a4 4 0 0 0-8 0 3 3 0 0 0 0 6h6" /><path d="M2 2l20 20" />',
                    'pencil' => '<path d="M12 20h9" /><path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z" />',
                    'book-open' => '<path d="M12 6h7" /><path d="M12 6v15" /><path d="M12 21c-2 0-4-1-6-1s-4 1-4 1V6s2-1 4-1 4 1 6 1" />',
                    'phone' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.08 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />',
                    'check' => '<path d="M20 6L9 17l-5-5" />'
                ];

                return '<svg '.$base.' viewBox="0 0 24 24">'.($paths[$name] ?? $paths['check']).'</svg>';
            };
        @endphp

        @foreach ($sections as $index => $section)
            @php $num = $index + 1; @endphp
            <article id="section-{{ $num }}" class="fade-in" data-fade>
                <div class="bg-white rounded-[20px] shadow-lg border border-gray-100 p-6 sm:p-8 mb-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-start gap-5">
                        {{-- Icône devant la section --}}
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
                                                    {{-- Puce iconifiée bleue --}}
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
                            Pour toute question concernant cette Politique de remboursement ou pour soumettre une demande de remboursement, contactez notre équipe d'assistance via les coordonnées officielles disponibles sur EMICARD.
                        </p>
                    </div>

                    <div>
                        {{-- Bouton support (avec fallback de route) --}}
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
