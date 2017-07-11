/**
 * Created by charlietyn on 07/01/2016.
 */
function Notification(theme,sticky,horizontal,vertical,heading,text,life)
{
    var settings = {
        theme: theme,
        sticky: sticky,
        horizontalEdge: horizontal,
        verticalEdge: vertical,
        heading:'<i class="fa fa-thumbs-o-up" style="margin-right: 5px"></i>'+heading,
        life:life,
        family:'chicchat'
    }
    $.notific8('zindex', 115003);
    $.notific8(text, settings);
}

function NotificationW8(color,heading,text,life,img)
{
    $.smallBox({
        title: heading,
        content: text,
        color: color,
        img: img,
        timeout: life
    });
}

function LoadingW8(title,content,img,timeout,special)
{
    $.MetroLoading({
        title: title,
        content: content,
        img: img,
        timeout:timeout,
        special: special
    }, function () {
        alert("Finish!")
    });
    setTimeout(function () {
    }, 7000)
}