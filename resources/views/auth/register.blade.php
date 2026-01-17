<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gray-900">

    <div class="relative w-full h-screen flex overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img 
            src="{{ asset('images/login.png') }}"
            alt="Main Banner"
            class="w-full h-full object-cover" 
        >
        </div>

        <div class="relative z-10 w-full flex flex-col md:flex-row items-center justify-center md:justify-between px-6 md:px-24">
            
            <div class="text-white max-w-lg mb-10 md:mb-0">
                <h1 class="text-5xl md:text-7xl font-bold mb-4">New User?</h1>
                <p class="text-gray-200 text-lg md:text-xl font-light leading-relaxed">
                    We Handle from your stay, your plans, to your experiences everything handled in one step.
                </p>
                <p class="mt-4 text-sm text-gray-300">Book now! Travel effortlessly.</p>
            </div>

            <div class="bg-[#052e16] p-8 rounded-3xl shadow-2xl w-full max-w-md border border-green-900/50">
                
                <h2 class="text-2xl text-white text-center mb-8 font-medium">Create your Account</h2>

                <form action="{{ route('register.process') }}" method="POST" class="space-y-5">
                    @csrf

                    <div class="relative">
                        <label class="absolute -top-2.5 left-4 bg-[#052e16] px-1 text-gray-300 text-sm">email :</label>
                        <input type="email" name="email" required
                               class="w-full bg-transparent border border-gray-400 rounded-lg px-4 py-3 text-white outline-none focus:border-white transition-colors">
                    </div>

                    <div class="relative">
                        <label class="absolute -top-2.5 left-4 bg-[#052e16] px-1 text-gray-300 text-sm">password :</label>
                        <input type="password" name="password" required
                               class="w-full bg-transparent border border-gray-400 rounded-lg px-4 py-3 text-white outline-none focus:border-white transition-colors">
                    </div>

                    <div class="relative">
                        <label class="absolute -top-2.5 left-4 bg-[#052e16] px-1 text-gray-300 text-sm">confirm password :</label>
                        <input type="password" name="password_confirmation" required
                               class="w-full bg-transparent border border-gray-400 rounded-lg px-4 py-3 text-white outline-none focus:border-white transition-colors">
                    </div>

                    <button type="submit" class="w-full bg-gray-300 hover:bg-white text-gray-900 font-semibold py-3 rounded-lg mt-4 transition-all duration-300">
                        Submit
                    </button>
                    
                    <div class="text-center text-xs text-gray-400 mt-2">
                        Already have an account? <a href="{{ route('login') }}" class="text-white underline">Login</a>
                    </div>
                </form>

                <div class="flex justify-center gap-4 mt-6">
                    <a href="{{ route('social.redirect', 'google') }}" class="bg-white p-2 rounded-lg hover:scale-105 transition transform flex items-center justify-center">
                        <svg class="w-6 h-6" viewBox="0 0 24 24">
                            <path fill="#EA4335" d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .533 5.333.533 12S5.867 24 12.48 24c3.44 0 6.053-1.147 8.16-3.293 2.133-2.133 2.907-5.133 2.907-8.107 0-.587-.067-1.173-.173-1.68H12.48z"/>
                        </svg>
                    </a>

                    <a href="{{ route('social.redirect', 'facebook') }}" class="bg-[#1877F2] p-2 rounded-lg hover:scale-105 transition transform flex items-center justify-center">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>