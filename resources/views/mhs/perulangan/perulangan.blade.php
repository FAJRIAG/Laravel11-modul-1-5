<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <h3>Perulangan FOR</h3>
    @for($i=0; $i < count($mhs); $i++)
        {{'nama: '.$mhs[$i]}} <br>
    @endfor
    <hr>
    <h3>Perulangan FOREACH</h3>
    @foreach ($mhs as $item)
        {{'nama: '.$item}} <br>
    @endforeach
    <hr>
    <h3>Perulangan WHILE</h3>
    @php
        $x=0;
    @endphp
    @while ($x < count($mhs))
        {{'nama: '. $mhs[$x]}} <br>
        @php
            $x++;
        @endphp
    @endwhile
</body>
</html>