@props(['card'])
<!-- Card 1 -->
<label class="relative block cursor-pointer text-left w-full">
    <input type="radio" name="radio-buttons" class="peer sr-only" checked />
    <div class="p-4 rounded border border-slate-200 hover:border-slate-300 shadow-sm duration-150 ease-in-out">
        <div class="grid grid-cols-12 items-center gap-x-2">
            <!-- Card -->
            <div class="col-span-6 order-1 sm:order-none sm:col-span-3 flex items-center space-x-4 lg:sidebar-expanded:col-span-6 xl:sidebar-expanded:col-span-3">
                @if ($card->type == 'visa')
                    <svg
                        class="shrink-0"
                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                        xmlns:cc="http://creativecommons.org/ns#"
                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                        xmlns:svg="http://www.w3.org/2000/svg"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                        xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                        version="1.1"
                        id="Layer_1"
                        x="0px"
                        y="0px"
                        width="32" height="24"
                        viewBox="0 0 1000.046 323.653"
                        enable-background="new 0 0 258.381 161.154"
                        xml:space="preserve"
                        inkscape:version="0.91 r13725"
                        sodipodi:docname="Visa_2006.svg"><metadata
                        id="metadata23"><rdf:RDF><cc:Work
                            rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type
                                rdf:resource="http://purl.org/dc/dcmitype/StillImage" /><dc:title></dc:title></cc:Work></rdf:RDF></metadata><defs
                        id="defs21">







                        </defs><sodipodi:namedview
                        pagecolor="#ffffff"
                        bordercolor="#666666"
                        borderopacity="1"
                        objecttolerance="10"
                        gridtolerance="10"
                        guidetolerance="10"
                        inkscape:pageopacity="0"
                        inkscape:pageshadow="2"
                        inkscape:window-width="1366"
                        inkscape:window-height="705"
                        id="namedview19"
                        showgrid="false"
                        inkscape:zoom="0.35355339"
                        inkscape:cx="34.690897"
                        inkscape:cy="131.15483"
                        inkscape:window-x="-8"
                        inkscape:window-y="-8"
                        inkscape:window-maximized="1"
                        inkscape:current-layer="Layer_1" />
                        <g
                        id="g4158"
                        transform="matrix(4.4299631,0,0,4.4299631,-81.165783,-105.04783)"><polygon
                            points="116.145,95.719 97.858,95.719 109.296,24.995 127.582,24.995 "
                            id="polygon9"
                            style="fill:#00579f" /><path
                            d="m 182.437,26.724 c -3.607,-1.431 -9.328,-3.011 -16.402,-3.011 -18.059,0 -30.776,9.63 -30.854,23.398 -0.15,10.158 9.105,15.8 16.027,19.187 7.075,3.461 9.48,5.72 9.48,8.805 -0.072,4.738 -5.717,6.922 -10.982,6.922 -7.301,0 -11.213,-1.126 -17.158,-3.762 l -2.408,-1.13 -2.559,15.876 c 4.289,1.954 12.191,3.688 20.395,3.764 19.188,0 31.68,-9.481 31.828,-24.153 0.073,-8.051 -4.814,-14.22 -15.35,-19.261 -6.396,-3.236 -10.313,-5.418 -10.313,-8.729 0.075,-3.01 3.313,-6.093 10.533,-6.093 5.945,-0.151 10.313,1.278 13.622,2.708 l 1.654,0.751 2.487,-15.272 0,0 z"
                            id="path11"
                            inkscape:connector-curvature="0"
                            style="fill:#00579f" /><path
                            d="m 206.742,70.664 c 1.506,-4.063 7.301,-19.788 7.301,-19.788 -0.076,0.151 1.503,-4.138 2.406,-6.771 l 1.278,6.094 c 0,0 3.463,16.929 4.215,20.465 -2.858,0 -11.588,0 -15.2,0 l 0,0 z m 22.573,-45.669 -14.145,0 c -4.362,0 -7.676,1.278 -9.558,5.868 l -27.163,64.855 19.188,0 c 0,0 3.159,-8.729 3.838,-10.609 2.105,0 20.771,0 23.479,0 0.525,2.483 2.182,10.609 2.182,10.609 l 16.932,0 -14.753,-70.723 0,0 z"
                            id="path13"
                            inkscape:connector-curvature="0"
                            style="fill:#00579f" /><path
                            d="M 82.584,24.995 64.675,73.222 62.718,63.441 C 59.407,52.155 49.023,39.893 37.435,33.796 l 16.404,61.848 19.338,0 28.744,-70.649 -19.337,0 0,0 z"
                            id="path15"
                            inkscape:connector-curvature="0"
                            style="fill:#00579f" /><path
                            d="m 48.045,24.995 -29.422,0 -0.301,1.429 c 22.951,5.869 38.151,20.016 44.396,37.02 L 56.322,30.94 c -1.053,-4.517 -4.289,-5.796 -8.277,-5.945 l 0,0 z"
                            id="path17"
                            inkscape:connector-curvature="0"
                            style="fill:#faa61a" /></g>
                    </svg>
                @else


                    <svg class="shrink-0" width="32" height="24" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient x1="1.829%" y1="100%" x2="100%" y2="2.925%" id="c1-a">
                                <stop stop-color="#475569" offset="0%" />
                                <stop stop-color="#1E293B" offset="100%" />
                                <stop stop-color="#9FA1FF" offset="100%" />
                            </linearGradient>
                        </defs>
                        <g fill="none" fill-rule="evenodd">
                            <rect fill="url(#c1-a)" width="32" height="24" rx="3" />
                            <ellipse fill="#E61C24" fill-rule="nonzero" cx="12.522" cy="12" rx="5.565" ry="5.647" />
                            <ellipse fill="#F99F1B" fill-rule="nonzero" cx="19.432" cy="12" rx="5.565" ry="5.647" />
                            <path d="M15.977 7.578A5.667 5.667 0 0 0 13.867 12c0 1.724.777 3.353 2.11 4.422A5.667 5.667 0 0 0 18.087 12a5.667 5.667 0 0 0-2.11-4.422Z" fill="#F26622" fill-rule="nonzero" />
                        </g>
                    </svg>

                @endif

                <div>
                    <div class="text-sm font-medium text-slate-800">{{ $card->type }}</div>
                    <div class="text-xs">{{ Str::of($card->card_number)->mask('*', 0, -4) }}</div>
                </div>
            </div>
            <!-- Name -->
            <div class="col-span-6 order-2 sm:order-none sm:col-span-3 text-left sm:text-center lg:sidebar-expanded:hidden xl:sidebar-expanded:block">
                <div class="text-sm font-medium text-slate-800 truncate">{{ $card->name }}</div>
            </div>
            <!-- Card limits -->
            <div class="col-span-6 order-1 sm:order-none sm:col-span-4 text-right sm:text-center lg:sidebar-expanded:col-span-6 xl:sidebar-expanded:col-span-4">
                <div class="text-sm">$780,00 / $20,000</div>
            </div>
            <!-- Card status -->
            <div class="col-span-6 order-2 sm:order-none sm:col-span-2 text-right lg:sidebar-expanded:hidden xl:sidebar-expanded:block">
                <div class="text-xs inline-flex font-medium bg-emerald-100 text-emerald-600 rounded-full text-center px-2.5 py-1">Active</div>
            </div>
        </div>
    </div>
    <div class="absolute inset-0 border-2 border-transparent peer-checked:border-indigo-400 rounded pointer-events-none" aria-hidden="true"></div>
</label>
