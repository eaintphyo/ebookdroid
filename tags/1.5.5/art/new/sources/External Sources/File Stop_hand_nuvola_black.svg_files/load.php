function setCookie(c_name,value,expiredays){var exdate=new Date();exdate.setDate(exdate.getDate()+expiredays);document.cookie=c_name+"="+escape(value)+";path=/"+((expiredays===null)?"":";expires="+exdate.toGMTString());}function getCookie(c_name){if(document.cookie.length>0){var c_start=document.cookie.indexOf(c_name+"=")
if(c_start!==-1){c_start=c_start+c_name.length+1;var c_end=document.cookie.indexOf(";",c_start);if(c_end===-1){c_end=document.cookie.length;}return unescape(document.cookie.substring(c_start,c_end));}}return"";}function callAPI(data,method,callback,addurl){data['format']='json';$.ajax({data:data,dataType:'json',url:wgScriptPath+'/api.php'+(addurl?addurl:''),type:method,cache:false,success:function(response){if(response.error)alert('API error: '+response.error.info);else callback(response);},error:function(xhr,error){alert('AJAX error: '+error)}});}function addCommas(nStr){nStr+='';x=nStr.split('.');x1=x[0];x2=x.length>1?'.'+x[1]:'';var rgx=/(\d+)(\d{3})/;while(rgx.test(x1)){x1=x1.replace(rgx,'$1'+','+'$2');}return x1+x2;}var autoCollapse=2;var collapseCaption="hide";var expandCaption="show";var maxHeight=300;var ajaxPages=["Special:RecentChanges","Special:Watchlist","Special:Log","Special:Contributions","Forum:Yew_Grove","RuneScape:Page_maintenance","Special:AbuseLog",
"Special:NewFiles","Category:Speedy_deletion_candidates","Category:Speedy_move_candidates","Special:Statistics","Special:NewPages","Special:ListFiles"];var AjaxRCRefreshText='Auto-refresh';importArticles({type:"script",articles:["MediaWiki:Common.js/accountNavigation.js","MediaWiki:Common.js/ajaxrefresh.js","MediaWiki:Common.js/CEB.js","MediaWiki:Common.js/chat.js","MediaWiki:Common.js/collapsibletables.js","MediaWiki:Common.js/countdowntimer.js","MediaWiki:Common.js/displayTimer.js","MediaWiki:Common.js/embedding.js","MediaWiki:Common.js/embedirc.js","MediaWiki:Common.js/exchangeintro.js","MediaWiki:Common.js/highlightTable.js","MediaWiki:Common.js/Konami.js","MediaWiki:Common.js/mastheadBoxes.js","MediaWiki:Common.js/navigationbars.js","MediaWiki:Common.js/navigationbars2.js","MediaWiki:Common.js/pagetitle.js","MediaWiki:Common.js/pengLocations.js","MediaWiki:Common.js/Search.js","MediaWiki:Common.js/sitemeter.js","MediaWiki:Common.js/sitenotice.js",
"MediaWiki:Common.js/standardeditsummaries.js","MediaWiki:Common.js/updateintro.js","User:Joeytje50/Dropadd.js","User:Joeytje50/monstercalc.js","User:Quarenon/survey.js","User:Suppa_chuppa/cvu.js","User:Tyilo/autosort.js","User:Tyilo/signature.js","User:Matthew2602/switch.js"]});if(wgPageName=='RuneScape:RC_Patrol')importScript('User:Suppa_chuppa/rcpatrol.js');importStylesheet('User:Suppa_chuppa/rcp.css');if(wgNamespaceNumber==0||wgNamespaceNumber==120)importScript('MediaWiki:Common.js/linkfix.js')
$(function(){if($('.jcInput').length||$('[class*="jcPane"]').length){importScript('User:Stewbasic/calc.js');}});$(function(){$('#bodyContent .wikia-gallery-add a').unbind('click').click(function(){return false;});});$(document).ready(function(){if(skin=='oasis'&&$.inArray("staff",wgUserGroups)==-1){$('.WikiHeaderRestyle nav ul li.marked ul').prepend('<li><a class="subnav-2a" href="/wiki/RuneScape:About">About us</a></li><li><a class="subnav-2a" href="/wiki/RuneScape:General_disclaimer">Disclaimer</a></li>');}});$(function(){if($('#WikiaArticle .cioCompareLink,#bodyContent .cioCompareLink').size()>0){importScript('User:Quarenon/compare.js');importStylesheet('User:Quarenon/compare.css');}});$(function(){if($('#WikiaArticle .cioCompareLinkBeta,#bodyContent .cioCompareLinkBeta').size()>0){importScript('MediaWiki:Common.js/compareBeta.js');importStylesheet('MediaWiki:Common.css/compareBeta.css');}});$(function(){if($('#WikiaArticle .jcConfig,#bodyContent .jcConfig').size()>0){importScript(
'MediaWiki:Common.js/calc.js');importStylesheet('MediaWiki:Common.css/calc.css');}});$(function(){if(typeof(disableUsernameReplace)!='undefined'&&disableUsernameReplace||wgUserName==null)return;$("span.insertusername").text(wgUserName);});if(wgCanonicalNamespace=="Special"&&wgCanonicalSpecialPageName=="Log"){importScript('User:AzBot/HideBotUploads.js');}if(wgUserName!=null&&(wgPageName=='User:'+wgUserName.replace(/ /g,'_')+'/skin.css'||wgPageName=='User:'+wgUserName.replace(/ /g,'_')+'/skin.js')){window.location.href=window.location.href.replace(/\/skin.(css|js)/i,'/'+skin.replace('oasis','wikia')+'.'+wgPageName.split('/')[1].split('.')[1]);}function AnonMessage(){if(wgUserGroups==null){$('.anonmessage').css('display','inline');}}addOnloadHook(AnonMessage)
if(wgCanonicalSpecialPageName=='Chat'&&skin!='oasis'){window.location.search=window.location.search+(window.location.search?'&':'?')+'useskin=oasis';}if($('.wikia-button.comments.secondary').attr('href')=='#WikiaArticleComments'&&skin=='oasis'){$(document).ready(function(){$('.wikia-button.comments.secondary').attr('href','/wiki/Talk:'+wgPageName).html($('.wikia-button.comments.secondary').html().replace('Comments','Discussion'))})}if(!$('script[src*="title=User:'+wgUserName+'/wikia.js"]').length){importScript('User:'+wgUserName+'/wikia.js');}if(!$('link[href*="title=User:'+wgUserName+'/wikia.css"]').length){importStylesheet('User:'+wgUserName+'/wikia.css');};mw.loader.state({"site":"ready"});

/* cache key: runescape:resourceloader:filter:minify-js:7:c149abbca6fbf3c4cb7ba844066aa157 */