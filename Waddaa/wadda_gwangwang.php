<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
	<title>왔다 아이가</title>
	<link rel="stylesheet" href="waddasebupage.css">

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<?
	
	$var_i = $_GET['detail'];
	//echo $var_i;
?>


<script>

$.ajax({ 
    url:"https://wadda1.cafe24.com/tk/load_td.php?detail=<?=$var_i?>", 
    type:"POST", 
    success: function(result) { 
		

		aa = JSON.parse(result);


		console.log(aa);
		console.log(aa[0].pic1);

		//alert(result.pic1);


		
		html2 = "";
		html3 = "";
		html4 = "";
		html5 = "";
		html6 = "";
		html7 = "";
		result = JSON.parse(result);

		result = result[0];
	
		html2 += '<img src="' + result.pic1 + '" alt="관광지사진">';
		html3 += result.name;
		html4 += '<img src="/location.png">'+ result.address;
		//html5 += '<img src="/phone.png">'+ result.call;
		html6 += result.maintxt;
		html7 += '<h3>업로드 된 사진</h3>';

			html7 += '<img src="' + result.pic2 + '" alt="관광지사진"><img src="' + result.pic3 + '" alt="관광지사진"><img src="' + result.pic4 + '" alt="관광지사진"><img src="' + result.pic5 + '" alt="관광지사진">';

		$("#sMainImg").html(html2);
		$("#sName").html(html3);
		$("#sAddress").html(html4);
		$("#sNumber").html(html5);
		$("#sInfo").html(html6);
		$("#sImg").html(html7);
		

        
    } 
});

</script>
</head>

<body>
<header>
	<div class="header-container">
		<h2><a href="./wadda_lobby.php">와따 아이가!</a></h2>
	</div>
</header>
    <div class="main-container">
        <div class="image-section">
            <div class="tour-sight-image">
                <div class="image">
                    <div id="sMainImg"></div>
                    <div class="image-text">
                        <h2 id="sName"></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-section">
            <div id="sAddress"></div>
            <!--<div id="sNumber"></div>-->
            <div id="sInfo"></div>
            
        </div>
        <div class="info-image-section">
            <div id="sImg">

            </div>
        </div>
    </div>
</body>