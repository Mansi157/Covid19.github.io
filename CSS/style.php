<style>
	html{
		scroll-behavior: smooth;
	}
	*{
		margin:0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Muli',sans-serif;

	}

	.row{
		margin-left: 0!important;
		margin-right: 1!important
	}
	
	/*/////////// NAVBAR ///////////*/
    .nav_style{
    	background-color: #007bff;!important;

    }
    .nav_style a{
    	columns: white!important;
    }
    .logo{
    	color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
    }
    .navbar-header button.navbar-toggle, .navbar-header .icon-bar {
       background-color: white;
       border: 1px solid #61122f;
    }
  
/*/////main header ////*/
    .main_header{
    	height: 450px;
    	width: 100%;
    }
    .rightside h1{
    	font-size: 3rem;
    }
    .goimg img{
    	animation: gocorona 3s linear infinite;
    }
    @keyframes gocorona{
    	0%{transform: rotate(0);}
    	0%{transform: rotate(360deg);}
    }
    .leftside img{
    	animation: heart 5s linear infinite;
    }
    @keyframes heart{
    	0%{transform: scale(.75);}
    	20%%{transform: scale(1);}
    	40%%{transform: scale(.75);}
    	60%%{transform: scale(1);}
    	80%%{transform: scale(.75);}
    	100%%{transform: scale(.75);}
    }

    /* -------------corona update-----------*/
    .corona_update{
    	margin: 0 0 30px 0;
    }
    .corona_update h3{
    	color: #ff7675;
    }
    .corona_update h1{
    	font-size: 2rem;
    	text-align: center;
    }
    /*----------------aboutsection---------------*/
   .sub_section{
    	background-color: #F5F5F5;
    }
    /*#aboutid{
        color: #212529;
    }*/
    .footer_style {
    	background-color:#343a40!important;

    }
    .footer_style p {
        margin-bottom: 0!important;
    }
    #myBtn {
    display: none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    border: none;
    outline: none;
    background-color:#343a40!important;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
}
#myBtn:hover {
    background-color: black;

}
/*/////////////responsive///////////*/
@media(max-width: 768px){
	.main_header{
		height: 700px;
		text-align: center;
	}
	.main_header h1{
		text-align: center;
		padding:0;
		width: 100%;
		font-size: 54px;
		font-weight: bold!important
	}
.count-style{
	display: none; 
	}
	.count-style p{
		
		text-align: center!important;
	}
	.about_res{
		margin-left: 0!important;
	}
	#Contactid{
		align-items: left;
		padding-right:0!important ;
        padding-left:0!important;
	}
	.navbar-toggler{
		color: white;
	}

}

</style>