    var canvas = document.getElementById("fraktal");
    var ctx = canvas.getContext("2d");
    function kresli(startX, startY, delka, uhel) {
    ctx.beginPath();
    ctx.save();
    ctx.translate(startX, startY);
    ctx.rotate(uhel * Math.PI/180);
    ctx.moveTo(0, 0);
    ctx.lineTo(0, -delka);
    ctx.strokeStyle = "brown";
    ctx.shadowColor = '#009900';
    ctx.shadowBlur = 2;
    ctx.stroke();
  
    if(delka < 10) {
        ctx.restore();
        return;
    }
  
    kresli(0, -delka, delka*0.8, Math.floor(Math.random() * -60));
    kresli(0, -delka, delka*0.8, Math.floor(Math.random() * 50));
    ctx.restore();
    }

    kresli(750,650, Math.floor(Math.random() * 80) + 50,0);

    setTimeout(function(){
    window.location.reload(1);
    }, 2000);