<x-app-layout>
    <x-slot name="header">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                Dashboard
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Content Row -->
                <div class="row">

                    <!-- total_orders -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total Thesis</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $total_thesis ?? null }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- orders_count_today -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Active Thesis</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $active_thesis ?? null }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-book fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- new_users -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            New Users</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $new_users ?? null }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- total_users -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Total Users</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $users }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Web Visits</h6>

                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <div id="chartContainerVisits" style="height: 300px; width: 100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Popular Services</h6>

                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie ">
                                    @forelse ($popular_items as $popular_item)
                                        <li>
                                            <a href="{{ route('single_thesis', [$popular_item->thesis_id]) }}">
                                                {{ \Illuminate\Support\Str::limit($popular_item->title, 20) }} -
                                                {{ \Carbon\Carbon::parse($popular_item->published_at)->format('d / M / y') }}
                                            </a>
                                        </li>

                                    @empty
                                    @endforelse
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        {{-- Jquery --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
                integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <script type="text/javascript">
            var page_visits = {!! json_encode($page_visits->toArray(), JSON_HEX_TAG) !!};

            console.log(page_visits);

            const monthNames = ["January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            const d = new Date();

            window.onload = function() {

                var chart2 = new CanvasJS.Chart("chartContainerVisits", {
                    animationEnabled: true,
                    title: {
                        text: "E-Portal Web Visits Per Day"
                    },
                    axisY: {
                        // title: "Revenue in PHP",
                        valueFormatString: "#0.",
                        // prefix: "â‚±"
                    },
                    data: [{
                        type: "splineArea",
                        color: "rgba(54,158,173,.7)",
                        markerSize: 5,
                        xValueFormatString: "YYYY-MM-DD",
                        yValueFormatString: "#,##0.##",
                        dataPoints: [
                            @foreach ($page_visits as $page_visit)
                                {
                                    x: new Date("{{ $page_visit->day }}"),
                                    y: {{ $page_visit->count }}
                                },
                            @endforeach
                        ]
                    }]
                });
                chart2.render();

            }
        </script>
    @endpush
</x-app-layout>
