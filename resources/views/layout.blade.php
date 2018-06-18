<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
        header, .container{
            width:800px;
            margin:auto;
        }
        header{
            height: 150px;
            line-height: 150px;
            text-align: center;
            background: lightblue;
            color:white;
            font-size: 50px;
        }

    </style>
  </head>
  <body>
      <header>
            <span>BOOLEAN FASHION-SHOP</span>
            <hr>
      </header>
      <div class="container">
        <main>
          @yield('contenuto')
        </main>


      </div>

  </body>
</html>
