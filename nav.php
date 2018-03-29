<style type="text/css">
    a:link
    {
        color:white;
    }
    a:visited
    {
        color:white;
    }
    a:active
    {
        color:black;
    }
    a:hover
    {
        color: white;
        transition:all ease .3s;
    }

    nav
    {

        background-color:rgba(0,151,167,0.5) !important;
        line-height: 3.5rem; 
        position: fixed;
        z-index: 997;

    }
    .nav_change {
        transition-duration: 1.5s;
    }
    .menu-button{
        cursor: pointer;
        margin-top: 0.1rem;
        margin-left: 2rem !important;
        z-index: 999;
    }

    .top-bar, .mid-bar, .bot-bar{
        font-size: 2rem;
        position: absolute;
    }

    .top-bar{
        margin: 0.4rem 0;
        transition: all .5s;

    }

    .mid-bar{
        opacity: 100%;
        transition:all ease .5s; 
    }

    .bot-bar{
        margin:  -0.4rem 0;
        transition: all ease .5s;
    }

    .top-bar.active{
        transform: rotate(225deg);
        margin-top: 0vh;

    }

    .mid-bar.active{
        transform: translateX(20px);
        opacity: 0;
        transition:all ease .3s;

    }

    .bot-bar.active{
        transform: rotate(-225deg);
        margin-top: 0vh;

    }
    @media only screen and (min-width: 993px) {
        nav .menu-button {
            display: none;
        }
    }

    nav ul a:hover {
        color: black;
        background-color: transparent;
    }
    footer ul a:hover {
        color: black;
        background-color: transparent;
    }

    .side-nav{
        width: 15rem;
        padding: 4rem 0;
        background-color: rgba(0,151,167,0.5) !important;
        margin: 0;

        position: fixed;
        transform:translateX(-15rem);
        transition:all ease 0.3s;
        z-index: 0;
        overflow-y: scroll;
        top: 0;
        bottom: 0;

    }

    .sidenav.active{
        transform:translateX(0rem);
    }

    .sidenav a{
        text-decoration: none !important;
        color: #000;
    }
    .sidenav li{
        font-size: 1.2rem;
        padding: 0.5rem 0;
    }
</style>
<div class="navbar-fixed" >
 <nav >
  <div class="nav-wrapper nav_change " >

   <div class="brand-logo col l3">
    <a href="#p
    ">
    <img src="img/logo.png" height="60rem" alt="Vision Mechatronics Logo" class="img-responsive">
</a>
</div>

<div data-activates="mobile-demo" class="button-collapse menu-button">
    <i class="small material-icons top-bar">remove</i>
    <i class="small material-icons mid-bar">remove</i>
    <i class="small material-icons bot-bar">remove</i>
</div>
<ul id="nav-mobile" class="right hide-on-med-and-down col l7">
    <li><a href="index.php"><font size="4">Home</font></a></li>
    <li><a href="re.php"><font size="4">Renewable Energy</font></a></li>
    <li><a href="lirack.php"><font size="4">Li-Rack</font></a></li>
    <li><a href="aboutus.php"><font size="4">About us</font></a></li>
    <li><a href="indo-euro.php"><font size="4">Indo-Euro</font></a></li>
    <li><a href="clients.php"><font size="4">Our Clients</font></a></li>
    <li><a href="career.php"><font size="4">Careers</font></a></li>
    <li><a href="contactus.php"><font size="4">Contact Us</font></a></li>
</ul>
<ul class="side-nav" id="mobile-demo">
    <li><a href="index.php"><font size="4">Home</font></a></li>
    <li><a href="re.php"><font size="4">Renewable Energy</font></a></li>
    <li><a href="lirack.php"><font size="4">Li-Rack</font></a></li>
    <li><a href="aboutus.php"><font size="4">About us</font></a></li>
    <li><a href="aboutus.php"><font size="4">Indo-Euro</font></a></li>
    <li><a href="clients.php"><font size="4">Our Clients</font></a></li>
    <li><a href="career.php"><font size="4">Careers</font></a></li>
    <li><a href="contactus.php"><font size="4">Contact Us</font></a></li>
</ul>
</div>
</nav>
</div>
