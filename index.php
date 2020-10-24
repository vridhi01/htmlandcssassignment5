<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Assignment4</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- <link rel="stylesheet" href="style.css?ver=<?php echo rand(2,3);?>"> -->
      <style>
          *{
              margin:0;
              padding:0;
              box-sizing: border-box;
          }
          .maindiv{
            background-color: #eee;
            padding: 10px 10px;
            display: inline-block;
            width: 100%;
        }
        .middlediv{
            margin: 0 auto;
            display: flex;
        }
        .firstdiv{
            background-color: #99ccfd;
            width: 10%;
            padding: 8px 11px;
            float: left;
            position: relative;
            display: inline-block;
        }
        .firstp{
            font-family: sans-serif;
            font-size: 14px;
            text-align: center;
        }
        .rlmargin{
            margin:0 2px;
        }
        .rmargin{
            margin-right:2px;
        }
        .lmargin{
            margin-left:2px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            margin-top: 10px;
        }
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {background-color: #f1f1f1}

        .firstdiv:hover .dropdown-content {
        display: block;
        }

        .firstdiv:hover {
        background-color: black;
        color: #fff;
        }
        
       
    </style>
</head>
<body>
    <div class="maindiv">
    <div class="middlediv">
           <div class="firstdiv rmargin"> <!-- //dropdown -->
            <p class="firstp">HOMES FOR SALE</p> <!-- //dropbtn -->
            <div class="dropdown-content"><!-- //dropdown-content -->
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="firstdiv rlmargin">
            <p class="firstp">HOMES FOR RENT</p>
            <div class="dropdown-content"><!-- //dropdown-content -->
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="firstdiv rlmargin">
            <p class="firstp">LAND FOR SALE</p>
            <div class="dropdown-content"><!-- //dropdown-content -->
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="firstdiv rlmargin">
            <p class="firstp">NEW CONSTRUCTION</p>
            <div class="dropdown-content"><!-- //dropdown-content -->
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="firstdiv rlmargin">
            <p class="firstp">REAL ESTATE INFO</p>
            <div class="dropdown-content"><!-- //dropdown-content -->
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <div class="firstdiv rlmargin">
            <p class="firstp">BUILDERS</p>
        </div>
        <div class="firstdiv rlmargin">
            <p class="firstp">TOWNS</p>
        </div>
        <div class="firstdiv rlmargin">
            <p class="firstp">ADVERTISING</p>
        </div>
        <div class="firstdiv rlmargin">
            <p class="firstp">ABOUT VINCE</p>
        </div>
        <div class="firstdiv lmargin">
            <p class="firstp">CONTACT</p>
        </div>
</div>
    </div>
</body>
</html>

