<?php
include('navbar.html');
?>

<body>
    <h1 class="text-center mt-5 text-[#1E90FF] text-[20px] md:text-[50px]">Contact</h1>
    
    <div class="flex justify-center items-center mt-10">
        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4 text-center">Chatbot</h1>
            
            <div id="chatBox" class="bg-gray-200 p-4 mb-4 h-64 overflow-y-auto rounded-md">
                <p class="text-sm text-gray-600">Chatbot: <?php echo htmlspecialchars($haiku); ?></p>
            </div>
            
            <form id="chatForm" class="flex" method="POST">
                <input type="text" id="userInput" class="w-full p-2 rounded-l-md border border-gray-300" placeholder="Typ hier je vraag...">
                <button type="submit" class="bg-blue-500 text-white p-2 rounded-r-md">Verstuur</button>
            </form>
        </div>
    </div>
</body>

<?php
include('footer.html');
?>