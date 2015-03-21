
var clockid=new Array()
var clockidoutside=new Array()
var i_clock=-1
var thistime= new Date()
var hours=thistime.getHours()
var minutes=thistime.getMinutes()
var seconds=thistime.getSeconds()
var year=thistime.getFullYear()
var month=thistime.getMonth()
var date=thistime.getDate()
var day=thistime.getDay()

if (eval(hours) <10) {hours="0"+hours}
if (eval(minutes) < 10) {minutes="0"+minutes}
if (seconds < 10) {seconds="0"+seconds}
var thistime = hours+":"+minutes+":"+seconds
    
function writeclock() {
    i_clock++
    if (document.all || document.getElementById || document.layers) {
        clockid[i_clock]="clock"+i_clock
        document.write("<span id='"+clockid[i_clock]+"' style='position:relative'>"+thistime+"</span>")
    }
}

function clockon() {
    thistime= new Date()
    hours=thistime.getHours()
    minutes=thistime.getMinutes()
    seconds=thistime.getSeconds()
    year=thistime.getFullYear()
    month=thistime.getMonth()
    date=thistime.getDate()
    day=thistime.getDay()

    if (eval(hours) <10) {hours="0"+hours}
    if (eval(minutes) < 10) {minutes="0"+minutes}
    if (seconds < 10) {seconds="0"+seconds}
    // daystrs={"Mon","Tue","Wed","Thu","Fri","Sat","Sun"}
    thistime = hours+":"+minutes+":"+seconds
    // +" "+date+"/"+month+"/"+year +" " 
    // +daystrs[day] 
        
    if (document.all) {
        for (i=0;i<=clockid.length-1;i++) {
            var thisclock=eval(clockid[i])
            thisclock.innerHTML=thistime
        }
    }
    
    if (document.getElementById) {
        for (i=0;i<=clockid.length-1;i++) {
            document.getElementById(clockid[i]).innerHTML=thistime
        }
    }
    var timer=setTimeout("clockon()",1000)
}
window.onload=clockon
