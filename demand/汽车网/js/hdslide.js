window.onload = function() {
	Hdmen();
	Slide();
	MoreBox();
}

function Slide() {
	var pDiv = document.getElementById("picbox");
	var pLi = pDiv.getElementsByTagName("li");

	var tDiv = document.getElementById("tab-1");
	var tLi = tDiv.getElementsByTagName("li");

	var timers = null;

	for(var i = 0; i < tLi.length; i++) {
		tLi[i].index = i;
		tLi[i].onclick = function() {
			for(var j = 0; j < tLi.length; j++) {
				tLi[j].className = "";
				pLi[j].style.display = "none";
			}
			this.className = "select1";
			pLi[this.index].style.display = "block";
		}
	}

timers= setInterval(autopic,5000);//执行自动切换

//图片自动切换
	var picnumber = 0;

		function autopic() {
			picnumber++;
			if(picnumber >= tLi.length) {
				picnumber = 0;
			}
			for(var i = 0; i < tLi.length; i++) {
				tLi[i].className = "";
				pLi[i].style.display = "none";
			}
			tLi[picnumber].className = "select1";
			pLi[picnumber].style.display = "block";
		}

    pDiv.onmouseenter=function(){
    	clearInterval(timers);
    }
    pDiv.onmouseleave=function(){
    	timers= setInterval(autopic,5000);
    }


}

function Hdmen() {
	var cDiv = document.getElementById("colum");
				var cLi=cDiv.getElementsByTagName("li");
				
				var uBox=document.getElementById("usedcarbox");
				var uDiv=uBox.getElementsByTagName("div");
				
				for (var i=0;i<cLi.length;i++) {
					cLi[i].index=i;				
					cLi[i].onclick=function(){
						for (var j=0;j<cLi.length;j++) {
							cLi[j].className="";
							uDiv[j].style.display="none";
						}
						this.className="select2";
						uDiv[this.index].style.display="block";
					}
					
				}
			}

function MoreBox(){
	        var FromShow2=document.getElementById("fromshow2");
		    var FromboxH3=document.getElementById("fromboxtitle");
		    
			var ThCarBox=document.getElementById("thcarbox");
			var ThBut=ThCarBox.getElementsByTagName("button");
			var Thh3=ThCarBox.getElementsByTagName("h3");
			
			var TgCarBox=document.getElementById("tgcarbox");
			var TgBut=TgCarBox.getElementsByTagName("button");
			var TgH3=TgCarBox.getElementsByTagName("h3");
			
			for (var t=0;t<Thh3.length;t++) {
				ThBut[t].index=t;				
				TgBut[t].valid=t;
				ThBut[t].onclick=function(){
					FromShow2.style.display="block";
					FromboxH3.innerHTML=Thh3[this.index].innerText;
				}
				
				TgBut[t].onclick=function(){
					FromShow2.style.display="block";
					FromboxH3.innerHTML=Thh3[this.valid].innerText;
				}
			}
}
