 let a="background-color:#00ffff; color:#ff00ff; " 
a+="font-size:24pt; font-family:'Times New Roman'" 
let naim='Сеть магазинов "ВСЁ ДЛЯ ДОМА"'
let da= new Date()
let d=da.getDate()+"."+(da.getMonth()+1)+"."+da.getFullYear() 
document.write('<P align=center style= "'+a+'">'+
naim+'</p><P>Сегодня '+d+'</p>')
let i=0;
let imgs=new Array('1.jpg','2.jpg'); //        Добавте свои картинки через запятую

function imgsrc(){
   let image=document.getElementById("image");
      image.src=imgs[++i];}