<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
body {
  font-family:sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #eee;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
    background-color: #99ccfd;
    width: 10%;
    padding: 0px 6px;
}

.dropdown .dropbtn {
    font-size: 12px;
    border: none;
    outline: none;
    color: white;
    padding: 6px 9px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    width: 100%;
    position: relative;
    height: 100%;
}

.navbar a:hover, .dropdown:hover{
  background-color: black;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 116px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.rlmargin
{
 margin:0 2px;
 margin-bottom: 6px;
 }
.rmargin{
    margin-right: 2px;
    margin-bottom: 6px;
}
.lmargin{
    margin-left:2px;
    margin-bottom: 6px;
}
.middle{
    margin: 0 auto;
    width: 95%;
    display: flex;
    margin-top: 20px;
}

</style>
</head>
<body>

<div class="navbar">
   <div class="middle">
   <div class="dropdown rmargin">
        <button class="dropbtn">HOMES FOR SALE</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
    <div class="dropdown rlmargin">
        <button class="dropbtn">HOMES FOR RENT</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
    <div class="dropdown rlmargin">
        <button class="dropbtn">LAND FOR SALE</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div>

    <div class="dropdown rlmargin">
        <button class="dropbtn">NEW CONSTRUCTION</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
    <div class="dropdown rlmargin">
        <button class="dropbtn">REAL ESTATE INFO</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
    <div class="dropdown rlmargin">
        <button class="dropbtn">BUILDERS</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
    <div class="dropdown rlmargin">
        <button class="dropbtn">TOWNS</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
    <div class="dropdown rlmargin">
        <button class="dropbtn">ADVERTISING</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
    <div class="dropdown rlmargin">
        <button class="dropbtn">ABOUT VINCE</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 
    <div class="dropdown lmargin">
        <button class="dropbtn">CONTACT</button>
        <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        </div>
    </div> 

   </div>
</div>


</body>
</html>
