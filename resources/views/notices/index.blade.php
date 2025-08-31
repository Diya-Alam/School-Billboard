<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School/Madrasa Noticeboard</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-400 via-pink-500 to-blue-600 min-h-screen p-4">
    <div class="container mx-auto max-w-4xl">
        <!-- School Information Section -->
        <div class="card bg-gray-900 bg-opacity-60 shadow-xl backdrop-blur-md mt-8">
            <div class="card-body">
                <div class="flex items-center justify-center space-x-4 mb-4">
                    <img src="https://placehold.co/100x100/A0DAA9/FFFFFF?text=Logo" alt="School Logo" class="rounded-full">
                    <h2 class="text-3xl font-bold text-white mb-2">Welcome to The Evergreen Academy, a place where young minds blossom and futures take root! 🌱</h2>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    Our name reflects our commitment to providing an environment that fosters continuous growth, resilience, and a love for learning. Like the evergreen tree, we aim to equip our students with the skills and character to thrive in any season of life.
                </p>
                <h3 class="text-2xl font-semibold text-white mt-4 mb-2">Student Rules and Expectations</h3>
                <p class="text-gray-300 leading-relaxed mb-4">
                    At The Evergreen Academy, we believe a safe, respectful, and organized environment is key to a great learning experience. Our rules are designed to help every student succeed and feel a sense of belonging.
                </p>
                <ul class="text-gray-300 space-y-4">
                    <li><strong class="font-semibold text-white">Respect and Kindness:</strong> Treat everyone—classmates, teachers, and staff—with respect. Bullying, harassment, or any form of unkind behavior is never acceptable. We encourage empathy and active listening to build a strong, supportive community.</li>
                    <li><strong class="font-semibold text-white">Punctuality and Preparedness:</strong> Be on time for all classes and school events. Arriving late disrupts the learning for everyone. Come to school each day with all the necessary books, supplies, and completed assignments. Being prepared shows you value your education and the time of your teachers and peers.</li>
                    <li><strong class="font-semibold text-white">Dress Code:</strong> Our dress code promotes a focused and professional atmosphere. Students must wear the official school uniform cleanly and neatly. This helps reduce distractions and fosters a sense of unity among the student body.</li>
                    <li><strong class="font-semibold text-white">Academic Integrity:</strong> Honesty is fundamental to our school's values. All academic work, including homework, tests, and projects, must be your own. Cheating, plagiarism, or any form of academic dishonesty will not be tolerated and will have serious consequences.</li>
                    <li><strong class="font-semibold text-white">Technology Use:</strong> Personal electronic devices, such as cell phones, are to be turned off and put away during class time unless a teacher gives explicit permission for educational use. This rule ensures that students remain focused on their lessons and engage with their peers and teachers in person.</li>
                    <li><strong class="font-semibold text-white">Safety and Community:</strong> Always follow safety protocols and instructions from school staff. Help keep our school clean and orderly by using trash cans and treating school property with care. Your actions contribute to a positive and safe environment for everyone.</li>
                </ul>
            </div>
        </div>
        <div class="flex justify-between items-center my-8">
            <h1 class="text-4xl font-extrabold text-white">Noticeboard</h1>
            <a href="{{ route('notices.create') }}" class="btn btn-primary shadow-lg">
                Add New Notice
            </a>
        </div>

        @if(session('success'))
            <div role="alert" class="alert alert-success mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <div class="space-y-8">
            @forelse($notices as $notice)
                <div class="card bg-gray-950 shadow-2xl transition-transform transform hover:scale-105">
                    <div class="card-body">
                        <div class="flex justify-between items-center">
                            <h2 class="card-title text-4xl font-extrabold text-white">{{ $notice->title }}</h2>
                            <p class="text-xl text-gray-400 tracking-widest">{{ \Carbon\Carbon::parse($notice->notice_date)->format('F j, Y') }}</p>
                        </div>
                        <p class="text-gray-300 leading-relaxed mt-4">{{ $notice->description }}</p>
                    </div>
                </div>
            @empty
                <div class="alert alert-info shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>No notices have been added yet.</span>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>
