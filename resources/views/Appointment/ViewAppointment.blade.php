@extends('sidebar.patient')

@section('content')



<body class="flex justify-center h-screen bg-gray-100 relative ">
    
    <!--button add booking-->
    <div class="absolute right-6">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Appointment</button>
    </div>

    <!--appointment list-->
    <div class="flex flex-col w-full max-w-4xl  md:max-w-3xl">
        <div class="max-w-2xl w-full p-6 bg-red-100 rounded-lg">
                <h2 class="text-lg font-bold mb-4">Upcoming Appointments</h2>

                <div class="space-y-4 h-64 overflow-y-auto">
                    <div class="p-2 bg-red-50 rounded-lg">
                        <h3 class="font-semibold">Appointment 1</h3>
                        <p class="text-sm text-gray-600">Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <div class="p-2 bg-red-50 rounded-lg">
                        <h3 class="font-semibold">Appointment 2</h3>
                        <p class="text-sm text-gray-600">Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <div class="p-2 bg-red-50 rounded-lg">
                        <h3 class="font-semibold">Appointment 3</h3>
                        <p class="text-sm text-gray-600">Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <div class="p-2 bg-red-50 rounded-lg">
                        <h3 class="font-semibold">Appointment 3</h3>
                        <p class="text-sm text-gray-600">Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                    <div class="p-2 bg-red-50 rounded-lg">
                        <h3 class="font-semibold">Appointment 3</h3>
                        <p class="text-sm text-gray-600">Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                      <div class="p-2 bg-red-50 rounded-lg">
                        <h3 class="font-semibold">Appointment 3</h3>
                        <p class="text-sm text-gray-600">Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
        </div><br>
        
        <!--appointment history-->
        <div class="max-w-2xl w-full p-6 bg-red-100 rounded-lg ">
                <h2 class="text-lg font-bold mb-4">Appointments History</h2>

                <div class="space-y-4 h-64  overflow-y-auto">
                    <div class="flex justify-between items-center p-4 bg-pink-50 rounded-lg">
                        <div class="p-2 bg-red-50 rounded-lg">
                            <h3 class="font-semibold">Appointment 1</h3>
                            <p class="text-sm text-gray-600">Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                        <input type="button" value="View More" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    </div>

                    <div class="flex justify-between items-center p-4 bg-pink-50 rounded-lg">
                        <div class="p-2 bg-red-50 rounded-lg">
                            <h3 class="font-semibold">Appointment 1</h3>
                            <p class="text-sm text-gray-600">Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                        <input type="button" value="View More" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    </div>
                    <div class="flex justify-between items-center p-4 bg-pink-50 rounded-lg">
                        <div class="p-2 bg-red-50 rounded-lg">
                            <h3 class="font-semibold">Appointment 1</h3>
                            <p class="text-sm text-gray-600">Supporting line text lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                        <input type="button" value="View More" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    </div>
                </div>
        </div>
    </div>
    
</body>

@endsection

