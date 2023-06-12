<body class="antialiased">
    <h1>Milestones Api</h1>
    @if(App::environment('local'))
        <p> This is the local environment</p>
    @endif
    <p>Visits {{$visits}}</p>
    <p>MySql version {{$mysql_version}}</p>
</body>