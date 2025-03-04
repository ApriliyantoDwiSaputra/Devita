<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>

</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-600 text-white p-5">
      <i class="fi fi-sr-home"></i>
      <h2 class="text-xl font-bold mb-5">Dashboard</h2>
      <nav>
          <ul>
              <li class="mb-3"><a href="{{ route('dashboard') }}" class="block p-2 hover:bg-blue-700 rounded">Home</a></li>
              <li class="mb-3"><a href="{{ route('karyawan') }}" class="block p-2 hover:bg-blue-700 rounded">Karyawan</a></li>
              <li class="mb-3"><a href="{{ route('analytics') }}" class="block p-2 hover:bg-blue-700 rounded">Analytics</a></li>
              <li class="mb-3"><a href="{{ route('settings') }}" class="block p-2 hover:bg-blue-700 rounded">Settings</a></li>
          </ul>
      </nav>
    </aside>
    
    {{-- Digunakan di dalam template untuk menunjukkan bagian yang bisa diisi oleh view anak --}}
    @yield('content')
</body>
<script>
    const chartConfig = {
      series: [
        {
          name: "Sales",
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500, 70, 235, 450],
        },
      ],
      chart: {
        type: "bar",
        height: 240,
        toolbar: {
          show: false,
        },
      },
      title: {
        show: "",
      },
      dataLabels: {
        enabled: false,
      },
      colors: ["#020617"],
      plotOptions: {
        bar: {
          columnWidth: "40%",
          borderRadius: 2,
        },
      },
      xaxis: {
        axisTicks: {
          show: false,
        },
        axisBorder: {
          show: false,
        },
        labels: {
          style: {
            colors: "#616161",
            fontSize: "12px",
            fontFamily: "inherit",
            fontWeight: 400,
          },
        },
        categories: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
      },
      yaxis: {
        labels: {
          style: {
            colors: "#616161",
            fontSize: "12px",
            fontFamily: "inherit",
            fontWeight: 400,
          },
        },
      },
      grid: {
        show: true,
        borderColor: "#dddddd",
        strokeDashArray: 5,
        xaxis: {
          lines: {
            show: true,
          },
        },
        padding: {
          top: 5,
          right: 20,
        },
      },
      fill: {
        opacity: 0.8,
      },
      tooltip: {
        theme: "dark",
      },
    };
     
    const chart = new ApexCharts(document.querySelector("#bar-chart"), chartConfig);
     
    chart.render();
    </script>
</html>
