@extends('layout/admin')
@section('subtitle','Panel Admina')

@section('content')
    
<h1>Dashboard</h1>
<div class="dashboard__date">
    <input type="date">
</div>
    <div class="dashboard__insights">
    
    <!--1-->
    <div class="dashboard__insights-box dashboard__insights-box--sales">
        <i class="uil uil-chart"></i>
        <div class="middle">
            <div class="left">
                <h3>Sprzedaż Całkowita</h3>
                <h2>1245zł</h2>
            </div>
            <div class="progress">
                <svg>
                    <circle cx='38'cy="38"r='36'></circle>
                </svg>
                <div class="number">
                    <p>81%</p>
                </div>
            </div>
        </div>
        <p class="text-muted">
            Ostatnie 24 godziny
        </p>
    </div>
    <!--2-->
    <div class="dashboard__insights-box dashboard__insights-box--expenses">
        <i class="uil uil-analytics"></i>
        <div class="middle">
            <div class="left">
                <h3>Wydatki</h3>
                <h2>144zł</h2>
            </div>
            <div class="progress">
                <svg>
                    <circle cx='38'cy="38"r='36'></circle>
                </svg>
                <div class="number">
                    <p>66%</p>
                </div>
            </div>
        </div>
        <p class="text-muted">
            Ostatnie 24 godziny
        </p>
    </div>
    <!--3-->
    <div class="dashboard__insights-box dashboard__insights-box--income">
        <i class="uil uil-analysis"></i>
        <div class="middle">
            <div class="left">
                <h3>Wpływ</h3>
                <h2>1245zł</h2>
            </div>
            <div class="progress">
                <svg>
                    <circle cx='38'cy="38"r='36'></circle>
                </svg>
                <div class="number">
                    <p>81%</p>
                </div>
            </div>
        </div>
        <p class="text-muted">
            Ostatnie 24 godziny
        </p>
    </div>
</div>
@endsection