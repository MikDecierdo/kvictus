<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <aside class="sidebar">
        <h2><i class="fas fa-cubes"></i><span>KVictus</span></h2>
        <nav>
            <a href="#" class="active"><i class="fas fa-th-large"></i><span>Dashboard</span></a>
            <a href="#"><i class="fas fa-users"></i><span>Users</span></a>
            <a href="#"><i class="fas fa-shopping-cart"></i><span>Orders</span></a>
            <a href="#"><i class="fas fa-box"></i><span>Products</span></a>
            <a href="#"><i class="fas fa-chart-bar"></i><span>Reports</span></a>
        </nav>
    </aside>

    <div class="main">
        <div class="header">
            <div>
                <h1>Dashboard</h1>
                <p class="welcome-msg">Welcome back, Kim! Here&rsquo;s what&rsquo;s happening today.</p>
            </div>
            <div class="header-right">
                <i class="fas fa-bell"></i>
                <i class="fas fa-envelope"></i>
                <div class="avatar">JD</div>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <div class="card-info">
                    <h3>Total Revenue</h3>
                    <div class="value">45,231</div>
                </div>
                <div class="card-icon bg-blue"><i class="fas fa-dollar-sign"></i></div>
            </div>
            <div class="card">
                <div class="card-info">
                    <h3>Active Users</h3>
                    <div class="value">2,350</div>
                </div>
                <div class="card-icon bg-green"><i class="fas fa-users"></i></div>
            </div>
            <div class="card">
                <div class="card-info">
                    <h3>Orders</h3>
                    <div class="value">1,423</div>
                </div>
                <div class="card-icon bg-purple"><i class="fas fa-shopping-cart"></i></div>
            </div>
        </div>

        <div class="row">
            <div class="panel">
                <h3><i class="fa-brands fa-fonticons"></i>Brand Technologies</h3>
                <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;">
                    <div class="brand-item"><i class="fa-brands fa-accessible-icon"></i><span>Accessible</span></div>
                    <div class="brand-item"><i class="fa-brands fa-apple"></i><span>Apple</span></div>
                    <div class="brand-item"><i class="fa-brands fa-angellist"></i><span>AngelList</span></div>
                    <div class="brand-item"><i class="fa-brands fa-android"></i><span>Android</span></div>
                    <div class="brand-item"><i class="fa-brands fa-aws"></i><span>AWS</span></div>
                    <div class="brand-item"><i class="fa-brands fa-chrome"></i><span>Chrome</span></div>
                    <div class="brand-item"><i class="fa-brands fa-github"></i><span>GitHub</span></div>
                    <div class="brand-item"><i class="fa-solid fa-backward"></i><span>GitLab</span></div>
        
                </div>
            </div>
        </div>
    </div>
</body>
</html>