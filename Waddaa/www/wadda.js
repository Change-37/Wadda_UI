var user = {
    name: "",
    id: "",
    mail: "",
    password: ""
};


function checkInput() {
    if(!document.joinIn.name.value) 
    {
        window.alert("이름을 입력해주세요.");
    }
    else if(!document.joinIn.mail.value) 
    {
        window.alert("이메일을 입력해주세요.");
    }
    else if(!document.joinIn.id.value) 
    {
        window.alert("아이디를 입력해주세요.");
    }
    else if(!document.joinIn.password.value) 
    {
        window.alert("비밀번호를 입력해주세요.");
    }
    else if(document.joinIn.password.value.length < 8)
    {
        window.alert("비밀번호가 8자 미만입니다.");
    }
    else if(document.joinIn.password.value != document.joinIn.checkpw.value) 
    {
        window.alert("비밀번호를 확인해주세요.");
    }
    else 
    {
        user.name = document.joinIn.name.value;
        user.id = document.joinIn.id.value;
        user.mail = document.joinIn.mail.value;
        user.password = document.joinIn.password.value;
        console.log("name =", user.name);
        console.log("id =", user.id);
        console.log("mail =", user.mail);
        console.log("password =", user.password);
        window.alert("회원가입이 완료되었습니다.");
    }
};



var imgs = ("./mainImg1.jpg", "./mainImg2.jpg", "./mainImg3.jpg", "./mainImg4.jpg");


var slideIndex = 0;
function slideShow()
{
if(navigator.appName=="Netscape" && document.getElementById)
{
document.getElementById("mainImg").src=imgs[n];
}
else document.images.slide.src=imgs[n];
(n==(imgs.length-1))?n=0:n++;
setTimeout(slideShow(),2000);
}