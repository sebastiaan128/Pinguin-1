<?php
include('navbar.html');
?>


<body>
    <h1 class="text-center mt-5 text-[#1E90FF] text-[20px] md:text-[50px]">FAQ</h1>
    <div class="accordion mx-auto w-3/4">

        <div class="border-b border-slate-200">
            <button onclick="toggleAccordion(1)" class="w-full flex justify-between items-center py-5 text-slate-800">
                <span>Waar wonen pinguïns eigenlijk? </span>
                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                    </svg>
                </span>
            </button>
            <div id="content-1" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <div class="pb-5 text-sm text-slate-500">
                    Hoewel we vaak denken aan Antarctica, wonen pinguïns op veel plekken in de wereld! Je vindt ze op de Zuidpool, maar ook in Zuid-Amerika, Australië, Afrika en zelfs op enkele eilanden in de buurt van de evenaar. Ze hebben zich aangepast aan heel verschillende klimaten. </div>
            </div>
        </div>


        <div class="border-b border-slate-200">
            <button onclick="toggleAccordion(2)" class="w-full flex justify-between items-center py-5 text-slate-800">
                <span>Waarom kunnen pinguïns zo goed zwemmen, maar niet zo goed lopen?</span>
                <span id="icon-2" class="text-slate-800 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                    </svg>
                </span>
            </button>
            <div id="content-2" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <div class="pb-5 text-sm text-slate-500">
                    Pinguïns zijn echte zwemkampioenen! Hun vleugels zijn veranderd in flippers, waardoor ze snel en behendig door het water kunnen glijden. Op het land zijn ze wat onhandiger omdat hun lichaam meer gebouwd is voor het zwemmen. </div>
            </div>
        </div>

        <div class="border-b border-slate-200">
            <button onclick="toggleAccordion(3)" class="w-full flex justify-between items-center py-5 text-slate-800">
                <span>Wat eten pinguïns? Vissen alleen?</span>
                <span id="icon-3" class="text-slate-800 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                    </svg>
                </span>
            </button>
            <div id="content-3" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <div class="pb-5 text-sm text-slate-500">
                    Pinguïns zijn echte visliefhebbers! Ze eten vooral vis, maar ook inktvis en krill staan graag op hun menu. Sommige soorten eten zelfs kleine pinguïntjes! </div>
            </div>
        </div>

        <div class="border-b border-slate-200">
            <button onclick="toggleAccordion(4)" class="w-full flex justify-between items-center py-5 text-slate-800">
                <span>Hoe houden pinguïns het warm in de ijskoude omgeving?</span>
                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                    </svg>
                </span>
            </button>
            <div id="content-4" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <div class="pb-5 text-sm text-slate-500">
                    Pinguïns hebben een superdik verenkleed dat ze beschermt tegen de kou. Ze hebben ook een laagje vet onder hun huid, net als een winterjas. Daarnaast knuffelen ze vaak samen in grote groepen om elkaar warm te houden. </div>
            </div>
        </div>

        <div class="border-b border-slate-200">
            <button onclick="toggleAccordion(5)" class="w-full flex justify-between items-center py-5 text-slate-800">
                <span>Kunnen alle pinguïns vliegen?</span>
                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                    </svg>
                </span>
            </button>
            <div id="content-5" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <div class="pb-5 text-sm text-slate-500">
                    Nee, pinguïns kunnen niet vliegen. Hun vleugels zijn te kort en te stijf om mee op te stijgen. Maar dat is geen probleem, want ze zijn supergoed in zwemmen! </div>
            </div>
        </div>

        <div class="border-b border-slate-200">
            <button onclick="toggleAccordion(6)" class="w-full flex justify-between items-center py-5 text-slate-800">
                <span>Waarom hebben pinguïns zo'n grappige manier van lopen?</span>
                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                    </svg>
                </span>
            </button>
            <div id="content-6" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <div class="pb-5 text-sm text-slate-500">
                    Het lijkt misschien een beetje gek, maar pinguïns lopen zo omdat ze hun evenwicht moeten bewaren. Hun lichaam is niet gemaakt voor het lopen op twee benen, dus waggelen ze een beetje.</div>
            </div>
        </div>

        <div class="border-b border-slate-200">
            <button onclick="toggleAccordion(7)" class="w-full flex justify-between items-center py-5 text-slate-800">
                <span>Hoe lang leven pinguïns gemiddeld?</span>
                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                    </svg>
                </span>
            </button>
            <div id="content-7" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <div class="pb-5 text-sm text-slate-500">
                    Dat verschilt per soort pinguïn. Sommige soorten worden maar een paar jaar oud, terwijl andere wel meer dan 30 jaar kunnen worden..</div>
            </div>
        </div>

        <div class="border-b border-slate-200">
            <button onclick="toggleAccordion(8)" class="w-full flex justify-between items-center py-5 text-slate-800">
                <span>Zijn er verschillende soorten pinguïns? En hoe verschillen ze van elkaar?</span>
                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                    </svg>
                </span>
            </button>
            <div id="content-8" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <div class="pb-5 text-sm text-slate-500">
                    Jazeker! Er zijn meer dan 20 verschillende soorten pinguïns. Ze verschillen in grootte, kleur en waar ze leven. De grootste pinguïn is de keizerpinguïn en de kleinste is de dwergpinguïn.</div>
            </div>
        </div>

        <div class="border-b border-slate-200">
            <button onclick="toggleAccordion(9)" class="w-full flex justify-between items-center py-5 text-slate-800">
                <span>Waarom hebben pinguïns vleugels als ze niet kunnen vliegen?</span>
                <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                    </svg>
                </span>
            </button>
            <div id="content-9" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <div class="pb-5 text-sm text-slate-500">
                    Hoewel pinguïns niet kunnen vliegen, zijn hun vleugels heel belangrijk voor het zwemmen. Ze gebruiken hun vleugels als flippers om snel door het water te bewegen.</div>
            </div>
        </div>

            <div class="border-b border-slate-200">
                <button onclick="toggleAccordion(10)" class="w-full flex justify-between items-center py-5 text-slate-800">
                    <span>Wat is het leukste feitje dat je over pinguïns weet?</span>
                    <span id="icon-1" class="text-slate-800 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
                            <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                        </svg>
                    </span>
                </button>
                <div id="content-10" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="pb-5 text-sm text-slate-500">
                        Wist je dat pinguïns heel goede zwemmers zijn en soms wel 30 kilometer per uur kunnen zwemmen? En dat ze onder water hun adem kunnen inhouden tot wel 20 minuten? Dat is echt supercool!</div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>



    <script>
        function toggleAccordion(index) {
            const content = document.getElementById(`content-${index}`);
            const icon = document.getElementById(`icon-${index}`);

            const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
      
    `;

            const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0';
                icon.innerHTML = plusSVG;
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.innerHTML = minusSVG;
            }
        }
    </script>
</body>

<?php
include('footer.html');
?>