var remainingTime = 0;
var language = 0;
var runs = 0;
var timer = null;
jQuery.noConflict();
function makeEditable(commentNumber, entryid) {
    runs++;
    //we have to prevent this function to be executed twice, but the
    //serendipity_event calling this function is executed twice
    if (runs==2) {
        getLanguage();
        var commentID = 'serendipity_comment_' + commentNumber;
        var base = cebase + 'commentedit';
        var loadbase = base + '_load';
        var formatted_comment = '';
        if (getRemainingTime() != 0 ) {
            jQuery("#"+commentID+" > .serendipity_commentBody").editable(
                 base, {
                 submitdata : { 'cid': commentNumber,
                             'entry_id': entryid },
                 name : 'comment',
                 type    : 'textarea',
                 tooltip   : language.edittooltip,
                 submit  : language.editsubmit,
                 cancel: language.editcancel,
                 onblur : 'ignore',
                 rows   : 5,
                 loadurl: loadbase,
                 loadtype: 'POST',
                 loaddata: { 'cid': commentNumber,
                             'entry_id': entryid }
            });
            markEditable(commentID);
            msRemainingTime = getRemainingTime() * 1000;
            timeoutFunction = "makeUneditable('"+commentID+"')"
            window.setTimeout(timeoutFunction, msRemainingTime)      
        }
    }
}

function makeUneditable(commentID) {
    var $source = jQuery("#"+commentID+" > .serendipity_comment_source").clone();
    var text = jQuery("#"+commentID+" > .serendipity_commentBody > * > *:input:first").val();
    //text is undefined if currently the editarea wasn't displayed
    if(typeof text == 'undefined') {
        text = jQuery("#"+commentID+" > .serendipity_commentBody").html();
    }
    jQuery("#"+commentID+" > .serendipity_commentBody").fadeOut('slow').remove();
    jQuery("#"+commentID).html('<div class="serendipity_commentBody">'+text+'</div>');
    jQuery("#"+commentID).append($source);
    jQuery('#commentedit').fadeOut('slow').remove()
}

function markEditable(commentID) {
    var timeLeft = getRemainingTime();
    jQuery("#"+commentID+" > .serendipity_comment_source").append(
                                    '(<a id="commentedit">'+language.editlink+'<a>)'
                                    );
    jQuery('#commentedit').click(function() {
        jQuery("#"+commentID+" > .serendipity_commentBody").click();
    });
    jQuery('#commentedit').css("cursor", "pointer");
    jQuery("#"+commentID+" > .serendipity_comment_source").append(
                '<div id="commentedit_timer">'+language.edittimer+': <span class="commentedit_timer">'+timeLeft+'</span></div>'
                );
    //Pass timer to updateTime to get rid of performance-critical dom-traversing
    //which would otherwise occur in every update
    $timer = jQuery('.commentedit_timer');
    timer = setInterval("updateTime($timer)", 1000);
}

function updateTime($time) {
    var time = $time.html();
    time--;
    $time.html(time);
    if(time <= 0) {
        clearInterval(timer);
        $time.html(0);
    }
}

function getRemainingTime() {
    var base = cebase + 'commentedit_time';
    jQuery.ajax({
        type: "GET",
        async: false,
        url: base,
        success: function(data){
            remainingTime=data;
        }
    });
    return remainingTime;
}

function getLanguage() {
    var base = cebase + 'commentedit_language';
    jQuery.ajax({
        type: "GET",
        async: false,
        url: base,
        dataType: 'json',
        success: function(data){
            language=data;
        }
    });
    return language;
}
