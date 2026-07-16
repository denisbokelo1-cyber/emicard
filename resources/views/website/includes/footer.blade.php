@php
    // Settings
    use App\Setting;
    use App\Page;
    $setting = Setting::where('status', 1)->first();
    $pages = Page::get();
@endphp

<section class="relative py-12 lg:px-24 overflow-hidden">
    <img class="absolute bottom-0 left-0" src="{{ asset('app/assets/elements/footers/radial.svg') }}" alt="">
    <div class="relative z-10 container mx-auto px-4">
        <div class="flex flex-wrap -m-6">
            <div class="w-full md:w-1/2 {{ $pages->where('page_name', 'Custom Page')->where('status', 'active')->isNotEmpty() ? 'lg:w-3/12' : 'lg:w-5/12' }} p-6">
                <div class="flex flex-col justify-between h-full">
                    <div>
                        <img class="mb-4" src="{{ asset($settings->site_logo) }}" alt="{{ $settings->site_name }}"
                            width="200">
                    </div>
                </div>
            </div>
            <div
                class="w-full {{ $supportPage[0]->section_content || $supportPage[1]->section_content || $supportPage[2]->section_content || $supportPage[3]->section_content || $supportPage[4]->section_content != '' ? 'md:w-1/2 lg:w-2/12' : 'md:w-1/2 lg:w-2/12' }} p-6">
                <div class="h-full">
                    <h3 class="mb-9 font-heading font-semibold text-xs text-gray-500 uppercase tracking-px">
                        {{ __('Getting Started') }}</h3>
                    <ul>
                        <li class="mb-4"><a
                                class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                href="{{ route('home-locale') }}#how-it-works">{{ __('How it works?') }}</a></li>
                        <li class="mb-4"><a
                                class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                href="{{ route('home-locale') }}#features">{{ __('Features') }}</a></li>
                        <li class="mb-4"><a
                                class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                href="{{ route('home-locale') }}#pricing">{{ __('Pricing') }}</a></li>
                        <li class="mb-4"><a
                            class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                            href="{{ route('blogs') }}">{{ __('Blogs') }}</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="w-full {{ $supportPage[0]->section_content || $supportPage[1]->section_content || $supportPage[2]->section_content || $supportPage[3]->section_content != '' || $supportPage[4]->section_content != '' ? 'md:w-1/2 lg:w-2/12' : 'md:w-1/2 lg:w-2/12' }} p-6">
                <div class="h-full">
                    <h3 class="mb-9 font-heading font-semibold text-xs text-gray-500 uppercase tracking-px">
                        {{ __('My Account') }}</h3>
                    <ul>
                        <li class="mb-4"><a
                                class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                href="{{ route('login') }}">{{ __('Login') }}</a></li>

                        @if (Route::has('register'))
                            <li class="mb-4"><a
                                    class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                    href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif

                        @if ($pages[195]->page_name == 'contact' && $pages[195]->status == 'active')
                            <li class="mb-4"><a
                                    class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                    href="{{ route('contact') }}">{{ __('Contact Us') }}</a></li>
                        @endif

                        <li><a class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                href="mailto:{{ $supportPage[10]->section_content }}">{{ __('Customer Support') }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Custom pages --}}
            @if ($pages && $pages->where('page_name', 'Custom Page')->where('status', 'active')->isNotEmpty())
                <div class="w-full {{ $supportPage[0]->section_content || $supportPage[1]->section_content || $supportPage[2]->section_content || $supportPage[3]->section_content != '' || $supportPage[4]->section_content != '' ? 'md:w-1/2 lg:w-2/12' : 'md:w-1/2 lg:w-2/12' }} p-6">
                    <div class="h-full">
                        <h3 class="mb-9 font-heading font-semibold text-xs text-gray-500 uppercase tracking-px">{{ __('Useful Links') }}</h3>
                        @foreach ($pages as $page)
                            @if ($page->page_name == 'Custom Page' && $page->status == 'active')
                                <ul>
                                    <li class="mb-4"><a class="font-heading font-medium text-base text-gray-900 hover:text-gray-700" href="{{ route('custom.page', $page->section_title) }}">{{ __($page->section_name) }}</a></li>
                                </ul>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="w-full md:w-1/2 lg:w-3/12 p-6">
                <div class="h-full">
                    <h3 class="mb-9 font-heading font-semibold text-xs text-gray-500 uppercase tracking-px">{{ __('Legals') }}</h3>
                    <ul>
                        @if ($pages[49]->page_name == 'faq' && $pages[49]->status == 'active')
                            <li class="mb-4"><a class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                    href="{{ route('faq') }}">{{ __('FAQs') }}</a></li>
                        @endif
                        @if ($pages[108]->page_name == 'terms' && $pages[108]->status == 'active')
                            <li class="mb-4"><a
                                    class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                    href="{{ route('terms.and.conditions') }}">{{ __('Terms and Conditions') }}</a>
                            </li>
                        @endif
                        @if ($pages[64]->page_name == 'privacy' && $pages[64]->status == 'active')
                            <li class="mb-4"><a
                                    class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                    href="{{ route('privacy.policy') }}">{{ __('Privacy Policy') }}</a></li>
                        @endif
                        @if ($pages[156]->page_name == 'refund' && $pages[156]->status == 'active')
                            <li><a class="font-heading font-medium text-base text-gray-900 hover:text-gray-700"
                                    href="{{ route('refund.policy') }}">{{ __('Refund Policy') }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="w-full p-6">
                <div class="h-full">
                    <div class="mt-4">
                        <h3 class="mb-4 font-heading font-semibold text-xs text-gray-500 uppercase tracking-px">EMICARD</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            La nouvelle génération d’identité numérique professionnelle qui transforme la manière dont l’Afrique crée des connexions, développe des affaires et construit sa présence dans le monde digital
                        </p>
                    </div>

                    <div class="mt-6">
                        <div class="space-y-4">
                            <div>
                                <h4 class="font-heading font-semibold text-base text-gray-900">BLOC 1</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD : BIEN PLUS QU’UNE CARTE DE VISITE DIGITALE, UN NOUVEAU PASSEPORT NUMÉRIQUE POUR LES PROFESSIONNELS ET LES ENTREPRISES AFRICAINES</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">Pendant plusieurs décennies, la carte de visite traditionnelle a représenté l’un des premiers symboles de professionnalisme dans le monde des affaires. Elle était remise lors d’une rencontre, d’un rendez-vous commercial, d’une conférence, d’un événement ou d’une opportunité de partenariat.</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">Pour les professionnels africains, EMICARD transforme une simple carte en un espace numérique professionnel capable de présenter une personne, une marque, une entreprise ou une activité avec élégance, rapidité et efficacité.</p>
                            </div>

                            <div>
                                <h4 class="font-heading font-semibold text-base text-gray-900 mt-2">BLOC 2</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD : DONNER À CHAQUE ENTREPRENEUR AFRICAIN UNE VITRINE DIGITALE PROFESSIONNELLE ACCESSIBLE 24H/24 ET 7J/7</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD a été conçu pour répondre à cette nouvelle exigence : permettre à chaque professionnel et à chaque entreprise de disposer d’une véritable vitrine numérique professionnelle sans avoir besoin de créer un site web complexe.</p>
                            </div>

                            <div>
                                <h4 class="font-heading font-semibold text-base text-gray-900 mt-2">BLOC 3</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD : ACCÉLÉRER LA TRANSFORMATION DIGITALE DES ENTREPRISES AFRICAINES ET CONSTRUIRE L’ÉCONOMIE DU FUTUR</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD accompagne les professionnels dans leur transition vers le numérique en rendant la transformation digitale accessible, simple et adaptée aux réalités locales.</p>
                            </div>

                            <div>
                                <h4 class="font-heading font-semibold text-base text-gray-900 mt-2">BLOC 4</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD : TRANSFORMER CHAQUE CONTACT EN UNE OPPORTUNITÉ D’AFFAIRES GRÂCE À LA PUISSANCE DU RÉSEAUTAGE DIGITAL INTELLIGENT</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">Chaque partage permet à une personne de découvrir immédiatement l’identité, les compétences, les services, les produits et les moyens de communication d’un professionnel.</p>
                            </div>

                            <div>
                                <h4 class="font-heading font-semibold text-base text-gray-900 mt-2">BLOC 5</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD : UNE SOLUTION PENSÉE POUR L’AFRIQUE, CONÇUE POUR LES RÉALITÉS DE KINSHASA ET ADAPTÉE AUX NOUVELLES HABITUDES DIGITALES CONGOLAISES</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD reste internationale tout en étant profondément adaptée aux usages locaux, notamment ceux de la République Démocratique du Congo.</p>
                            </div>

                            <div>
                                <h4 class="font-heading font-semibold text-base text-gray-900 mt-2">BLOC 6</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD : DONNER AUX ENTREPRISES AFRICAINES LES MOYENS DE CONSTRUIRE UNE IMAGE FORTE, CRÉDIBLE ET PROFESSIONNELLE À L’ÈRE DU NUMÉRIQUE</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">Une identité numérique professionnelle bien construite devient un facteur de crédibilité, en renforçant la confiance et la visibilité.</p>
                            </div>

                            <div>
                                <h4 class="font-heading font-semibold text-base text-gray-900 mt-2">BLOC 7</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD : UN ACCÉLÉRATEUR DE CROISSANCE POUR LES PME, STARTUPS ET ENTREPRENEURS QUI VEULENT CONSTRUIRE L’AFRIQUE DIGITALE DE DEMAIN</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD structure la présence professionnelle et aide les entrepreneurs à accélérer leur développement dans une économie de plus en plus numérique.</p>
                            </div>

                            <div>
                                <h4 class="font-heading font-semibold text-base text-gray-900 mt-2">BLOC 8</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD : UNE RÉVOLUTION ÉCOLOGIQUE ET ÉCONOMIQUE POUR REMPLACER LES ANCIENS MODÈLES DE COMMUNICATION PROFESSIONNELLE</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">La carte numérique réduit les coûts, limite le gaspillage de papier et permet des mises à jour en temps réel.</p>
                            </div>

                            <div>
                                <h4 class="font-heading font-semibold text-base text-gray-900 mt-2">BLOC 9</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD : LE PONT ENTRE LE MONDE PHYSIQUE ET LE MONDE DIGITAL POUR UNE NOUVELLE ÈRE DES RELATIONS PROFESSIONNELLES EN AFRIQUE</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">Une rencontre physique peut commencer une relation, et le numérique permet de la prolonger, de l’enrichir et de la développer.</p>
                            </div>

                            <div>
                                <h4 class="font-heading font-semibold text-base text-gray-900 mt-2">BLOC 10</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD : CONSTRUIRE L’INFRASTRUCTURE NUMÉRIQUE QUI DONNERA UNE IDENTITÉ PROFESSIONNELLE À DES MILLIONS D’AFRICAINS</p>
                            </div>
                            <div>
                                <p class="text-gray-600 text-sm leading-relaxed">EMICARD porte une vision d’infrastructure numérique permettant à des millions de construire et valoriser leur identité professionnelle dans le monde digital.</p>
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-600 text-sm mt-6">© {{ __('Copyright') }} {{ Carbon\Carbon::now()->format('Y') }}. {{ __('All Rights Reserved by') }} {{ config('app.name') }}.</p>
                </div>
            </div>

        </div>
    </div>
</section>
