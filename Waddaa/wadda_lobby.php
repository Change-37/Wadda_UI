<!doctype HTML>
<head>
	<meta charset="UTF-8">
	<title>왔다 아이가</title>
	<link rel="stylesheet" href="waddalobby.css">
	<script src="main.js"></script>
    <style>
        p{ align-items: left; width: 100%; margin-top: 5%; text-size: 24px; }
        img{ align-items: center; width: 100%; height: 10%; max-height: 300px;}
    </style>
</head>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script>

$.ajax({ 
    url:"https://wadda1.cafe24.com/tk/load_td.php", // 여기에 관광지 DB 링크
    type:"POST", 
    success: function(result) { 

		
		html2 = "";
		result = JSON.parse(result);
	
		for(i=0;i<result.length;i++){
			
			html2 += '<li><a href="https://wadda1.cafe24.com/wadda_gwangwang.php?detail=' + result[i].seq + '"><img src="' + result[i].pic1 + '" alt="스토리"></a></li>';
		}
		$("#liclass").html(html2);
		

        
    } 
});
$.ajax({ 
    url:"https://wadda1.cafe24.com/tk/load_td.php", // 여기에 메인화면 슬라이더 넣은 이미지 DB 링크 
    type:"POST", 
    success: function(result) { 

		
		html2 = "";
		result = JSON.parse(result);

		for(i=0;i<result.length;i++){
			
			html2 += '<div class="image"><img src="' + result[i].pic + '" alt="스토리"></a><div class="image-text"><h2>'+result[i].text+'</h2></div></div>';
		}
		$("#slide-show").html(html2);
		

        
    } 
});

</script>

<body>
    <div class="main-container">
        <header>

        </header>
        <div class="main-section">
            <div id="slide-show">
                <div class="image"><img src="./mainImg1.jpg"></div>
                <div class="image"><img src="./mainImg2.jpg"></div>
                <div class="image"><img src="./mainImg3.jpg"></div>
                <div class="image"><img src="./mainImg4.jpg"></div>
                <div class="image"><img src="./mainImg5.jpg"></div>
                
            </div>
        </div>

        <h2>주변 관광지</h2>
        <section class="story-section">
                <div class="story-terms_box" tabindex="0" id="divService">
                    <ul id = "liclass" class="aaa">
                        
						<!--
                        <li><a href="#"><img src="./storyimg.jpg" alt="스토리1"></a></li>
                        <li><a href="#"><img src="./storyimg.jpg" alt="스토리1"></a></li>
                        <li><a href="#"><img src="./storyimg.jpg" alt="스토리1"></a></li>
                        <li><a href="#"><img src="./storyimg.jpg" alt="스토리1"></a></li>
                        <li><a href="#"><img src="./storyimg.jpg" alt="스토리1"></a></li>
                        <li><a href="#"><img src="./storyimg.jpg" alt="스토리1"></a></li>
                        <li><a href="#"><img src="./storyimg.jpg" alt="스토리1"></a></li>
						!-->
                    </ul>
                </div>
            </span>
        </section>

        <h2>날씨</h2>
        <section class="weather-section">
                <div class="weather-terms_box" tabindex="1" id="divService">
                    <ul>
                        <li><a href="#"><img src="./weather-bright.jpg" alt="날씨1"></a></li>
                        <li><a href="#"><img src="./weather-bright.jpg" alt="날씨1"></a></li>
                        <li><a href="#"><img src="./weather-bright.jpg" alt="날씨1"></a></li>
                        <li><a href="#"><img src="./weather-bright.jpg" alt="날씨1"></a></li>
                        <li><a href="#"><img src="./weather-bright.jpg" alt="날씨1"></a></li>
                        <li><a href="#"><img src="./weather-bright.jpg" alt="날씨1"></a></li>
                        <li><a href="#"><img src="./weather-bright.jpg" alt="날씨1"></a></li>
                        <li><a href="#"><img src="./weather-bright.jpg" alt="날씨1"></a></li>
                    </ul>                       
                </div>
        </section>
    </div>

	<script src="wadda_slide-show.js"></script>
</body>