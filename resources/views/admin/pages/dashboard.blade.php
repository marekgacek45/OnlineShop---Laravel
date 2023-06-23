@extends('layout/admin')
@section('subtitle','Panel Admina')

@section('content')
    
<h1>Dashboard</h1>
<div class="dashboard__date">
    <input type="date">
</div>
<!--INSIGHTS-->
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
<!--RECENT ORDERS-->
<div class="dashboard__orders">
    <h2>recent orders</h2>
    <table>
        <thead>
            <tr>
                <td>Product Name</td>
                <td>Product Number</td>
                <td>Payment</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Koszulka San Jose</td>
                <td>12344</td>
                <td>Due</td>
                <td>Pending</td>
                <td >Details</td>
            </tr>
            <tr>
                <td>Koszulka San Jose</td>
                <td>12344</td>
                <td>Due</td>
                <td>Pending</td>
                <td >Details</td>
            </tr>
            <tr>
                <td>Koszulka San Jose</td>
                <td>12344</td>
                <td>Due</td>
                <td>Pending</td>
                <td >Details</td>
            </tr>
            <tr>
                <td>Koszulka San Jose</td>
                <td>12344</td>
                <td>Due</td>
                <td>Pending</td>
                <td >Details</td>
            </tr>
            <tr>
                <td>Koszulka San Jose</td>
                <td>12344</td>
                <td>Due</td>
                <td>Pending</td>
                <td >Details</td>
            </tr>
        </tbody>
    </table>
        <a href="">Show All</a>
</div>

@endsection
@section('right')
<div class="top">
    <div class="asside__top-hamburger">
        <button class="hamburger hamburger--boring dashboard__hamburger" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
    <div class="theme-toggler">
        <i class="uil uil-sun active"></i>
        <i class="uil uil-moon"></i>
    </div>
    <div class="profile">
        <div class="info">
            <p>Hey, <b>Rafał</b></p>
            <small>admin</small>
        </div>
        <div class="profile-photo">
            <img src="https://cdn.pixabay.com/photo/2016/09/01/08/25/smiley-1635458_1280.png" alt="">
        </div>
    </div>
</div>
    <div class="recent-updates">
        <h2>Recent Updates</h2>
        <div class="updates">
            <div class="update">
                <div class="profile-photo">
                    <img src="https://cdn.pixabay.com/photo/2016/09/01/08/25/smiley-1635458_1280.png" alt="">
                </div>
                <div class="message">
                    <p><b>Adam Małysz</b> wiadmość testowa</p>
                    <small>2 minuty temu</small>
                </div>
            </div>
            <div class="update">
                <div class="profile-photo">
                    <img src="https://cdn.pixabay.com/photo/2016/09/01/08/25/smiley-1635458_1280.png" alt="">
                </div>
                <div class="message">
                    <p><b>Adam Małysz</b> wiadmość testowa</p>
                    <small>2 minuty temu</small>
                </div>
            </div>
            <div class="update">
                <div class="profile-photo">
                    <img src="https://cdn.pixabay.com/photo/2016/09/01/08/25/smiley-1635458_1280.png" alt="">
                </div>
                <div class="message">
                    <p><b>Adam Małysz</b> wiadmość testowa</p>
                    <small>2 minuty temu</small>
                </div>
            </div>
        </div>
    </div>
    <div class="sales-analytics">
        <h2>Sales Analytics</h2>
        <div class="item online">
            <div class="icon">
                <i class="uil uil-shopping-cart-alt"></i>
            </div>
            <div class="right">
                <div class="info">
                    <h3>Zamówienia online</h3>
                    <small>Ostatnie 24 godziny</small>
                </div>
                <h5>+39%</h5>
                <h3>3849</h3>
            </div>
        </div>
        <div class="item offline">
            <div class="icon">
                <i class="uil uil-shopping-bag"></i>
            </div>
            <div class="right">
                <div class="info">
                    <h3>Zamówienia online</h3>
                    <small>Ostatnie 24 godziny</small>
                </div>
                <h5>+39%</h5>
                <h3>3849</h3>
            </div>
        </div>
        <div class="item online">
            <div class="icon">
                <i class="uil uil-shopping-cart-alt"></i>
            </div>
            <div class="right">
                <div class="info">
                    <h3>Zamówienia online</h3>
                    <small>Ostatnie 24 godziny</small>
                </div>
                <h5>+39%</h5>
                <h3>3849</h3>
            </div>
        </div>
        <div class="item add-product">
            <div class="button">
                <i class="uil uil-plus-circle"></i>  
                <h3>Dodaj Produkt</h3>
            </div>
        </div>
    </div>
@endsection