<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4">
                @php
                    $positions = [
                        "1C Developer", "Android Developer", "Business Analyst", "C/C++ Developer",
                        "C# Developer", "Data Scientist", "DevOps", "Flutter Developer",
                        "Frontend Developer", "Golang Developer", "iOS Developer", "Java Developer",
                        "Machine Learning Engineer", "Node.js Developer", "PHP Developer", "Product Manager",
                        "Project Manager", "Python Developer", "QA Engineer", "Ruby Developer"
                    ];
                @endphp

                @foreach ($positions as $position)
                    <div class="bg-gray-800 text-white p-4 rounded-lg shadow-lg text-center">
                        {{ $position }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
