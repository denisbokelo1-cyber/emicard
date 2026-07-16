@extends('layouts.index', ['nav' => true, 'banner' => false, 'footer' => true, 'cookie' => true, 'setting' => true,
'title' => __('FAQ - EMICARD')])

@section('content')
{{-- FAQ Page (modern redesign) --}}
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
        <div class="text-center mb-10 lg:mb-14 fade-in" data-faq-fade>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-[#2563EB]">
                FAQ – Questions Fréquemment Posées
            </h1>
            <p class="mt-4 text-base sm:text-lg text-gray-700 max-w-3xl mx-auto">
                EMICARD — réponses claires aux questions les plus fréquentes.
            </p>

            {{-- Encadré d’info --}}
            <div class="mt-7 inline-flex items-start gap-3 px-5 py-4 rounded-[20px] bg-[#DBEAFE] border border-blue-100 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-[#2563EB] shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 9v4" />
                    <path d="M12 17h.01" />
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
                </svg>
                <div class="text-left">
                    <p class="text-gray-800 font-semibold">EMICARD</p>
                    <p class="text-gray-700 text-sm sm:text-base">
                        Bienvenue dans la foire aux questions d’EMICARD. Vous trouverez ici les réponses concernant l’utilisation de notre plateforme de cartes de visite numériques intelligentes et de boutiques WhatsApp.
                    </p>
                </div>
            </div>
        </div>

        {{-- Accordéon FAQ --}}
        <div class="space-y-5">
            @php
                $faqs = [
                    [
                        'q' => '1. Qu’est-ce qu’EMICARD ?',
                        'a' => 'EMICARD est une plateforme numérique qui permet de créer, personnaliser et partager une carte de visite professionnelle intelligente. Elle regroupe vos coordonnées, réseaux sociaux, services, produits, galerie photos, vidéos, formulaire de contact et bien plus encore dans une seule page accessible via un lien, un QR Code ou une carte NFC.',
                    ],
                    [
                        'q' => '2. À qui s’adresse EMICARD ?',
                        'aList' => [
                            'Entrepreneurs',
                            'Commerçants',
                            'PME et grandes entreprises',
                            'Médecins et hôpitaux',
                            'Avocats et notaires',
                            'Consultants',
                            'Architectes et ingénieurs',
                            'Freelances',
                            'Restaurants et hôtels',
                            'Écoles et universités',
                            'ONG et associations',
                            'Artistes et créateurs de contenu',
                            'Toute personne souhaitant renforcer sa présence professionnelle en ligne',
                        ],
                    ],
                    [
                        'q' => '3. Comment créer ma carte numérique ?',
                        'a' => 'Après votre inscription, il vous suffit de : Accéder à votre tableau de bord. Choisir un modèle de carte. Ajouter vos informations professionnelles. Personnaliser les couleurs et le design. Publier votre carte. Votre carte est immédiatement disponible en ligne.',
                    ],
                    [
                        'q' => '4. Puis-je modifier ma carte après sa publication ?',
                        'a' => 'Oui. Vous pouvez modifier vos informations à tout moment : numéro de téléphone, adresse, logo, photo, services, produits, horaires, réseaux sociaux, etc. Les modifications sont appliquées instantanément.',
                    ],
                    [
                        'q' => '5. Comment partager ma carte EMICARD ?',
                        'aList' => [
                            'Par lien direct',
                            'Par WhatsApp',
                            'Par SMS',
                            'Par e-mail',
                            'Via les réseaux sociaux',
                            'Grâce au QR Code généré automatiquement',
                            'À l’aide d’une carte NFC compatible',
                        ],
                    ],
                    [
                        'q' => '6. Qu’est-ce qu’un QR Code EMICARD ?',
                        'a' => 'Le QR Code est un code unique associé à votre carte numérique. Lorsqu’une personne le scanne avec son smartphone, elle accède immédiatement à votre profil professionnel.',
                    ],
                    [
                        'q' => '7. EMICARD fonctionne-t-il avec les cartes NFC ?',
                        'a' => 'Oui. EMICARD est compatible avec les cartes NFC. En approchant une carte NFC d’un smartphone compatible, votre carte numérique s’ouvre automatiquement.',
                    ],
                    [
                        'q' => '8. Mes contacts peuvent-ils enregistrer mes coordonnées ?',
                        'a' => 'Oui. Un bouton Ajouter aux contacts permet aux visiteurs d’enregistrer instantanément vos coordonnées dans leur téléphone.',
                    ],
                    [
                        'q' => '9. Puis-je ajouter mes réseaux sociaux ?',
                        'a' => 'Absolument. Vous pouvez intégrer : Facebook, Instagram, LinkedIn, TikTok, X, YouTube, Telegram, WhatsApp, Snapchat, Pinterest, GitHub, et plusieurs autres plateformes.',
                    ],
                    [
                        'q' => '10. Puis-je présenter mes produits ou services ?',
                        'a' => 'Oui. EMICARD vous permet d’ajouter : Descriptions de services, Catalogue de produits, Prix, Images, Promotions, Liens de contact.',
                    ],
                    [
                        'q' => '11. Qu’est-ce que la boutique WhatsApp intégrée ?',
                        'a' => 'La boutique WhatsApp vous permet de créer un mini catalogue en ligne. Les clients peuvent consulter vos produits puis vous contacter directement sur WhatsApp pour passer commande.',
                    ],
                    [
                        'q' => '12. Puis-je recevoir des demandes de rendez-vous ?',
                        'a' => 'Oui. Vous pouvez activer le module de prise de rendez-vous afin que vos clients réservent directement un créneau depuis votre carte.',
                    ],
                    [
                        'q' => '13. Puis-je ajouter des photos et des vidéos ?',
                        'a' => 'Oui. Vous pouvez publier : Galeries photos, Portfolio, Réalisations, Vidéos de présentation, Démonstrations de produits, Publicités.',
                    ],
                    [
                        'q' => '14. Comment connaître le nombre de visiteurs ?',
                        'aList' => [
                            'Nombre de visiteurs',
                            'Scans du QR Code',
                            'Clics sur les boutons',
                            'Interactions',
                            'Performances de la carte',
                        ],
                    ],
                    [
                        'q' => '15. EMICARD fonctionne-t-il sur mobile ?',
                        'a' => 'Oui. La plateforme est entièrement optimisée pour les smartphones, tablettes et ordinateurs.',
                    ],
                    [
                        'q' => '16. Puis-je installer EMICARD comme une application ?',
                        'a' => 'Oui. EMICARD prend en charge la technologie Progressive Web App (PWA), ce qui permet d’installer la plateforme directement sur votre téléphone sans passer par un magasin d’applications.',
                    ],
                    [
                        'q' => '17. Puis-je utiliser mon propre nom de domaine ?',
                        'a' => 'Oui. Selon votre formule d’abonnement, vous pouvez utiliser un domaine personnalisé pour renforcer votre image de marque.',
                    ],
                    [
                        'q' => '18. Mes données sont-elles sécurisées ?',
                        'a' => 'Oui. Nous mettons en œuvre des mesures de sécurité destinées à protéger les informations de nos utilisateurs et à garantir un accès sécurisé à la plateforme.',
                    ],
                    [
                        'q' => '19. Que se passe-t-il si mon abonnement expire ?',
                        'a' => 'Selon les paramètres de votre formule, certaines fonctionnalités peuvent être limitées jusqu’au renouvellement de l’abonnement.',
                    ],
                    [
                        'q' => '20. Puis-je gérer plusieurs cartes avec un seul compte ?',
                        'a' => 'Oui. Certaines formules permettent de créer et gérer plusieurs cartes professionnelles depuis un même compte.',
                    ],
                    [
                        'q' => '21. EMICARD est-il adapté aux entreprises ?',
                        'a' => 'Oui. EMICARD est particulièrement adapté aux entreprises souhaitant fournir des cartes numériques à leurs collaborateurs et centraliser leur image professionnelle.',
                    ],
                    [
                        'q' => '22. Comment obtenir de l’aide ?',
                        'a' => 'Vous pouvez contacter notre équipe d’assistance directement depuis la plateforme via le formulaire de contact ou les canaux de support mis à votre disposition.',
                    ],
                ];
            @endphp

            @foreach ($faqs as $i => $faq)
                <div class="fade-in" data-faq-fade>
                    <details class="group bg-white rounded-[20px] shadow-lg border border-gray-100 p-5 sm:p-6 hover:shadow-xl transition-shadow duration-300">
                        <summary class="list-none cursor-pointer select-none">
                            <div class="flex items-start gap-3">
                                <div class="mt-1 w-9 h-9 rounded-full bg-[#DBEAFE] flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#2563EB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 9v4" />
                                        <path d="M12 17h.01" />
                                        <path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <h2 class="text-left text-base sm:text-lg font-semibold text-[#2563EB]">
                                        {{ $faq['q'] }}
                                    </h2>
                                    <p class="mt-2 text-gray-600 text-sm group-open:text-gray-700">
                                        Cliquez pour afficher la réponse.
                                    </p>
                                </div>
                            </div>
                        </summary>

                        <div class="mt-4 text-gray-700 text-base sm:text-lg leading-relaxed">
                            @if (isset($faq['a']))
                                {{ $faq['a'] }}
                            @endif

                            @if (isset($faq['aList']))
                                <ul class="space-y-2">
                                    @foreach ($faq['aList'] as $item)
                                        <li class="flex items-start gap-3">
                                            <span class="mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#2563EB]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M20 6L9 17l-5-5" />
                                                </svg>
                                            </span>
                                            <span>{{ $item }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </details>
                </div>
            @endforeach
        </div>

        {{-- CTA fin --}}
        <div class="fade-in" data-faq-fade>
            <div class="bg-[#2563EB] rounded-[20px] shadow-lg p-6 sm:p-10 my-10 hover:shadow-xl transition-shadow duration-300 border border-blue-200">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    <div>
                        <h3 class="text-white text-3xl sm:text-4xl font-bold">EMICARD — Votre identité professionnelle à portée de main</h3>
                        <p class="mt-4 text-white/90 text-base sm:text-lg leading-relaxed max-w-2xl">
                            Une solution moderne, intelligente et conçue pour simplifier les échanges professionnels, développer votre visibilité et créer davantage d’opportunités.
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
            const els = document.querySelectorAll('[data-faq-fade]');
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
